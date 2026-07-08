<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\GameVersionFeatureValue;

class GameVersionFeatureValueCreated extends Event
{
    public function __construct(public GameVersionFeatureValue $data, Request $request)
    {
        parent::__construct($request);
    }
}
