<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\CollectionItemsController::class,
    'router'     => [
        'as'     => 'collection-item.',
        'prefix' => '/collection-items',
    ],
];
