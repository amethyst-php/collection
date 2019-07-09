<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\CollectionItemsController::class,
    'router'     => [
        'as'     => 'collection-item.',
        'prefix' => '/collection-items',
    ],
];
