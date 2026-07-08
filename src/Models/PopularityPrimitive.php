<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class PopularityPrimitive extends Model
{
    protected array $casts = [
        'popularity_type' => PopularityType::class,
    ];
}
