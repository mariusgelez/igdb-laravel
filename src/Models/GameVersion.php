<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class GameVersion extends Model
{
    protected array $casts = [
        'features' => GameVersionFeature::class,
    ];
}
