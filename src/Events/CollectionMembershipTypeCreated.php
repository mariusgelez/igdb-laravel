<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\CollectionMembershipType;

class CollectionMembershipTypeCreated extends Event
{
    public function __construct(public CollectionMembershipType $data, Request $request)
    {
        parent::__construct($request);
    }
}
