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
            'body'  => "Willkommen in Ihrer gemütlichen Ecke voller Komfort, Geschmack und Inklusivität. Unser Lokal ist mehr als nur ein Ort zum Essen – hier trifft hervorragender Kaffee auf Gemeinschaft und jeder Gast fühlt sich wohl.
Wir sind stolz auf unser einladendes, rollstuhlgerechtes Ambiente mit bequemen Parkplätzen, Sitzgelegenheiten und barrierefreien Toiletten. Ob Sie schnell etwas zum Mitnehmen bestellen, ein Familienessen planen oder sich mit Freunden zum Brunch treffen – bei uns sind Sie an der richtigen Adresse: Wir bieten Speisen zum Mitnehmen, Essen zum Mitnehmen und Abholung an der Bordsteinkante.
Wir sind bekannt für hervorragenden Kaffee und servieren Ihnen eine sorgfältig zusammengestellte Speisekarte mit Bio-Gerichten, kleinen Gerichten, vegetarischen Optionen und einer erlesenen Auswahl an alkoholischen Getränken – darunter Bier, Cocktails, Spirituosen und Wein.
Unser Lokal bietet eine Vielzahl von Speisemöglichkeiten, von Frühstück und Mittagessen über Abendessen, Desserts bis hin zu Catering. Sie finden sowohl Thekenservice als auch bequeme Sitzgelegenheiten – ideal für alle Anlässe, vom zwanglosen Besuch bis hin zu Gruppentreffen.
Unsere entspannte, gemütliche und ruhige Atmosphäre lädt zu Geselligkeit und Ruhe ein. Wir sind stolz darauf, familienfreundlich, LGBTQ+-inklusiv und ein Transgender-sicherer Ort zu sein. Mit Annehmlichkeiten wie geschlechtsneutralen Toiletten, Wickeltischen und Hochstühlen sorgen wir für ein stressfreies Erlebnis für alle.
Wir nehmen Reservierungen entgegen und bieten verschiedene Zahlungsmethoden an, darunter Kreditkarten, Debitkarten und NFC-Mobiltelefone. Für diejenigen, die mit dem Auto anreisen, stehen bequeme Parkplätze in einem nahegelegenen, gebührenpflichtigen Parkhaus zur Verfügung. Vom ersten Schluck Kaffee bis zum letzten Bissen Dessert ist bei uns jeder Moment sorgfältig vorbereitet.
Kommen Sie wegen des Essens und bleiben Sie wegen des Erlebnisses. Für uns geht es bei italienischer Küche nicht nur um Rezepte – es geht um Emotion, Tradition und den wahren Geschmack Italiens. Unsere Speisekarte ist von klassischen italienischen Gerichten inspiriert, die mit frischen, sorgfältig ausgewählten Zutaten zubereitet und mit Liebe serviert werden. Von handgemachter Pasta und Steinofenpizza bis hin zu delikaten Antipasti und cremigen Risottos – jedes Gericht ist eine Hommage an die italienische Küche.
Unsere Köche bringen das Beste der Mittelmeerregion auf Ihren Tisch und legen dabei Wert auf Qualität, Ausgewogenheit und Geschmack. Egal ob Sie sich für eine einfache Margherita oder eine herzhafte Lasagne entscheiden, wir versprechen Ihnen ein Geschmackserlebnis, das sich wie eine Reise ins Herz Italiens anfühlt.",
        ]);

        try {
            $page->addMedia(public_path('img/about/about.jpg'))
                 ->preservingOriginal()
                 ->toMediaCollection('image');
        } catch (Exception) {
            // do nothing
        }
    }
}
