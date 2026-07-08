<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\ReleaseDate;

class ReleaseDateCreated extends Event
{
    public function __construct(public ReleaseDate $data, Request $request)
    {
        parent::__construct($request);
    }
}
