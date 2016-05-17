<?php

use Academe\Report;

return [
    "dependencies" =>  [
        'aliases'       => [],        
        'invokables'    => [],
        'factories'     => [
            Report\Page\IndexPage::class => Report\Factory\PageFactory::class
        ],
    ]    
];