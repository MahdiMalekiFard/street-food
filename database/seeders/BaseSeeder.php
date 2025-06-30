<?php

namespace Database\Seeders;

use App\Actions\Base\StoreBaseAction;
use Exception;
use Illuminate\Database\Seeder;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = require database_path('seeders/data/cafe.php');

        foreach ($data['bases'] as $row) {

            $base = StoreBaseAction::run([
                'title'       => $row['title'],
                'description' => $row['description'],
                'published'   => $row['published'],
            ]);

            try {
                $base->addMedia($row['image'])
                     ->preservingOriginal()
                     ->toMediaCollection('image');
            } catch (Exception) {
                // do nothing
            }
        }
    }
}
