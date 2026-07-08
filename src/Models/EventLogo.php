<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class EventLogo extends Image
{
    protected array $casts = [
        'event' => Event::class,
    ];
}
