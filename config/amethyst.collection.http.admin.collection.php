<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\CollectionsController::class,
    'router'     => [
        'as'     => 'collection.',
        'prefix' => '/collections',
    ],
];
