<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class GameVideo extends Model
{
    protected array $casts = [
        'game' => Game::class,
    ];
}
