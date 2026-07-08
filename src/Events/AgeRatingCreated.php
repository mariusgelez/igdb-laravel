<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\AgeRating;

class AgeRatingCreated extends Event
{
    public function __construct(public AgeRating $data, Request $request)
    {
        parent::__construct($request);
    }
}
