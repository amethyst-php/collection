<?php

return [
    'table'      => 'amethyst_collections',
    'comment'    => 'Collection',
    'model'      => Railken\Amethyst\Models\Collection::class,
    'schema'     => Railken\Amethyst\Schemas\CollectionSchema::class,
    'repository' => Railken\Amethyst\Repositories\CollectionRepository::class,
    'serializer' => Railken\Amethyst\Serializers\CollectionSerializer::class,
    'validator'  => Railken\Amethyst\Validators\CollectionValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\CollectionAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\CollectionFaker::class,
    'manager'    => Railken\Amethyst\Managers\CollectionManager::class,
];
