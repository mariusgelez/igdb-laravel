<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\Platform;

class PlatformCreated extends Event
{
    public function __construct(public Platform $data, Request $request)
    {
        parent::__construct($request);
    }
}
