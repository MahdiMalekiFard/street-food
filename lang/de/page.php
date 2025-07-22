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
                    'desc'  => 'Die von uns servierten Gerichte werden mit Sorgfalt aus hochwertigen, aufgrund ihrer Frische ausgewählten Zutaten zubereitet.',
                ],
                'service2' => [
                    'title' => 'Luxuriöse Räume und Musik',
                    'desc'  => 'Nichts geht über die Freude an leckeren Häppchen und guter Musik – alles an einem Ort.',
                ],
                'service3' => [
                    'title' => 'Vielfältige Speisekarte',
                    'desc'  => 'Aromen, die Sie lieben werden, mit Optionen für jeden Geschmack.',
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
