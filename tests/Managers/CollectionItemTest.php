<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\CollectionItemFaker;
use Amethyst\Managers\CollectionItemManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class CollectionItemTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = CollectionItemManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = CollectionItemFaker::class;
}
