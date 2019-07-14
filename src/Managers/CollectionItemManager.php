<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\CollectionItem newEntity()
 * @method \Amethyst\Schemas\CollectionItemSchema getSchema()
 * @method \Amethyst\Repositories\CollectionItemRepository getRepository()
 * @method \Amethyst\Serializers\CollectionItemSerializer getSerializer()
 * @method \Amethyst\Validators\CollectionItemValidator getValidator()
 * @method \Amethyst\Authorizers\CollectionItemAuthorizer getAuthorizer()
 */
class CollectionItemManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.collection.data.collection-item';
}
