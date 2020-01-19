<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Collection                 newEntity()
 * @method \Amethyst\Schemas\CollectionSchema          getSchema()
 * @method \Amethyst\Repositories\CollectionRepository getRepository()
 * @method \Amethyst\Serializers\CollectionSerializer  getSerializer()
 * @method \Amethyst\Validators\CollectionValidator    getValidator()
 * @method \Amethyst\Authorizers\CollectionAuthorizer  getAuthorizer()
 */
class CollectionManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.collection.data.collection';

    /**
     * Describe extra actions.
     *
     * @return array
     */
    public function getDescriptor()
    {
        return [
            'tree' => [
                'parent' => 'parent_id',
            ],
        ];
    }
}
