<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *      schema="UpdateBaseRequest",
 *      title="Update Base request",
 *      type="object",
 *      required={"title"},
 *
 *     @OA\Property(property="title", type="string", example="test title"),
 *     @OA\Property(property="description", type="string", example="test description"),
 * )
 */
class UpdateBaseRequest extends FormRequest
{
    use FillAttributes;

    public function rules(): array
    {
        $rules = (new StoreBaseRequest())->rules();
        return array_merge($rules, [

        ]);
    }
}
