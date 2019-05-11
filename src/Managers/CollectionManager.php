<?php

namespace Railken\Amethyst\Managers;

use Railken\Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

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
