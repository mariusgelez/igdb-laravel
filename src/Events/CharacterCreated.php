<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\Character;

class CharacterCreated extends Event
{
    public function __construct(public Character $data, Request $request)
    {
        parent::__construct($request);
    }
}
