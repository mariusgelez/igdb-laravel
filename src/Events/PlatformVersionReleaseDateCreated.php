<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\PlatformVersionReleaseDate;

class PlatformVersionReleaseDateCreated extends Event
{
    public function __construct(public PlatformVersionReleaseDate $data, Request $request)
    {
        parent::__construct($request);
    }
}
