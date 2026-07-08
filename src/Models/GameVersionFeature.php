<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class GameVersionFeature extends Model
{
    protected array $casts = [
        'values' => GameVersionFeatureValue::class,
    ];
}
