<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class ReleaseDate extends Model
{
    protected array $casts = [
        'game' => Game::class,
        'platform' => Platform::class,
        'status' => ReleaseDateStatus::class,
    ];
}
