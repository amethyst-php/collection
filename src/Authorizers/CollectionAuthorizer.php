<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class CollectionAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'collection.create',
        Tokens::PERMISSION_UPDATE => 'collection.update',
        Tokens::PERMISSION_SHOW   => 'collection.show',
        Tokens::PERMISSION_REMOVE => 'collection.remove',
    ];
}
