<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Managers\CollectionManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class CollectionItemSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name')
                ->setRequired(true)
                ->setUnique(true),
            Attributes\LongTextAttribute::make('description'),
            Attributes\BelongsToAttribute::make('collection_id')
                ->setRelationName('collection')
                ->setRelationManager(CollectionManager::class)
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
