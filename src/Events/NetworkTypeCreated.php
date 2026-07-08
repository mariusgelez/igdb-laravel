<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\NetworkType;

class NetworkTypeCreated extends Event
{
    public function __construct(public NetworkType $data, Request $request)
    {
        parent::__construct($request);
    }
}
