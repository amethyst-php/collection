<?php

return [
    'table'      => 'amethyst_collection_items',
    'comment'    => 'CollectionItem',
    'model'      => Amethyst\Models\CollectionItem::class,
    'schema'     => Amethyst\Schemas\CollectionItemSchema::class,
    'repository' => Amethyst\Repositories\CollectionItemRepository::class,
    'serializer' => Amethyst\Serializers\CollectionItemSerializer::class,
    'validator'  => Amethyst\Validators\CollectionItemValidator::class,
    'authorizer' => Amethyst\Authorizers\CollectionItemAuthorizer::class,
    'faker'      => Amethyst\Fakers\CollectionItemFaker::class,
    'manager'    => Amethyst\Managers\CollectionItemManager::class,
    'attributes' => [
        'collectionable' => [
            'options' => [],
        ],
    ],
];
