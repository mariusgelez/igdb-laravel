<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\GameMode;

class GameModeCreated extends Event
{
    public function __construct(public GameMode $data, Request $request)
    {
        parent::__construct($request);
    }
}
