<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Managers\CollectionManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;
use Railken\Lem\Contracts\EntityContract;

class CollectionSchema extends Schema
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
                ->setRequired(true),
            Attributes\LongTextAttribute::make('description'),
            Attributes\BelongsToAttribute::make('parent_id')
                ->setRelationName('parent')
                ->setRelationManager(CollectionManager::class),
            Attributes\BooleanAttribute::make('default')
                ->setDefault(function(EntityContract $entity) {
                    return false;
                }),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
