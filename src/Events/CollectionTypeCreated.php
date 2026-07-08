<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\CollectionType;

class CollectionTypeCreated extends Event
{
    public function __construct(public CollectionType $data, Request $request)
    {
        parent::__construct($request);
    }
}
