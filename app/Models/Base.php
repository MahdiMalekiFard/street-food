<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\BooleanEnum;
use App\Traits\HasSlugFromTranslationTitle;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasTranslationAuto;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @property string $title
 */
class Base extends Model implements HasMedia
{
    use HasFactory;
    use HasTranslationAuto;
    use InteractsWithMedia;
    use HasSlugFromTranslationTitle;

    protected $fillable = [
        'published', 'languages', 'slug',
    ];

    protected $casts = [
        'published' => BooleanEnum::class,
        'languages' => 'array',
    ];

    public array $translatable = [
        'title','description'
    ];

    /*
    |--------------------------------------------------------------------------
    | Model Configuration
    |--------------------------------------------------------------------------
    */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
             ->singleFile()
             ->registerMediaConversions(
                 function () {
                     $this->addMediaConversion('thumb')->fit(Fit::Crop, 100, 100);
                     $this->addMediaConversion('480')->fit(Fit::Crop, 854, 480);
                     $this->addMediaConversion('720')->fit(Fit::Crop, 1280, 720);
                 }
             );
    }

    /*
    |--------------------------------------------------------------------------
    | Model Relations
    |--------------------------------------------------------------------------
    */

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'base_id');
    }

    public function artGalleries()
    {
        return $this->hasMany(ArtGallery::class, 'base_id');
    }


    /*
    |--------------------------------------------------------------------------
    | Model Scope
    |--------------------------------------------------------------------------
    */
    public function scopeActive(Builder $query, bool $value = true): Builder
    {
        return $query->where('published', $value);
    }

    /*
    |--------------------------------------------------------------------------
    | Model Attributes
    |--------------------------------------------------------------------------
    */


    /*
    |--------------------------------------------------------------------------
    | Model Custom Methods
    |--------------------------------------------------------------------------
    */

}
