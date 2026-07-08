<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class CollectionRelationType extends Model
{
    protected array $casts = [
        'allowed_child_type' => CollectionType::class,
        'allowed_parent_type' => CollectionType::class,
    ];
}
