<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\GameTimeToBeat;

class GameTimeToBeatCreated extends Event
{
    public function __construct(public GameTimeToBeat $data, Request $request)
    {
        parent::__construct($request);
    }
}
