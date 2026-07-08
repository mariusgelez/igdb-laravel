<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\GameVersionFeature;

class GameVersionFeatureCreated extends Event
{
    public function __construct(public GameVersionFeature $data, Request $request)
    {
        parent::__construct($request);
    }
}
