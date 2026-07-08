<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class PlatformVersionReleaseDate extends Model
{
    protected array $casts = [
        'platform_version' => PlatformVersion::class,
    ];
}
