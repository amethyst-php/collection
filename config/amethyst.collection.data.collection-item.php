<?php

return [
    'table'      => 'amethyst_collection_items',
    'comment'    => 'CollectionItem',
    'model'      => Railken\Amethyst\Models\CollectionItem::class,
    'schema'     => Railken\Amethyst\Schemas\CollectionItemSchema::class,
    'repository' => Railken\Amethyst\Repositories\CollectionItemRepository::class,
    'serializer' => Railken\Amethyst\Serializers\CollectionItemSerializer::class,
    'validator'  => Railken\Amethyst\Validators\CollectionItemValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\CollectionItemAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\CollectionItemFaker::class,
    'manager'    => Railken\Amethyst\Managers\CollectionItemManager::class,
    'attributes' => [
        'collectionable' => [
            'options' => [
                Railken\Amethyst\Models\Foo::class => Railken\Amethyst\Managers\FooManager::class,
            ],
        ],
    ],
];
