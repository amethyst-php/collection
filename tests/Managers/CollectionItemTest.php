<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\CollectionItemFaker;
use Railken\Amethyst\Managers\CollectionItemManager;
use Railken\Amethyst\Tests\BaseTest;
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
