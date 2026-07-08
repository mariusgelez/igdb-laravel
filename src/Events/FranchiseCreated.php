<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\Franchise;

class FranchiseCreated extends Event
{
    public function __construct(public Franchise $data, Request $request)
    {
        parent::__construct($request);
    }
}
