<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class GameVersionFeatureValue extends Model
{
    protected array $casts = [
        'game' => Game::class,
        'game_feature' => GameVersionFeature::class,
    ];
}
