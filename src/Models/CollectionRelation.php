<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class CollectionRelation extends Model
{
    protected array $casts = [
        'child_collection' => Collection::class,
        'parent_collection' => Collection::class,
        'type' => CollectionRelationType::class,
    ];
}
