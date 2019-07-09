<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class CollectionItemAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'collection-item.create',
        Tokens::PERMISSION_UPDATE => 'collection-item.update',
        Tokens::PERMISSION_SHOW   => 'collection-item.show',
        Tokens::PERMISSION_REMOVE => 'collection-item.remove',
    ];
}
