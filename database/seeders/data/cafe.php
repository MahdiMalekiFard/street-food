<?php

use App\Enums\BooleanEnum;

return [
    'bases' => [
        [
            'title'       => 'DÄNISCHE PIZZA',
            'slug'        => 'dänische-pizza',
            'description' => 'Beschreibung des dänischen Pizzabodens',
            'published'   => true,
            'image'       => public_path('img/base/pizza.jpg'),
        ],
        [
            'title'       => 'GEBRATENES HUHN',
            'slug'        => 'gebratenes-Huhn',
            'description' => 'Beschreibung der gebratenen Hühnerbasis',
            'published'   => true,
            'image'       => public_path('img/base/chicken.jpg'),
        ],
        [
            'title'       => 'ASIA BOX',
            'slug'        => 'asia-box',
            'description' => 'Beschreibung der Asia-Box basis',
            'published'   => true,
            'image'       => public_path('img/base/asia.jpg'),
        ],
        [
            'title'       => 'COCKTAIL BAR',
            'slug'        => 'cocktail-bar',
            'description' => 'Beschreibung der Cocktailbar-Basis',
            'published'   => true,
            'image'       => public_path('img/base/cocktail.jpg'),
        ],
    ],

    'sliders' => [
        // Dänische Pizza
        [
            'title'       => 'Wo skandinavische Tradition auf italienische Leidenschaft trifft',
            'description' => 'Eine perfekte Harmonie aus frischen nordischen Zutaten und im Steinofen gebackener italienischer Kruste.',
            'published'   => true,
            'base_id'     => 1,
            'image'       => public_path('img/slider/img_slider_1.jpg'),
        ],
        [
            'title'       => 'Nordische Kruste, globaler Geschmack',
            'description' => 'Entdecken Sie unsere einzigartigen dänischen Pizzen, gebacken mit Käse aus der Region, Bio-Gemüse und rauchigen Belägen.',
            'published'   => true,
            'base_id'     => 1,
            'image'       => public_path('img/slider/img_slider_6.jpg'),
        ],
        [
            'title'       => 'Der Geschmack Dänemarks auf einer Pizza',
            'description' => 'Probieren Sie unsere dänisch inspirierten Pizzen mit reichhaltigem, cremigem Käse und langsam gebratenem Fleisch.',
            'published'   => true,
            'base_id'     => 1,
            'image'       => public_path('img/slider/img_slider_7.jpg'),
        ],
        [
            'title'       => 'Hygge auf einem Teller',
            'description' => 'Unsere Pizzen sind so gestaltet, dass sie Wärme und Freude bringen - mit buttrigem Boden, frischen lokalen Belägen.',
            'published'   => true,
            'base_id'     => 1,
            'image'       => public_path('img/slider/img_slider_8.jpg'),
        ],
        
        // Gebratenes Huhn
        [
            'title'       => 'Außen knusprig, innen saftig',
            'description' => 'Goldbraun, knusprig und perfekt zubereitet - unser Brathähnchen wird mit kräftigen Gewürzen gewürzt und frisch frittiert, für diesen unschlagbaren Knuspergenuss bei jedem Bissen.',
            'published'   => true,
            'base_id'     => 2,
            'image'       => public_path('img/slider/img_slider_3.jpg'),
        ],
        [
            'title'       => 'Geboren, um gebraten zu werden',
            'description' => 'Holen Sie sich das knusprigste, leckerste und leckerste Hähnchen der Stadt. Es ist eine Sauerei. Es ist saftig. Es macht süchtig.',
            'published'   => true,
            'base_id'     => 2,
            'image'       => public_path('img/slider/img_slider_4.jpg'),
        ],
        [
            'title'       => 'Der Crunch, der Herzen gewinnt',
            'description' => 'Beißen Sie in knusprige Panade und zartes Hähnchenfleisch, gewürzt mit unserer Spezialmischung. Heiß, frisch und mit viel Charakter serviert.',
            'published'   => true,
            'base_id'     => 2,
            'image'       => public_path('img/slider/img_slider_5.jpg'),
        ],

        // Asia Box
        [
            'title'       => 'Asien in jedem Bissen',
            'description' => 'Von Thai-Nudeln über koreanisches BBQ bis hin zu japanischen Sushi-Rollen - unsere Asia Box bringt die kräftigen, süßen, würzigen und herzhaften Aromen des Ostens direkt auf Ihren Tisch.',
            'published'   => true,
            'base_id'     => 3,
            'image'       => public_path('img/slider/img_slider_9.jpg'),
        ],
        [
            'title'       => 'Den Osten entdecken',
            'description' => 'Ihr liebstes asiatisches Streetfood, gebraten, gedämpft und perfekt gewürzt - alles serviert in einer unwiderstehlichen Box.',
            'published'   => true,
            'base_id'     => 3,
            'image'       => public_path('img/slider/img_slider_10.jpg'),
        ],
        [
            'title'       => 'Probieren Sie die Straßen Asiens',
            'description' => 'Unsere Asia Box bietet Ihnen brutzelnde Nudeln, knusprige Frühlingsrollen, Klebreis und mehr - inspiriert von Nachtmärkten von Bangkok bis Tokio.',
            'published'   => true,
            'base_id'     => 3,
            'image'       => public_path('img/slider/img_slider_11.jpg'),
        ],

        // Cocktail Bar
        [
            'title'       => 'Schütteln. Umrühren. Nippen. Wiederholen.',
            'description' => 'Von zeitlosen Klassikern bis hin zu gewagten neuen Mischungen serviert unsere Cocktailbar handgemachte Getränke mit erstklassigen Spirituosen, frischen Zutaten und kühner Kreativität in jedem Glas.',
            'published'   => true,
            'base_id'     => 4,
            'image'       => public_path('img/slider/img_slider_2.jpg'),
        ],
        [
            'title'       => 'Wo die Nacht beginnt',
            'description' => 'Tauchen Sie ein in eine Atmosphäre aus Musik, stimmungsvoller Beleuchtung und meisterhaft gemixten Getränken.',
            'published'   => true,
            'base_id'     => 4,
            'image'       => public_path('img/slider/img_slider_12.jpg'),
        ],
        [
            'title'       => 'Paradies im Glas',
            'description' => 'Kommen Sie mit unseren spritzigen Cocktails in Urlaubsstimmung - denken Sie an Zitrusfrüchte, exotische Aufgüsse und sanften Rum unter Neonlicht.',
            'published'   => true,
            'base_id'     => 4,
            'image'       => public_path('img/slider/img_slider_13.jpg'),
        ],
    ],

    'portfolios' => [
        [
            'title'           => 'albacore tuna broccoli',
            'description'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'body'            => '
<p class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sed est risus, dignissim quis nisl et, semper convallis lacus. Vestibulum semper interdum dui in pretium. Nam dapibus ac odio non pellentesque. In in fermentum mi, eget egestas eros. Nunc venenatis iaculis massa sit amet luctus. Aliquam et ligula ut arcu suscipit efficitur. Sed ut ante quam. Duis et finibus magna. Maecenas vitae neque augue.</p>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Integer ornare magna purus, sed faucibus ipsum luctus sit amet. Fusce euismod leo eget ex commodo auctor. Praesent id nisl at felis ultrices laoreet nec sit amet libero.</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>element</strong></h5>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">With specific ingredients: Tuna accounted for 43%, cabbage 8%, potatoes and carrots 7%. The rest is soybean oil, sweet corn, peas, chili sauce, ketchup, wheat. With spices, flavor enhancers and yeast extracts</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>nutrition</strong></h5>
<div class="bot d-flex">
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Calories: 191</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fat: 1.4g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sodium: 83mg</li>
        <li class="aos-init" data-aos-duration="1000" data-aos="fade-up">Carbohydrates: 0g</li>
    </ul>
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fiber: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sugar: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Protein: 42g</li>
    </ul>
</div>
<p class="text aos-init" data-aos-duration="1000" data-aos="fade-up">About fat: Tuna contains healthy fats like omega 3 fatty acids but is low in fat overall (less than 2 grams per can). However, different types of tuna will have different amounts of fat. The following tuna varieties are listed in order from fattest to least fatty: fresh bluefin, canned white albacore, canned light tuna, fresh skipjack and fresh yellowfin.</p>
<p class="aos-init" data-aos-duration="1000" data-aos="fade-up">About protein: Tuna is a protein-rich food. One can of tuna contains 42 grams of complete protein and many essential amino acids.</p>
            ',
            'slug'            => 'albacore-tuna-broccoli-1',
            'seo_title'       => 'albacore tuna broccoli',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'published'       => true,
            'languages'       => ['en'],
            'base_id'         => 1,
            'image'           => public_path('img/portfolio/gallery-1.jpg'),
        ],
        [
            'title'           => 'albacore tuna broccoli',
            'description'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'body'            => '
<p class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sed est risus, dignissim quis nisl et, semper convallis lacus. Vestibulum semper interdum dui in pretium. Nam dapibus ac odio non pellentesque. In in fermentum mi, eget egestas eros. Nunc venenatis iaculis massa sit amet luctus. Aliquam et ligula ut arcu suscipit efficitur. Sed ut ante quam. Duis et finibus magna. Maecenas vitae neque augue.</p>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Integer ornare magna purus, sed faucibus ipsum luctus sit amet. Fusce euismod leo eget ex commodo auctor. Praesent id nisl at felis ultrices laoreet nec sit amet libero.</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>element</strong></h5>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">With specific ingredients: Tuna accounted for 43%, cabbage 8%, potatoes and carrots 7%. The rest is soybean oil, sweet corn, peas, chili sauce, ketchup, wheat. With spices, flavor enhancers and yeast extracts</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>nutrition</strong></h5>
<div class="bot d-flex">
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Calories: 191</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fat: 1.4g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sodium: 83mg</li>
        <li class="aos-init" data-aos-duration="1000" data-aos="fade-up">Carbohydrates: 0g</li>
    </ul>
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fiber: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sugar: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Protein: 42g</li>
    </ul>
</div>
<p class="text aos-init" data-aos-duration="1000" data-aos="fade-up">About fat: Tuna contains healthy fats like omega 3 fatty acids but is low in fat overall (less than 2 grams per can). However, different types of tuna will have different amounts of fat. The following tuna varieties are listed in order from fattest to least fatty: fresh bluefin, canned white albacore, canned light tuna, fresh skipjack and fresh yellowfin.</p>
<p class="aos-init" data-aos-duration="1000" data-aos="fade-up">About protein: Tuna is a protein-rich food. One can of tuna contains 42 grams of complete protein and many essential amino acids.</p>
            ',
            'slug'            => 'albacore-tuna-broccoli-2',
            'seo_title'       => 'albacore tuna broccoli',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'published'       => true,
            'languages'       => ['en'],
            'base_id'         => 1,
            'image'           => public_path('img/portfolio/gallery-2.jpg'),
        ],
        [
            'title'           => 'albacore tuna broccoli',
            'description'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'body'            => '
<p class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sed est risus, dignissim quis nisl et, semper convallis lacus. Vestibulum semper interdum dui in pretium. Nam dapibus ac odio non pellentesque. In in fermentum mi, eget egestas eros. Nunc venenatis iaculis massa sit amet luctus. Aliquam et ligula ut arcu suscipit efficitur. Sed ut ante quam. Duis et finibus magna. Maecenas vitae neque augue.</p>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Integer ornare magna purus, sed faucibus ipsum luctus sit amet. Fusce euismod leo eget ex commodo auctor. Praesent id nisl at felis ultrices laoreet nec sit amet libero.</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>element</strong></h5>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">With specific ingredients: Tuna accounted for 43%, cabbage 8%, potatoes and carrots 7%. The rest is soybean oil, sweet corn, peas, chili sauce, ketchup, wheat. With spices, flavor enhancers and yeast extracts</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>nutrition</strong></h5>
<div class="bot d-flex">
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Calories: 191</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fat: 1.4g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sodium: 83mg</li>
        <li class="aos-init" data-aos-duration="1000" data-aos="fade-up">Carbohydrates: 0g</li>
    </ul>
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fiber: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sugar: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Protein: 42g</li>
    </ul>
</div>
<p class="text aos-init" data-aos-duration="1000" data-aos="fade-up">About fat: Tuna contains healthy fats like omega 3 fatty acids but is low in fat overall (less than 2 grams per can). However, different types of tuna will have different amounts of fat. The following tuna varieties are listed in order from fattest to least fatty: fresh bluefin, canned white albacore, canned light tuna, fresh skipjack and fresh yellowfin.</p>
<p class="aos-init" data-aos-duration="1000" data-aos="fade-up">About protein: Tuna is a protein-rich food. One can of tuna contains 42 grams of complete protein and many essential amino acids.</p>
            ',
            'slug'            => 'albacore-tuna-broccoli-3',
            'seo_title'       => 'albacore tuna broccoli',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'published'       => true,
            'languages'       => ['en'],
            'base_id'         => 1,
            'image'           => public_path('img/portfolio/gallery-3.jpg'),
        ],
        [
            'title'           => 'albacore tuna broccoli',
            'description'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'body'            => '
<p class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sed est risus, dignissim quis nisl et, semper convallis lacus. Vestibulum semper interdum dui in pretium. Nam dapibus ac odio non pellentesque. In in fermentum mi, eget egestas eros. Nunc venenatis iaculis massa sit amet luctus. Aliquam et ligula ut arcu suscipit efficitur. Sed ut ante quam. Duis et finibus magna. Maecenas vitae neque augue.</p>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Integer ornare magna purus, sed faucibus ipsum luctus sit amet. Fusce euismod leo eget ex commodo auctor. Praesent id nisl at felis ultrices laoreet nec sit amet libero.</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>element</strong></h5>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">With specific ingredients: Tuna accounted for 43%, cabbage 8%, potatoes and carrots 7%. The rest is soybean oil, sweet corn, peas, chili sauce, ketchup, wheat. With spices, flavor enhancers and yeast extracts</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>nutrition</strong></h5>
<div class="bot d-flex">
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Calories: 191</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fat: 1.4g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sodium: 83mg</li>
        <li class="aos-init" data-aos-duration="1000" data-aos="fade-up">Carbohydrates: 0g</li>
    </ul>
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fiber: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sugar: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Protein: 42g</li>
    </ul>
</div>
<p class="text aos-init" data-aos-duration="1000" data-aos="fade-up">About fat: Tuna contains healthy fats like omega 3 fatty acids but is low in fat overall (less than 2 grams per can). However, different types of tuna will have different amounts of fat. The following tuna varieties are listed in order from fattest to least fatty: fresh bluefin, canned white albacore, canned light tuna, fresh skipjack and fresh yellowfin.</p>
<p class="aos-init" data-aos-duration="1000" data-aos="fade-up">About protein: Tuna is a protein-rich food. One can of tuna contains 42 grams of complete protein and many essential amino acids.</p>
            ',
            'slug'            => 'albacore-tuna-broccoli-4',
            'seo_title'       => 'albacore tuna broccoli',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'published'       => true,
            'languages'       => ['en'],
            'base_id'         => 1,
            'image'           => public_path('img/portfolio/gallery-4.jpg'),
        ],
        [
            'title'           => 'albacore tuna broccoli',
            'description'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'body'            => '
<p class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sed est risus, dignissim quis nisl et, semper convallis lacus. Vestibulum semper interdum dui in pretium. Nam dapibus ac odio non pellentesque. In in fermentum mi, eget egestas eros. Nunc venenatis iaculis massa sit amet luctus. Aliquam et ligula ut arcu suscipit efficitur. Sed ut ante quam. Duis et finibus magna. Maecenas vitae neque augue.</p>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Integer ornare magna purus, sed faucibus ipsum luctus sit amet. Fusce euismod leo eget ex commodo auctor. Praesent id nisl at felis ultrices laoreet nec sit amet libero.</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>element</strong></h5>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">With specific ingredients: Tuna accounted for 43%, cabbage 8%, potatoes and carrots 7%. The rest is soybean oil, sweet corn, peas, chili sauce, ketchup, wheat. With spices, flavor enhancers and yeast extracts</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>nutrition</strong></h5>
<div class="bot d-flex">
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Calories: 191</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fat: 1.4g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sodium: 83mg</li>
        <li class="aos-init" data-aos-duration="1000" data-aos="fade-up">Carbohydrates: 0g</li>
    </ul>
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fiber: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sugar: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Protein: 42g</li>
    </ul>
</div>
<p class="text aos-init" data-aos-duration="1000" data-aos="fade-up">About fat: Tuna contains healthy fats like omega 3 fatty acids but is low in fat overall (less than 2 grams per can). However, different types of tuna will have different amounts of fat. The following tuna varieties are listed in order from fattest to least fatty: fresh bluefin, canned white albacore, canned light tuna, fresh skipjack and fresh yellowfin.</p>
<p class="aos-init" data-aos-duration="1000" data-aos="fade-up">About protein: Tuna is a protein-rich food. One can of tuna contains 42 grams of complete protein and many essential amino acids.</p>
            ',
            'slug'            => 'albacore-tuna-broccoli-5',
            'seo_title'       => 'albacore tuna broccoli',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'published'       => true,
            'languages'       => ['en'],
            'base_id'         => 2,
            'image'           => public_path('img/portfolio/gallery-5.jpg'),
        ],
        [
            'title'           => 'albacore tuna broccoli',
            'description'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'body'            => '
<p class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sed est risus, dignissim quis nisl et, semper convallis lacus. Vestibulum semper interdum dui in pretium. Nam dapibus ac odio non pellentesque. In in fermentum mi, eget egestas eros. Nunc venenatis iaculis massa sit amet luctus. Aliquam et ligula ut arcu suscipit efficitur. Sed ut ante quam. Duis et finibus magna. Maecenas vitae neque augue.</p>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Integer ornare magna purus, sed faucibus ipsum luctus sit amet. Fusce euismod leo eget ex commodo auctor. Praesent id nisl at felis ultrices laoreet nec sit amet libero.</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>element</strong></h5>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">With specific ingredients: Tuna accounted for 43%, cabbage 8%, potatoes and carrots 7%. The rest is soybean oil, sweet corn, peas, chili sauce, ketchup, wheat. With spices, flavor enhancers and yeast extracts</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>nutrition</strong></h5>
<div class="bot d-flex">
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Calories: 191</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fat: 1.4g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sodium: 83mg</li>
        <li class="aos-init" data-aos-duration="1000" data-aos="fade-up">Carbohydrates: 0g</li>
    </ul>
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fiber: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sugar: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Protein: 42g</li>
    </ul>
</div>
<p class="text aos-init" data-aos-duration="1000" data-aos="fade-up">About fat: Tuna contains healthy fats like omega 3 fatty acids but is low in fat overall (less than 2 grams per can). However, different types of tuna will have different amounts of fat. The following tuna varieties are listed in order from fattest to least fatty: fresh bluefin, canned white albacore, canned light tuna, fresh skipjack and fresh yellowfin.</p>
<p class="aos-init" data-aos-duration="1000" data-aos="fade-up">About protein: Tuna is a protein-rich food. One can of tuna contains 42 grams of complete protein and many essential amino acids.</p>
            ',
            'slug'            => 'albacore-tuna-broccoli-6',
            'seo_title'       => 'albacore tuna broccoli',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'published'       => true,
            'languages'       => ['en'],
            'base_id'         => 2,
            'image'           => public_path('img/portfolio/gallery-6.jpg'),
        ],
        [
            'title'           => 'albacore tuna broccoli',
            'description'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'body'            => '
<p class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sed est risus, dignissim quis nisl et, semper convallis lacus. Vestibulum semper interdum dui in pretium. Nam dapibus ac odio non pellentesque. In in fermentum mi, eget egestas eros. Nunc venenatis iaculis massa sit amet luctus. Aliquam et ligula ut arcu suscipit efficitur. Sed ut ante quam. Duis et finibus magna. Maecenas vitae neque augue.</p>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Integer ornare magna purus, sed faucibus ipsum luctus sit amet. Fusce euismod leo eget ex commodo auctor. Praesent id nisl at felis ultrices laoreet nec sit amet libero.</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>element</strong></h5>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">With specific ingredients: Tuna accounted for 43%, cabbage 8%, potatoes and carrots 7%. The rest is soybean oil, sweet corn, peas, chili sauce, ketchup, wheat. With spices, flavor enhancers and yeast extracts</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>nutrition</strong></h5>
<div class="bot d-flex">
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Calories: 191</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fat: 1.4g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sodium: 83mg</li>
        <li class="aos-init" data-aos-duration="1000" data-aos="fade-up">Carbohydrates: 0g</li>
    </ul>
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fiber: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sugar: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Protein: 42g</li>
    </ul>
</div>
<p class="text aos-init" data-aos-duration="1000" data-aos="fade-up">About fat: Tuna contains healthy fats like omega 3 fatty acids but is low in fat overall (less than 2 grams per can). However, different types of tuna will have different amounts of fat. The following tuna varieties are listed in order from fattest to least fatty: fresh bluefin, canned white albacore, canned light tuna, fresh skipjack and fresh yellowfin.</p>
<p class="aos-init" data-aos-duration="1000" data-aos="fade-up">About protein: Tuna is a protein-rich food. One can of tuna contains 42 grams of complete protein and many essential amino acids.</p>
            ',
            'slug'            => 'albacore-tuna-broccoli-7',
            'seo_title'       => 'albacore tuna broccoli',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'published'       => true,
            'languages'       => ['en'],
            'base_id'         => 3,
            'image'           => public_path('img/portfolio/gallery-4.jpg'),
        ],
        [
            'title'           => 'albacore tuna broccoli',
            'description'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'body'            => '
<p class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sed est risus, dignissim quis nisl et, semper convallis lacus. Vestibulum semper interdum dui in pretium. Nam dapibus ac odio non pellentesque. In in fermentum mi, eget egestas eros. Nunc venenatis iaculis massa sit amet luctus. Aliquam et ligula ut arcu suscipit efficitur. Sed ut ante quam. Duis et finibus magna. Maecenas vitae neque augue.</p>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Integer ornare magna purus, sed faucibus ipsum luctus sit amet. Fusce euismod leo eget ex commodo auctor. Praesent id nisl at felis ultrices laoreet nec sit amet libero.</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>element</strong></h5>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">With specific ingredients: Tuna accounted for 43%, cabbage 8%, potatoes and carrots 7%. The rest is soybean oil, sweet corn, peas, chili sauce, ketchup, wheat. With spices, flavor enhancers and yeast extracts</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>nutrition</strong></h5>
<div class="bot d-flex">
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Calories: 191</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fat: 1.4g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sodium: 83mg</li>
        <li class="aos-init" data-aos-duration="1000" data-aos="fade-up">Carbohydrates: 0g</li>
    </ul>
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fiber: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sugar: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Protein: 42g</li>
    </ul>
</div>
<p class="text aos-init" data-aos-duration="1000" data-aos="fade-up">About fat: Tuna contains healthy fats like omega 3 fatty acids but is low in fat overall (less than 2 grams per can). However, different types of tuna will have different amounts of fat. The following tuna varieties are listed in order from fattest to least fatty: fresh bluefin, canned white albacore, canned light tuna, fresh skipjack and fresh yellowfin.</p>
<p class="aos-init" data-aos-duration="1000" data-aos="fade-up">About protein: Tuna is a protein-rich food. One can of tuna contains 42 grams of complete protein and many essential amino acids.</p>
            ',
            'slug'            => 'albacore-tuna-broccoli-8',
            'seo_title'       => 'albacore tuna broccoli',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'published'       => true,
            'languages'       => ['en'],
            'base_id'         => 3,
            'image'           => public_path('img/portfolio/gallery-5.jpg'),
        ],
        [
            'title'           => 'albacore tuna broccoli',
            'description'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'body'            => '
<p class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sed est risus, dignissim quis nisl et, semper convallis lacus. Vestibulum semper interdum dui in pretium. Nam dapibus ac odio non pellentesque. In in fermentum mi, eget egestas eros. Nunc venenatis iaculis massa sit amet luctus. Aliquam et ligula ut arcu suscipit efficitur. Sed ut ante quam. Duis et finibus magna. Maecenas vitae neque augue.</p>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Integer ornare magna purus, sed faucibus ipsum luctus sit amet. Fusce euismod leo eget ex commodo auctor. Praesent id nisl at felis ultrices laoreet nec sit amet libero.</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>element</strong></h5>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">With specific ingredients: Tuna accounted for 43%, cabbage 8%, potatoes and carrots 7%. The rest is soybean oil, sweet corn, peas, chili sauce, ketchup, wheat. With spices, flavor enhancers and yeast extracts</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>nutrition</strong></h5>
<div class="bot d-flex">
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Calories: 191</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fat: 1.4g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sodium: 83mg</li>
        <li class="aos-init" data-aos-duration="1000" data-aos="fade-up">Carbohydrates: 0g</li>
    </ul>
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fiber: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sugar: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Protein: 42g</li>
    </ul>
</div>
<p class="text aos-init" data-aos-duration="1000" data-aos="fade-up">About fat: Tuna contains healthy fats like omega 3 fatty acids but is low in fat overall (less than 2 grams per can). However, different types of tuna will have different amounts of fat. The following tuna varieties are listed in order from fattest to least fatty: fresh bluefin, canned white albacore, canned light tuna, fresh skipjack and fresh yellowfin.</p>
<p class="aos-init" data-aos-duration="1000" data-aos="fade-up">About protein: Tuna is a protein-rich food. One can of tuna contains 42 grams of complete protein and many essential amino acids.</p>
            ',
            'slug'            => 'albacore-tuna-broccoli-9',
            'seo_title'       => 'albacore tuna broccoli',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'published'       => true,
            'languages'       => ['en'],
            'base_id'         => 3,
            'image'           => public_path('img/portfolio/gallery-6.jpg'),
        ],
        [
            'title'           => 'albacore tuna broccoli',
            'description'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'body'            => '
<p class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sed est risus, dignissim quis nisl et, semper convallis lacus. Vestibulum semper interdum dui in pretium. Nam dapibus ac odio non pellentesque. In in fermentum mi, eget egestas eros. Nunc venenatis iaculis massa sit amet luctus. Aliquam et ligula ut arcu suscipit efficitur. Sed ut ante quam. Duis et finibus magna. Maecenas vitae neque augue.</p>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Integer ornare magna purus, sed faucibus ipsum luctus sit amet. Fusce euismod leo eget ex commodo auctor. Praesent id nisl at felis ultrices laoreet nec sit amet libero.</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>element</strong></h5>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">With specific ingredients: Tuna accounted for 43%, cabbage 8%, potatoes and carrots 7%. The rest is soybean oil, sweet corn, peas, chili sauce, ketchup, wheat. With spices, flavor enhancers and yeast extracts</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>nutrition</strong></h5>
<div class="bot d-flex">
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Calories: 191</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fat: 1.4g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sodium: 83mg</li>
        <li class="aos-init" data-aos-duration="1000" data-aos="fade-up">Carbohydrates: 0g</li>
    </ul>
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fiber: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sugar: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Protein: 42g</li>
    </ul>
</div>
<p class="text aos-init" data-aos-duration="1000" data-aos="fade-up">About fat: Tuna contains healthy fats like omega 3 fatty acids but is low in fat overall (less than 2 grams per can). However, different types of tuna will have different amounts of fat. The following tuna varieties are listed in order from fattest to least fatty: fresh bluefin, canned white albacore, canned light tuna, fresh skipjack and fresh yellowfin.</p>
<p class="aos-init" data-aos-duration="1000" data-aos="fade-up">About protein: Tuna is a protein-rich food. One can of tuna contains 42 grams of complete protein and many essential amino acids.</p>
            ',
            'slug'            => 'albacore-tuna-broccoli-10',
            'seo_title'       => 'albacore tuna broccoli',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'published'       => true,
            'languages'       => ['en'],
            'base_id'         => 4,
            'image'           => public_path('img/portfolio/gallery-5.jpg'),
        ],
        [
            'title'           => 'albacore tuna broccoli',
            'description'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'body'            => '
<p class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sed est risus, dignissim quis nisl et, semper convallis lacus. Vestibulum semper interdum dui in pretium. Nam dapibus ac odio non pellentesque. In in fermentum mi, eget egestas eros. Nunc venenatis iaculis massa sit amet luctus. Aliquam et ligula ut arcu suscipit efficitur. Sed ut ante quam. Duis et finibus magna. Maecenas vitae neque augue.</p>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Integer ornare magna purus, sed faucibus ipsum luctus sit amet. Fusce euismod leo eget ex commodo auctor. Praesent id nisl at felis ultrices laoreet nec sit amet libero.</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>element</strong></h5>
<p class="mb-42 aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">With specific ingredients: Tuna accounted for 43%, cabbage 8%, potatoes and carrots 7%. The rest is soybean oil, sweet corn, peas, chili sauce, ketchup, wheat. With spices, flavor enhancers and yeast extracts</p>
<h5 class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up"><strong>nutrition</strong></h5>
<div class="bot d-flex">
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Calories: 191</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fat: 1.4g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sodium: 83mg</li>
        <li class="aos-init" data-aos-duration="1000" data-aos="fade-up">Carbohydrates: 0g</li>
    </ul>
    <ul>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Fiber: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Sugar: 0g</li>
        <li class="aos-init aos-animate" data-aos-duration="1000" data-aos="fade-up">Protein: 42g</li>
    </ul>
</div>
<p class="text aos-init" data-aos-duration="1000" data-aos="fade-up">About fat: Tuna contains healthy fats like omega 3 fatty acids but is low in fat overall (less than 2 grams per can). However, different types of tuna will have different amounts of fat. The following tuna varieties are listed in order from fattest to least fatty: fresh bluefin, canned white albacore, canned light tuna, fresh skipjack and fresh yellowfin.</p>
<p class="aos-init" data-aos-duration="1000" data-aos="fade-up">About protein: Tuna is a protein-rich food. One can of tuna contains 42 grams of complete protein and many essential amino acids.</p>
            ',
            'slug'            => 'albacore-tuna-broccoli-11',
            'seo_title'       => 'albacore tuna broccoli',
            'seo_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla semper nulla in pulvinar.',
            'published'       => true,
            'languages'       => ['en'],
            'base_id'         => 4,
            'image'           => public_path('img/portfolio/gallery-6.jpg'),
        ],
    ],

    'menus' => [
        [
            'title'       => 'Spezial menü',
            'description' => 'Kreativität trifft kulinarische Expertise',
            'published'   => 1,
            'base_id'     => 1,
            'image'       => public_path('img/menu/menu-zz-1.jpg'),
            'left_image'  => public_path('img/menu/menu.jpg'),
            'right_image' => public_path('img/menu/menu1.jpg'),
        ],
        [
            'title'       => 'Haupt menü',
            'description' => 'Das Herzstück unseres Café-Restaurants',
            'published'   => 1,
            'base_id'     => 1,
            'image'       => public_path('img/menu/menu-zz-2.jpg'),
            'left_image'  => public_path('img/menu/menu1.jpg'),
            'right_image' => public_path('img/menu/menu.jpg'),
        ],
        [
            'title'       => 'Fisch und Meeresfrüchte',
            'description' => 'Frisch aus dem Meer auf Ihren Teller',
            'published'   => 1,
            'base_id'     => 2,
            'image'       => public_path('img/menu/menu-zz-3.jpg'),
            'left_image'  => public_path('img/menu/menu.jpg'),
            'right_image' => public_path('img/menu/menu1.jpg'),
        ],
        [
            'title'       => 'Nachtisch',
            'description' => 'Süße Enden und genussvolle Anfänge',
            'published'   => 1,
            'base_id'     => 2,
            'image'       => public_path('img/menu/menu3.jpg'),
            'left_image'  => public_path('img/menu/menu1.jpg'),
            'right_image' => public_path('img/menu/menu.jpg'),
        ],
        [
            'title'       => 'Fisch und Meeresfrüchte',
            'description' => 'Frisch aus dem Meer auf Ihren Teller',
            'published'   => 1,
            'base_id'     => 3,
            'image'       => public_path('img/menu/menu-zz-3.jpg'),
            'left_image'  => public_path('img/menu/menu.jpg'),
            'right_image' => public_path('img/menu/menu1.jpg'),
        ],
        [
            'title'       => 'Nachtisch',
            'description' => 'Süße Enden und genussvolle Anfänge',
            'published'   => 1,
            'base_id'     => 3,
            'image'       => public_path('img/menu/menu3.jpg'),
            'left_image'  => public_path('img/menu/menu1.jpg'),
            'right_image' => public_path('img/menu/menu.jpg'),
        ],
        [
            'title'       => 'Fisch und Meeresfrüchte',
            'description' => 'Frisch aus dem Meer auf Ihren Teller',
            'published'   => 1,
            'base_id'     => 4,
            'image'       => public_path('img/menu/menu-zz-3.jpg'),
            'left_image'  => public_path('img/menu/menu.jpg'),
            'right_image' => public_path('img/menu/menu1.jpg'),
        ],
        [
            'title'       => 'Nachtisch',
            'description' => 'Süße Enden und genussvolle Anfänge',
            'published'   => 1,
            'base_id'     => 4,
            'image'       => public_path('img/menu/menu3.jpg'),
            'left_image'  => public_path('img/menu/menu1.jpg'),
            'right_image' => public_path('img/menu/menu.jpg'),
        ]
    ],

    'menu-items' => [
        [
            'title'         => 'Thermistor für gegrillten Hummer',
            'description'   => 'Saftiger Hummerschwanz, gebacken mit einer cremigen Weißweinsauce.',
            'published'     => 1,
            'normal_price'  => 22,
            'special_price' => 20,
        ],
        [
            'title'         => 'Safran Muslingegryde',
            'description'   => 'Saftiger Hummerschwanz, gebacken mit einer cremigen Weißweinsauce.',
            'published'     => 1,
            'normal_price'  => 20,
            'special_price' => 18,
        ],
        [
            'title'         => 'Meeresfrüchte platte Royale',
            'description'   => 'Saftiger Hummerschwanz, gebacken mit einer cremigen Weißweinsauce.',
            'published'     => 1,
            'normal_price'  => 36,
            'special_price' => 32,
        ],
        [
            'title'         => 'Gegrillter Wolfsbarsch',
            'description'   => 'Saftiger Hummerschwanz, gebacken mit einer cremigen Weißweinsauce.',
            'published'     => 1,
            'normal_price'  => 44,
            'special_price' => 44,
        ]
    ],

    'opinions' => [
        [
            'user_name' => 'Sarah K.',
            'company'   => 'FoodLovers Co.',
            'subject'   => 'Café-Atmosphäre und Service',
            'comment'   => 'Die Atmosphäre im La Bella Café ist unschlagbar – gemütlich, einladend und voller Charakter. Das Personal war aufmerksam, ohne aufdringlich zu sein, was das gesamte Brunch-Erlebnis unvergesslich machte.',
            'ordering'  => 1,
            'published' => true,
        ],
        [
            'user_name' => 'Amir R.',
            'company'   => 'GourmetTech Solutions',
            'subject'   => 'Qualität der Speisen im Restaurant',
            'comment'   => 'Gestern Abend habe ich im Oak House zu Abend gegessen – einfach phänomenal. Jedes Gericht war perfekt gewürzt und die Zutaten schmeckten unglaublich frisch. Das gegrillte Lamm muss man unbedingt probieren.',
            'ordering'  => 2,
            'published' => true,
        ],
        [
            'user_name' => 'Claire D.',
            'company'   => 'Urban Reviews Media',
            'subject'   => 'Preis-Leistungs-Verhältnis',
            'comment'   => 'Brew & Bite bietet ein hervorragendes Preis-Leistungs-Verhältnis. Die Portionen sind großzügig und die Qualität ist hervorragend. Ideal für ein zwangloses Geschäftsessen oder einen Wochenendausflug.',
            'ordering'  => 3,
            'published' => true,
        ],
    ],

    'blogs' => [
        [
            'title'           => 'Von der Bohne bis zum Bistro: Erleben Sie das Herz und die Seele unseres Café-Restaurants',
            'description'     => 'Eine Reise durch den Geschmack, die Atmosphäre und die Leidenschaft, die unser Café-Restaurant zu einem Paradies für Feinschmecker, Kaffeeliebhaber und alle machen, die ein gefühlvolles Speiseerlebnis wünschen.',
            'body'            => '
<p>
Im Herzen der Stadt, eingebettet zwischen dem Trubel des Alltags und ruhigen Ecken der Ruhe, liegt unser Café-Restaurant -
Ein Ort, an dem Geschmack, Geschichten und Gemeinschaft zusammenkommen. Ob Sie Ihren Tag mit einer Tasse Kaffee beginnen,
Ob Sie sich mit Freunden zum Mittagessen treffen oder bei einem warmen Dessert entspannen, jeder Besuch ist mehr als nur eine Mahlzeit – es ist eine Erinnerung.
</p>
            ',
            'published'       => 1,
            'slug'            => 'Von-der-Bohne-bis-zum-Bistro:-Erleben-Sie-das-Herz-und-die-Seele-unseres-Café-Restaurants1',
            'seo_title'       => 'Von der Bohne bis zum Bistro: Erleben Sie das Herz und die Seele unseres Café-Restaurants',
            'seo_description' => 'Eine Reise durch den Geschmack, die Atmosphäre und die Leidenschaft, die unser Café-Restaurant zu einem Paradies für Feinschmecker, Kaffeeliebhaber und alle machen, die ein gefühlvolles Speiseerlebnis wünschen.',
            'image'           => public_path('img/blog/blog-01.jpg')
        ],
        [
            'title'           => 'Von der Bohne bis zum Bistro: Erleben Sie das Herz und die Seele unseres Café-Restaurants',
            'description'     => 'Eine Reise durch den Geschmack, die Atmosphäre und die Leidenschaft, die unser Café-Restaurant zu einem Paradies für Feinschmecker, Kaffeeliebhaber und alle machen, die ein gefühlvolles Speiseerlebnis wünschen.',
            'body'            => '
<p>
Im Herzen der Stadt, eingebettet zwischen dem Trubel des Alltags und ruhigen Ecken der Ruhe, liegt unser Café-Restaurant -
Ein Ort, an dem Geschmack, Geschichten und Gemeinschaft zusammenkommen. Ob Sie Ihren Tag mit einer Tasse Kaffee beginnen,
Ob Sie sich mit Freunden zum Mittagessen treffen oder bei einem warmen Dessert entspannen, jeder Besuch ist mehr als nur eine Mahlzeit – es ist eine Erinnerung.
</p>
            ',
            'published'       => 1,
            'slug'            => 'Von-der-Bohne-bis-zum-Bistro:-Erleben-Sie-das-Herz-und-die-Seele-unseres-Café-Restaurants2',
            'seo_title'       => 'Von der Bohne bis zum Bistro: Erleben Sie das Herz und die Seele unseres Café-Restaurants',
            'seo_description' => 'Eine Reise durch den Geschmack, die Atmosphäre und die Leidenschaft, die unser Café-Restaurant zu einem Paradies für Feinschmecker, Kaffeeliebhaber und alle machen, die ein gefühlvolles Speiseerlebnis wünschen.',
            'image'           => public_path('img/blog/blog-02.jpg')
        ],
        [
            'title'           => 'Von der Bohne bis zum Bistro: Erleben Sie das Herz und die Seele unseres Café-Restaurants',
            'description'     => 'Eine Reise durch den Geschmack, die Atmosphäre und die Leidenschaft, die unser Café-Restaurant zu einem Paradies für Feinschmecker, Kaffeeliebhaber und alle machen, die ein gefühlvolles Speiseerlebnis wünschen.',
            'body'            => '
<p>
Im Herzen der Stadt, eingebettet zwischen dem Trubel des Alltags und ruhigen Ecken der Ruhe, liegt unser Café-Restaurant -
Ein Ort, an dem Geschmack, Geschichten und Gemeinschaft zusammenkommen. Ob Sie Ihren Tag mit einer Tasse Kaffee beginnen,
Ob Sie sich mit Freunden zum Mittagessen treffen oder bei einem warmen Dessert entspannen, jeder Besuch ist mehr als nur eine Mahlzeit – es ist eine Erinnerung.
</p>
            ',
            'published'       => 1,
            'slug'            => 'Von-der-Bohne-bis-zum-Bistro:-Erleben-Sie-das-Herz-und-die-Seele-unseres-Café-Restaurants3',
            'seo_title'       => 'Von der Bohne bis zum Bistro: Erleben Sie das Herz und die Seele unseres Café-Restaurants',
            'seo_description' => 'Eine Reise durch den Geschmack, die Atmosphäre und die Leidenschaft, die unser Café-Restaurant zu einem Paradies für Feinschmecker, Kaffeeliebhaber und alle machen, die ein gefühlvolles Speiseerlebnis wünschen.',
            'image'           => public_path('img/blog/blog-03.jpg')
        ],
        [
            'title'           => 'Von der Bohne bis zum Bistro: Erleben Sie das Herz und die Seele unseres Café-Restaurants',
            'description'     => 'Eine Reise durch den Geschmack, die Atmosphäre und die Leidenschaft, die unser Café-Restaurant zu einem Paradies für Feinschmecker, Kaffeeliebhaber und alle machen, die ein gefühlvolles Speiseerlebnis wünschen.',
            'body'            => '
<p>
Im Herzen der Stadt, eingebettet zwischen dem Trubel des Alltags und ruhigen Ecken der Ruhe, liegt unser Café-Restaurant -
Ein Ort, an dem Geschmack, Geschichten und Gemeinschaft zusammenkommen. Ob Sie Ihren Tag mit einer Tasse Kaffee beginnen,
Ob Sie sich mit Freunden zum Mittagessen treffen oder bei einem warmen Dessert entspannen, jeder Besuch ist mehr als nur eine Mahlzeit – es ist eine Erinnerung.
</p>
            ',
            'published'       => 1,
            'slug'            => 'Von-der-Bohne-bis-zum-Bistro:-Erleben-Sie-das-Herz-und-die-Seele-unseres-Café-Restaurants4',
            'seo_title'       => 'Von der Bohne bis zum Bistro: Erleben Sie das Herz und die Seele unseres Café-Restaurants',
            'seo_description' => 'Eine Reise durch den Geschmack, die Atmosphäre und die Leidenschaft, die unser Café-Restaurant zu einem Paradies für Feinschmecker, Kaffeeliebhaber und alle machen, die ein gefühlvolles Speiseerlebnis wünschen.',
            'image'           => public_path('img/blog/blog-04.jpg')
        ],
        [
            'title'           => 'Von der Bohne bis zum Bistro: Erleben Sie das Herz und die Seele unseres Café-Restaurants',
            'description'     => 'Eine Reise durch den Geschmack, die Atmosphäre und die Leidenschaft, die unser Café-Restaurant zu einem Paradies für Feinschmecker, Kaffeeliebhaber und alle machen, die ein gefühlvolles Speiseerlebnis wünschen.',
            'body'            => '
<p>
Im Herzen der Stadt, eingebettet zwischen dem Trubel des Alltags und ruhigen Ecken der Ruhe, liegt unser Café-Restaurant -
Ein Ort, an dem Geschmack, Geschichten und Gemeinschaft zusammenkommen. Ob Sie Ihren Tag mit einer Tasse Kaffee beginnen,
Ob Sie sich mit Freunden zum Mittagessen treffen oder bei einem warmen Dessert entspannen, jeder Besuch ist mehr als nur eine Mahlzeit – es ist eine Erinnerung.
</p>
            ',
            'published'       => 1,
            'slug'            => 'Von-der-Bohne-bis-zum-Bistro:-Erleben-Sie-das-Herz-und-die-Seele-unseres-Café-Restaurants5',
            'seo_title'       => 'Von der Bohne bis zum Bistro: Erleben Sie das Herz und die Seele unseres Café-Restaurants',
            'seo_description' => 'Eine Reise durch den Geschmack, die Atmosphäre und die Leidenschaft, die unser Café-Restaurant zu einem Paradies für Feinschmecker, Kaffeeliebhaber und alle machen, die ein gefühlvolles Speiseerlebnis wünschen.',
            'image'           => public_path('img/blog/blog-05.jpg')
        ],
        [
            'title'           => 'Von der Bohne bis zum Bistro: Erleben Sie das Herz und die Seele unseres Café-Restaurants',
            'description'     => 'Eine Reise durch den Geschmack, die Atmosphäre und die Leidenschaft, die unser Café-Restaurant zu einem Paradies für Feinschmecker, Kaffeeliebhaber und alle machen, die ein gefühlvolles Speiseerlebnis wünschen.',
            'body'            => '
<p>
Im Herzen der Stadt, eingebettet zwischen dem Trubel des Alltags und ruhigen Ecken der Ruhe, liegt unser Café-Restaurant -
Ein Ort, an dem Geschmack, Geschichten und Gemeinschaft zusammenkommen. Ob Sie Ihren Tag mit einer Tasse Kaffee beginnen,
Ob Sie sich mit Freunden zum Mittagessen treffen oder bei einem warmen Dessert entspannen, jeder Besuch ist mehr als nur eine Mahlzeit – es ist eine Erinnerung.
</p>
            ',
            'published'       => 1,
            'slug'            => 'Von-der-Bohne-bis-zum-Bistro:-Erleben-Sie-das-Herz-und-die-Seele-unseres-Café-Restaurants6',
            'seo_title'       => 'Von der Bohne bis zum Bistro: Erleben Sie das Herz und die Seele unseres Café-Restaurants',
            'seo_description' => 'Eine Reise durch den Geschmack, die Atmosphäre und die Leidenschaft, die unser Café-Restaurant zu einem Paradies für Feinschmecker, Kaffeeliebhaber und alle machen, die ein gefühlvolles Speiseerlebnis wünschen.',
            'image'           => public_path('img/blog/blog-06.jpg')
        ],
    ]
];
