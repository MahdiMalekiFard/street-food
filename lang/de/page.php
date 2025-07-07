<?php

return [
    'model'       => '',
    'permissions' => [

    ],
    'exceptions'  => [

    ],
    'validations' => [

    ],
    'enum'        => [
        'type' => [
            'about_us' => 'About Us'
        ]
    ],

    'pages' => [
        'about_us'         => 'Über uns',
        'about_restaurant' => 'Über das Restaurant',
        'about'            => [
            'services' => [
                'service1' => [
                    'title' => 'Das Essen ist immer frisch',
                    'desc'  => 'Das von uns ausgewählte Essen ist stets frisch und wird vor der Zubereitung sorgfältig kontrolliert.',
                ],
                'service2' => [
                    'title' => 'Luxuriöse Räume und Musik',
                    'desc'  => 'Was gibt es Schöneres, als köstliches Essen und Musik gleichzeitig zu genießen?',
                ],
                'service3' => [
                    'title' => 'Vielfältige Speisekarte',
                    'desc'  => 'Das Essen im Restaurant ist köstlich und vielfältig.',
                ],
            ]
        ],

        'menu' => [
            'page_title' => 'unsere Menüs',
            'breadcrumb' => 'Menüliste',
        ],

        'portfolio' => [
            'list' => [
                'page_title' => 'unsere Portfolios',
                'breadcrumb' => 'Portfolioliste',
            ],

            'detail' => [
                'page_title' => 'Portfoliodetails',
                'breadcrumb' => 'Portfoliodetails',
                'sidebar'    => [
                    'text'       => 'Detail',
                    'categories' => 'Kategorien',
                    'name'       => 'Name',
                    'date'       => 'Datum',
                ],
            ],
        ],

        'blog' => [
            'list'   => [
                'page_title' => 'neue Beiträge',
                'breadcrumb' => 'Blogliste',
                'button'     => 'weiterlesen',
            ],
            'detail' => [
                'page_title' => 'Blogdetails',
                'breadcrumb' => 'Blogdetails',
                'sidebar'    => [
                    'text' => 'LETZTE BEITRÄGE',
                ]
            ],
        ],

        'gallery' => [
            'list'   => [
                'page_title' => 'Kunstgalerieliste',
                'breadcrumb' => 'Galerieliste',
            ],
            'detail' => [
                'page_title' => 'Galerie',
                'breadcrumb' => 'Galerie',
            ],
        ],

        'contact' => [
            'page_title' => 'Kontaktieren Sie uns',
            'breadcrumb' => 'Kontakt',
            'info'       => [
                'text-1' => 'Kontaktieren Sie uns',
                'text-2' => 'Adresse hier',
                'text-3' => 'Öffnungszeiten',
            ],
            'form'       => [
                'title'        => 'Schreiben Sie uns!',
                'subtitle'     => 'Rufen Sie uns an oder kommen Sie jederzeit vorbei. Wir bemühen uns, alle Anfragen werktags innerhalb von 24 Stunden zu beantworten. Wir freuen uns auf Ihre Fragen.',
                'button'       => 'Nachricht senden',
                'placeholders' => [
                    'name'    => 'Name',
                    'phone'   => 'Telefon',
                    'email'   => 'E-Mail',
                    'message' => 'Nachricht',
                ]
            ]
        ]
    ],
];
