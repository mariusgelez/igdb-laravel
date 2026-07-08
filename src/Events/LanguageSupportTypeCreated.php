<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\LanguageSupportType;

class LanguageSupportTypeCreated extends Event
{
    public function __construct(public LanguageSupportType $data, Request $request)
    {
        parent::__construct($request);
    }
}
