<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Enums\AgeRating;

enum Category: int
{
    case ESRB = 1;
    case PEGI = 2;
}
