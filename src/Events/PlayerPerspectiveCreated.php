<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\PlayerPerspective;

class PlayerPerspectiveCreated extends Event
{
    public function __construct(public PlayerPerspective $data, Request $request)
    {
        parent::__construct($request);
    }
}
