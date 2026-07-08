<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class InvolvedCompany extends Model
{
    protected array $casts = [
        'company' => Company::class,
        'game' => Game::class,
    ];
}
