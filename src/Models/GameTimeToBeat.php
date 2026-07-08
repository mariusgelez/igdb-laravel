<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class GameTimeToBeat extends Model
{
    protected array $casts = [
        'game' => Game::class,
    ];
}
