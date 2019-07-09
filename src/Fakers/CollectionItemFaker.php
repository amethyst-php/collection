<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class CollectionItemFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('description', $faker->text);
        $bag->set('collection', CollectionFaker::make()->parameters()->toArray());
        $bag->set('collectionable_type', 'foo');
        $bag->set('collectionable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
