<?php

return [
    'table'      => 'amethyst_collections',
    'comment'    => 'Collection',
    'model'      => Amethyst\Models\Collection::class,
    'schema'     => Amethyst\Schemas\CollectionSchema::class,
    'repository' => Amethyst\Repositories\CollectionRepository::class,
    'serializer' => Amethyst\Serializers\CollectionSerializer::class,
    'validator'  => Amethyst\Validators\CollectionValidator::class,
    'authorizer' => Amethyst\Authorizers\CollectionAuthorizer::class,
    'faker'      => Amethyst\Fakers\CollectionFaker::class,
    'manager'    => Amethyst\Managers\CollectionManager::class,
];
