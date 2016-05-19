<?php

use Academe\Report;
use CodingMatters\Kernel;

return [
    "dependencies" =>  [
        'aliases'       => [],        
        'invokables'    => [],
        'factories'     => [
            Report\Page\IndexPage::class => Kernel\Factory\PageFactory::class
        ],
    ],
    'routes' => [
        [
            'name' => 'report',
            'path' => '/report',
            'middleware' => Report\Page\IndexPage::class,
            'allowed_methods' => ['GET'],
        ]
    ]
];