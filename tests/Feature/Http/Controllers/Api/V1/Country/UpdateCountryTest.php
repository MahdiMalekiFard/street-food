<?php

declare(strict_types=1);

use App\Models\Country;
use App\Services\Permissions\Models\CountryPermissions;
use App\Services\Permissions\Models\SharedPermissions;
use function Pest\Laravel\assertDatabaseHas;

uses()->group('country');

it('update country', function (array $payload = [], array $expected = []) {
    $model = Country::factory()->create();

    $data = array_merge([
        'title'       => 'test updated',
        'description' => 'test updated',
    ], $payload);

    $response = login(permissions: Arr::get($payload, 'permissions', [SharedPermissions::Admin]))->patchJson('api/v1/country/' . $model->id, $data);
    $result = $response->json();
    $status = Arr::get($expected, 'status', 202);

    $response
        ->assertStatus($status)
        ->when(Arr::has($expected, 'assertJsonStructure'))
        ->assertJsonStructure(Arr::get($expected, 'assertJsonStructure', []))
        ->when(Arr::has($expected, 'assertJson'))
        ->assertJson(Arr::get($expected, 'assertJson'));

    if ($status === 202) {
        assertDatabaseHas('countries', [
            'id' => $result['data']['id']
        ]);

        assertDatabaseHas('translations', [
            'locale' => app()->getLocale(),
            'key'    => 'title',
            'value'  => $data['title']
        ]);

        assertDatabaseHas('translations', [
            'locale' => app()->getLocale(),
            'key'    => 'description',
            'value'  => $data['description']
        ]);

        // You have to watch the tables change
    }

})->with([
    'default data'                    => [
        'payload'  => [],
        'expected' => [
            'status'              => 202,
            'assertJsonStructure' => ['data' => [
                'id',
                'title',
                'description'
            ]],
            'assertJson'          => ['data' => [
                'id'          => 1,
                'title'       => 'test updated',
                'description' => 'test updated',
            ]
            ]
        ]
    ],
    'default data with permission'    => [
        'payload'  => ['permissions' => [CountryPermissions::Update]],
        'expected' => ['status' => 202]
    ],
    'default data without permission' => [
        'payload'  => ['permissions' => []],
        'expected' => ['status' => 403]
    ],
    'validation errors'               => [
        'payload'  => ['title' => '', 'description' => ''],
        'expected' => [
            'status'              => 422,
            'assertJsonStructure' => ['errors' => ['title', 'description']]
        ]
    ],
])->skip();
