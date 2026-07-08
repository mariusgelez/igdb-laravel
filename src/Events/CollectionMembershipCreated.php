<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\CollectionMembership;

class CollectionMembershipCreated extends Event
{
    public function __construct(public CollectionMembership $data, Request $request)
    {
        parent::__construct($request);
    }
}
