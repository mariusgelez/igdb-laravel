<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\GameEngineLogo;

class GameEngineLogoCreated extends Event
{
    public function __construct(public GameEngineLogo $data, Request $request)
    {
        parent::__construct($request);
    }
}
