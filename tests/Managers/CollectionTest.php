<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\CollectionFaker;
use Railken\Amethyst\Managers\CollectionManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class CollectionTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = CollectionManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = CollectionFaker::class;
}
