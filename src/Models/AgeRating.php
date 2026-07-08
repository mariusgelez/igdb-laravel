<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Models;

class AgeRating extends Model
{
    protected array $casts = [
        'content_descriptions' => AgeRatingContentDescription::class,
    ];
}
