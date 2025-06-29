<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\Models\Base;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\UpdateBaseRequest;
use App\Http\Requests\StoreBaseRequest;
use App\Http\Resources\BaseResource;
use App\Actions\Base\StoreBaseAction;
use App\Actions\Base\DeleteBaseAction;
use App\Actions\Base\UpdateBaseAction;
use App\Repositories\Base\BaseRepositoryInterface;
use App\Services\AdvancedSearchFields\AdvancedSearchFieldsService;
use Illuminate\Http\Response;
use OpenApi\Annotations as OA;

class BaseController extends BaseApiController
{

    public function __construct()
    {
        $this->middleware('auth:api');
        $this->authorizeResource(Base::class);
    }

    /**
     * @OA\Get(
     *     path="/base",
     *     operationId="getBases",
     *     tags={"Base"},
     *     summary="get bases list",
     *     description="Returns list of bases",
     *     @OA\Parameter(ref="#/components/parameters/Page"),
     *     @OA\Parameter(ref="#/components/parameters/PageLimit"),
     *     @OA\Parameter (ref="#/components/parameters/Filter"),
     *     @OA\Parameter (ref="#/components/parameters/AdvancedSearch"),
     *     @OA\Parameter(ref="#/components/parameters/Sort"),
     *     @OA\Response(response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(type="object",
     *              @OA\Property(property="message",type="string",example="example message"),
     *              @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/BaseResource")),
     *              @OA\Property(property="meta",ref="#/components/schemas/Meta")
     *          )
     *     )
     *     )
     */
    public function index(BaseRepositoryInterface $repository): JsonResponse
    {
        return Response::dataWithAdditional(
            BaseResource::collection($repository->paginate()),
            additional: [
                'advance_search_field' => AdvancedSearchFieldsService::generate(Base::class),
                'extra'                => $repository->extra(),
            ]
        );
    }

    /**
     * @OA\Get(
     *     path="/base/{base}",
     *     operationId="getBaseByID",
     *     tags={"Base"},
     *     summary="Get base information",
     *     description="Returns base data",
     *     @OA\Parameter(name="base", required=true,in="path", @OA\Schema(type="integer")),
     *     @OA\Response(response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(type="object",
     *              @OA\Property(property="message",type="string",example="example message"),
     *              @OA\Property(property="data",ref="#/components/schemas/BaseResource")
     *          )
     *      )
     * )
     */
    public function show(Base $base): JsonResponse
    {
        return Response::data(
            BaseDetailResource::make($base),
        );
    }

    /**
     * @OA\Post(
     *     path="/base",
     *     operationId="storeBase",
     *     tags={"Base"},
     *     summary="Store new base",
     *     description="Returns new base data",
     *     @OA\RequestBody(required=true,
     *          @OA\JsonContent(ref="#/components/schemas/StoreBaseRequest"),
     *          @OA\MediaType(mediaType="application/x-www-form-urlencoded",@OA\Schema(ref="#/components/schemas/StoreBaseRequest"))
     *     ),
     *     @OA\Response(response=201,
     *          description="Successful operation",
     *          @OA\JsonContent(type="object",
     *              @OA\Property(property="message",type="string",example="example message"),
     *              @OA\Property(property="data",ref="#/components/schemas/BaseResource")
     *          )
     *      )
     * )
     */
    public function store(StoreBaseRequest $request): JsonResponse
    {
        $model = StoreBaseAction::run($request->validated());
        return Response::data(
            BaseResource::make($model),
            trans('general.model_has_stored_successfully',['model'=>trans('base.model')]),
            Response::HTTP_CREATED
        );
    }

    /**
     * @OA\Put(
     *     path="/base/{base}",
     *     operationId="updateBase",
     *     tags={"Base"},
     *     summary="Update existing base",
     *     description="Returns updated base data",
     *     @OA\Parameter(name="base",required=true,in="path",@OA\Schema(type="integer")),
     *     @OA\RequestBody(required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UpdateBaseRequest"),
     *          @OA\MediaType(mediaType="application/x-www-form-urlencoded",@OA\Schema(ref="#/components/schemas/UpdateBaseRequest"))
     *     ),
     *     @OA\Response(response=202,
     *          description="Successful operation",
     *          @OA\JsonContent(type="object",
     *              @OA\Property(property="message",type="string",example="example message"),
     *              @OA\Property(property="data",ref="#/components/schemas/BaseResource")
     *          )
     *      )
     * )
     */
    public function update(UpdateBaseRequest $request, Base $base): JsonResponse
    {
        $data = UpdateBaseAction::run($base, $request->all());
        return Response::data(
            BaseResource::make($data),
            trans('general.model_has_updated_successfully',['model'=>trans('base.model')]),
            Response::HTTP_ACCEPTED
        );
    }

    /**
     * @OA\Delete(
     *      path="/base/{base}",
     *      operationId="deleteBase",
     *      tags={"Base"},
     *      summary="Delete existing base",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(name="base",required=true,in="path",@OA\Schema(type="integer")),
     *      @OA\Response(response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(type="object",@OA\Property(property="message",type="string",example="example message"))
     *      )
     * )
     */
    public function destroy(Base $base): JsonResponse
    {
        DeleteBaseAction::run($base);
        return Response::data(
            true,
            trans('general.model_has_deleted_successfully',['model'=>trans('base.model')]),
            Response::HTTP_OK
        );
    }

//    /**
//     * @OA\Get(
//     *     path="/base/toggle/{base}",
//     *     operationId="toggleBase",
//     *     tags={"Base"},
//     *     summary="Toggle Base",
//     *     description="Toggle Base",
//     *     @OA\Response(response=200,
//     *         description="Successful operation",
//     *         @OA\JsonContent(type="object",
//     *             @OA\Property(property="message", type="string", example="example message"),
//     *             @OA\Property(property="data", type="object",
//     *                 @OA\Property(property="user", ref="#/components/schemas/BaseResource")
//     *             )
//     *         )
//     *     )
//     * )
//     */
//    public function toggle(Base $base): JsonResponse
//    {
//        $category = ToggleBaseAction::run($base);
//
//        return Response::data(
//            BaseResource::make($base),
//            trans('general.model_has_toggled_successfully', ['model' => trans('base.model')]),
//            Response::HTTP_OK
//        );
//    }
//
//    /**
//     * @OA\Get(
//     *     path="/base/data",
//     *     operationId="getBaseData",
//     *     tags={"Base"},
//     *     summary="Get Base data",
//     *     description="Returns Base data",
//     *     @OA\Response(response=200,
//     *         description="Successful operation",
//     *         @OA\JsonContent(type="object",
//     *             @OA\Property(property="message", type="string", example="example message"),
//     *             @OA\Property(property="data", type="object",
//     *                 @OA\Property(property="user", ref="#/components/schemas/BaseResource")
//     *             )
//     *         )
//     *     )
//     * )
//     */
//    public function extraData(Request $request): JsonResponse
//    {
//        $this->authorize('create', Base::class);
//        return Response::data(
//            [
//                'user'  => $request->user()
//            ]
//        );
//    }
}
