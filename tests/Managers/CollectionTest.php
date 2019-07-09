<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\CollectionFaker;
use Amethyst\Managers\CollectionManager;
use Amethyst\Tests\BaseTest;
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
