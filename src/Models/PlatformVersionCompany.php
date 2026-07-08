<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class PlatformVersionCompany extends Model
{
    protected array $casts = [
        'company' => Company::class,
    ];
}
