<?php

return [
    'routes' => [
        [
            'name' => 'report',
            'path' => '/report',
            'middleware' => Academe\Report\Page\IndexPage::class,
            'allowed_methods' => ['GET'],
        ]
    ]
];