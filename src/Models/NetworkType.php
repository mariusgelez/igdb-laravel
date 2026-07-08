<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class NetworkType extends Model
{
    protected array $casts = [
        'event_networks' => EventNetwork::class,
    ];
}
