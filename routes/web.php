<?php

use App\Actions\GetContentByBaseAction;
use App\Enums\BooleanEnum;
use App\Http\Controllers\Admin\ArtGalleryController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoreController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Repositories\BaseCategory\BaseCategoryRepositoryInterface;
use Illuminate\Support\Facades\Route;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

Route::group(['prefix' => '{locale?}', 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    Route::get('change-locale/{lang}', function () {
        session(['locale' => request()->input('lang')]);

        return redirect(route('index', ['locale' => request()->input('lang')]));
    })->name('change-locale');

    Route::post('upload-image-dropzone', [CoreController::class, 'dropzone'])->name('upload-image-dropzone');
    Route::post('upload-image-tinymce', [CoreController::class, 'tinyMCEImageUpload'])->name('upload-image-tinymce');

    Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
        Route::get('login', [AuthController::class, 'loginView'])->name('login-view');
        Route::post('login', [AuthController::class, 'login'])->name('login');

        Route::get('register', [AuthController::class, 'registerView'])->name('register-view');
        Route::post('register', [AuthController::class, 'register'])->name('register');

        Route::get('forgot-password', [AuthController::class, 'forgotPasswordView'])->name('forgot-password-view');
        Route::post('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');

        Route::get('verify-code/{user_id}', [AuthController::class, 'verifyCodeView'])->name('verify-code-view');
        Route::post('verify-code', [AuthController::class, 'verifyCode'])->name('verify-code');

        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    });

    Route::get('/', function () {
        session()?->forget('base_id');
        $bases = resolve(BaseCategoryRepositoryInterface::class)->get(['published' => BooleanEnum::ENABLE]);
        return view('web.select_base', compact('bases'));
    })->name('index');

    Route::get('/{base:slug}', function ($locale, $slug) {
        $base = resolve(BaseCategoryRepositoryInterface::class)->find($slug, 'slug', firstOrFail: true);
        session(['base_id' => $base->id]);
        return GetContentByBaseAction::run($base->id);
    })->name('home-by-base');

    // pages
    Route::prefix('pages')->group(function () {
        Route::group(['prefix' => '{base:slug}'], function () {
            Route::get('/menu-list', [MenuController::class, 'menuList'])->name('menu-list');
            Route::get('/portfolio-list', [PortfolioController::class, 'portfolioList'])->name('portfolio-list');
            Route::get('/portfolio-detail/{portfolio:slug}', [PortfolioController::class, 'portfolioDetail'])->name('portfolio-detail');
            Route::get('/gallery-list', [ArtGalleryController::class, 'galleryList'])->name('gallery-list');
            Route::get('/gallery-detail/{artGallery:id}', [ArtGalleryController::class, 'galleryDetail'])->name('gallery-detail');
        });
        Route::get('/blog-list', [BlogController::class, 'blogList'])->name('blog-list');
        Route::get('/blog-detail/{blog:slug}', [BlogController::class, 'blogDetail'])->name('blog-detail');
        Route::get('/about-us', [PageController::class, 'about'])->name('about-us');
        Route::get('/contact-us-page', [ContactController::class, 'contactUs'])->name('contact-us-page');
        Route::post('/contact-from-web', [ContactController::class, 'storeContactFromWeb'])->name('store-contact-from-web');
    });
});

Route::delete('/media/{media}', function ($mediaId) {
    $media = Media::findOrFail($mediaId);
    $media->delete();
    return response()->json(['status' => 'deleted']);
})->name('media.destroy');
