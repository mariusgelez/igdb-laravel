<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\PlatformWebsite;

class PlatformWebsiteCreated extends Event
{
    public function __construct(public PlatformWebsite $data, Request $request)
    {
        parent::__construct($request);
    }
}
