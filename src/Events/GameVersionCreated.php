<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\GameVersion;

class GameVersionCreated extends Event
{
    public function __construct(public GameVersion $data, Request $request)
    {
        parent::__construct($request);
    }
}
