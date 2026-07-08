<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class MultiplayerMode extends Model
{
    protected array $casts = [
        'game' => Game::class,
        'platform' => Platform::class,
    ];
}
