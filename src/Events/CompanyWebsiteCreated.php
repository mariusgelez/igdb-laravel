<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\CompanyWebsite;

class CompanyWebsiteCreated extends Event
{
    public function __construct(public CompanyWebsite $data, Request $request)
    {
        parent::__construct($request);
    }
}
