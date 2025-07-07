<?php

namespace Database\Seeders;

use App\Actions\Blog\StoreBlogAction;
use App\Actions\Category\StoreCategoryAction;
use App\Enums\CategoryTypeEnum;
use Exception;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = require database_path('seeders/data/cafe.php');

        $category = StoreCategoryAction::run([
            'published'       => 1,
            'type'            => CategoryTypeEnum::BLOG,
            'title'           => 'Ein Platz für alle',
            'description'     => 'Unser Café-Restaurant setzt auf Inklusivität. Egal, ob Sie Veganer, Glutenfreier oder einfach nur wählerischer Esser sind (wir urteilen nicht!), wir haben eine Speisekarte mit Optionen für alle zusammengestellt.',
            'body'            => '
<p>
    Unser Café-Restaurant legt Wert auf Inklusivität. Egal, ob Sie vegan, glutenfrei oder einfach nur wählerisch sind (wir urteilen nicht!),
    wir haben eine Speisekarte mit Optionen für alle zusammengestellt.Wir freuen uns, wenn Studierende am Laptop tippen,
    Paare Desserts teilen oder Eltern ihren Kleinen ihren ersten Cappuccino anbieten.
</p>
            ',
            'slug'            => 'Ein-Platz-für-alle',
            'seo_title'       => 'Ein Platz für alle',
            'seo_description' => 'Unser Café-Restaurant setzt auf Inklusivität. Egal, ob Sie Veganer, Glutenfreier oder einfach nur wählerischer Esser sind (wir urteilen nicht!), wir haben eine Speisekarte mit Optionen für alle zusammengestellt.',
        ]);

        foreach ($data['blogs'] as $row) {

            $blog = StoreBlogAction::run([
                'title'           => $row['title'],
                'description'     => $row['description'],
                'body'            => $row['body'],
                'slug'            => $row['slug'],
                'user_id'         => 1,
                'published'       => $row['published'],
                'seo_title'       => $row['seo_title'],
                'seo_description' => $row['seo_description'],
            ]);

            $blog->categories()->sync([$category->id]);

            try {
                $blog->addMedia($row['image'])
                     ->preservingOriginal()
                     ->toMediaCollection('image');
            } catch (Exception) {
                // do nothing
            }
        }
    }
}
