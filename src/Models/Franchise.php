<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class Franchise extends Model
{
    protected array $casts = [
        'games' => Game::class,
    ];
}
