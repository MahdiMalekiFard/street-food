<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *      schema="UpdateMenuRequest",
 *      title="Update Menu request",
 *      type="object",
 *      required={"title"},
 *
 *     @OA\Property(property="title", type="string", example="test title"),
 *     @OA\Property(property="description", type="string", example="test description"),
 * )
 */
class UpdateMenuRequest extends FormRequest
{
    use FillAttributes;

    public function rules(): array
    {
        $rules = (new StoreMenuRequest())->rules();
        return array_merge($rules, [

        ]);
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'published' => $this->input('published') ?? true
        ]);
    }
}
