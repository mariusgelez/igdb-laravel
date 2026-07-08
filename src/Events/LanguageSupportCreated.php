<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\LanguageSupport;

class LanguageSupportCreated extends Event
{
    public function __construct(public LanguageSupport $data, Request $request)
    {
        parent::__construct($request);
    }
}
