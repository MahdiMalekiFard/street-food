<?php

declare(strict_types=1);

use App\Models\User;

uses()->group('user');

beforeEach(function () {
    $items = [
        [
            'title'       => 'title 1',
            'description' => 'description 1',
            'body'        => 'body 1',
            'published'   => false,
            'created_at'  => '2021-01-01 00:00:00',
        ],
        [
            'title'       => 'title 2',
            'description' => 'description 2',
            'body'        => 'body 2',
            'published'   => true,
            'created_at'  => '2021-01-02 00:00:00',
        ],
        [
            'title'       => 'title 3',
            'description' => 'description 3',
            'body'        => 'body 3',
            'published'   => false,
            'created_at'  => '2021-01-03 00:00:00',
        ],
        [
            'title'       => 'title 4',
            'description' => 'description 4',
            'body'        => 'body 4',
            'published'   => true,
            'created_at'  => '2021-01-04 00:00:00',
        ],
        [
            'title'       => 'title 5',
            'description' => 'description 5',
            'body'        => 'body 5',
            'published'   => true,
            'created_at'  => '2021-01-05 00:00:00',
        ],
    ];

    foreach ($items as $item) {
        $model = User::factory(1)->create([
            'created_at' => $item['created_at'],
            'published'  => $item['published'],
        ])->first();
        $model->translations()->delete();
        foreach ($model->translatable as $key) {
            $model->translations()->create([
                'key'    => $key,
                'value'  => $item[$key],
                'locale' => app()->getLocale()
            ]);
        }
    }
});

it('index user', function (array $payload = [], array $expected = []) {
    $query = Arr::query([
        ...[
            'page'       => 1,
            'page_limit' => 5,
            'sort'       => 'id',
        ], ...$payload,
    ]);

    $response = login()->getJson('api/v1/user?' . $query);
    $result = $response->json();
    $response
        ->assertStatus(Arr::get($expected, 'status', 200))
        ->assertJsonStructure(getCommonJsonStructureIndex([
            'id',
            'title',
            'description',
            'updated_at',
            'created_at',
        ]));

    if ($assertJsonCount = Arr::get($expected, 'assertJsonCount')) {
        $response->assertJsonCount($assertJsonCount, 'data');
    }

    if ($assertJsonItem = Arr::get($expected, 'assertJsonItem')) {
        expect()->assertJsonItem($result['data'], $assertJsonItem, 'User with the expected structure is not returned');
    }
})->with([
    'sort id and per page 1'             => [
        'payload'  => ['sort' => 'id', 'page_limit' => 1],
        'expected' => ['status' => 200, 'assertJsonCount' => 1, 'assertJsonItem' => ['id' => 1, 'title' => 'title 1']],
    ],
    'sort -id and per page 1'            => [
        'payload'  => ['sort' => '-id', 'page_limit' => 1],
        'expected' => ['status' => 200, 'assertJsonCount' => 1, 'assertJsonItem' => ['id' => 5, 'title' => 'title 5']],
    ],
    'sort -created_at and per page 1'    => [
        'payload'  => ['sort' => '-created_at', 'page_limit' => 1],
        'expected' => ['status' => 200, 'assertJsonCount' => 1, 'assertJsonItem' => ['id' => 5, 'title' => 'title 5']],
    ],
    'search title 1 must be return'      => [
        'payload'  => ['filter' => ['search' => 'title 1']],
        'expected' => ['status' => 200, 'assertJsonCount' => 1, 'assertJsonItem' => ['id' => 1, 'title' => 'title 1']],
    ],
    'search title 10 must not be return' => [
        'payload'  => ['filter' => ['search' => 'title 10']],
        'expected' => ['status' => 200, 'assertJsonCount' => 0],
    ],
    'filter published true'              => [
        'payload'  => ['filter' => ['a_search' => [advanceSearchRecord('published', true)]]],
        'expected' => ['status' => 200, 'assertJsonCount' => 3],
    ],
    'filter published false'             => [
        'payload'  => ['filter' => ['a_search' => [advanceSearchRecord('published', false)]]],
        'expected' => ['status' => 200, 'assertJsonCount' => 2],
    ],
    'filter with id 1'                   => [
        'payload'  => ['filter' => ['a_search' => [advanceSearchRecord('id', 1)]]],
        'expected' => ['status' => 200, 'assertJsonCount' => 1, 'assertJsonItem' => ['id' => 1, 'title' => 'title 1']],
    ],
])->skip();
