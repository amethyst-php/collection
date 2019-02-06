<?php

namespace Railken\Amethyst\Schemas;

use Illuminate\Support\Facades\Config;
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
        $collectionableConfig = Config::get('amethyst.collection.data.collection-item.attributes.collectionable.options');

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
            Attributes\EnumAttribute::make('collectionable_type', array_keys($collectionableConfig))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('collectionable_id')
                ->setRelationKey('collectionable_type')
                ->setRelationName('collectionable')
                ->setRelations($collectionableConfig)
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
