<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class Artwork extends Image
{
    protected array $casts = [
        'game' => Game::class,
    ];
}
