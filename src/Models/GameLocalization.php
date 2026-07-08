<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class GameLocalization extends Model
{
    protected array $casts = [
        'cover' => Cover::class,
        'game' => Game::class,
        'region' => Region::class,
    ];
}
