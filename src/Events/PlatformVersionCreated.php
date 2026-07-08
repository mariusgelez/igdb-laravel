<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\PlatformVersion;

class PlatformVersionCreated extends Event
{
    public function __construct(public PlatformVersion $data, Request $request)
    {
        parent::__construct($request);
    }
}
