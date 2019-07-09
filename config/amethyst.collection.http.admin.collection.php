<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\CollectionsController::class,
    'router'     => [
        'as'     => 'collection.',
        'prefix' => '/collections',
    ],
];
