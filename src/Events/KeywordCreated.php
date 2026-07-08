<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\Keyword;

class KeywordCreated extends Event
{
    public function __construct(public Keyword $data, Request $request)
    {
        parent::__construct($request);
    }
}
