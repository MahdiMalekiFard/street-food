<?php

namespace Database\Seeders;

use App\Actions\Page\StorePageAction;
use App\Enums\PageTypeEnum;
use App\Models\Page;
use Exception;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var Page $page */
        $page = StorePageAction::run([
            'type'  => PageTypeEnum::ABOUT_US->value,
            'title' => 'Genießen Sie eine einzigartige Geschmacksreise',
            'body'  => "Willkommen bei St. Pauli Street Food in der Reeperbahn 96, im Herzen des lebendigen St. Pauli-Viertels in Hamburg! Hier, wo das Leben rund um die Uhr pulsiert und Touristen wie Einheimische zusammenkommen, um Urlaub und Feiertage zu genießen, haben wir ein Streetfood-Paradies geschaffen, das Geschmäcker aus aller Welt feiert.
Bei St. Pauli Street Food ist für jeden etwas dabei. Unsere knusprigen Pizzaslices werden mit hausgemachtem Teig und hausgemachter Soße zubereitet, die für ein authentisches Geschmackserlebnis sorgen. Unsere beliebte Asia Box bringt die Aromen Asiens zum Leben, während unsere saftigen Hähnchenburger, Hähnchenkeulen und knusprigen Hähnchenflügel – oder wie wir sie nennen, Chicken Fried – nach unserem eigenen Rezept kreiert werden. Dazu servieren wir hausgemachte Soßen, die den perfekten letzten Schliff geben.
In unserer großen Bar bieten wir eine spannende Auswahl an einzigartigen und köstlichen Drinks, die zu jeder Stimmung passen – egal, ob du einen entspannten Abend oder eine ausgelassene Nacht in St. Pauli planst.
Mit 15 Jahren Erfahrung in der Gastronomie aus Dänemark bringen wir unsere Leidenschaft für gutes Essen und Qualität nach Hamburg. Wir haben an alle gedacht – von Liebhabern asiatischer Köstlichkeiten über Fans europäischer Klassiker bis hin zu denen, die amerikanisch inspiriertes Comfort Food lieben. Bei St. Pauli Street Food findest du immer etwas, das deinem Geschmack entspricht.
Komm vorbei und erlebe unsere Speisen, unsere Drinks und die lebendige Atmosphäre – wir freuen uns darauf, dich willkommen zu heißen!",
        ]);

        try {
            $page->addMedia(public_path('img/about/about2.jpg'))
                 ->preservingOriginal()
                 ->toMediaCollection('image');
        } catch (Exception) {
            // do nothing
        }
    }
}
