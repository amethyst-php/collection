<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\CollectionManager;
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
            Attributes\TextAttribute::make('name'),
            Attributes\LongTextAttribute::make('description'),
            Attributes\BelongsToAttribute::make('collection_id')
                ->setRelationName('collection')
                ->setRelationManager(CollectionManager::class)
                ->setRequired(true),
            Attributes\EnumAttribute::make('collectionable_type', app('amethyst')->getMorphListable('collection-item', 'collectionable'))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('collectionable_id')
                ->setRelationKey('collectionable_type')
                ->setRelationName('collectionable')
                ->setRelations(app('amethyst')->getMorphRelationable('collection-item', 'collectionable'))
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
