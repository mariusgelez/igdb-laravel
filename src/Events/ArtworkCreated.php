<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\Artwork;

class ArtworkCreated extends Event
{
    public function __construct(public Artwork $data, Request $request)
    {
        parent::__construct($request);
    }
}
