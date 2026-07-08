<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\MultiplayerMode;

class MultiplayerModeCreated extends Event
{
    public function __construct(public MultiplayerMode $data, Request $request)
    {
        parent::__construct($request);
    }
}
