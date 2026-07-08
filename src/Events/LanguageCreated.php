<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\Language;

class LanguageCreated extends Event
{
    public function __construct(public Language $data, Request $request)
    {
        parent::__construct($request);
    }
}
