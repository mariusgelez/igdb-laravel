<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\PlatformFamily;

class PlatformFamilyCreated extends Event
{
    public function __construct(public PlatformFamily $data, Request $request)
    {
        parent::__construct($request);
    }
}
