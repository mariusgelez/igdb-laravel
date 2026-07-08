<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\Company;

class CompanyCreated extends Event
{
    public function __construct(public Company $data, Request $request)
    {
        parent::__construct($request);
    }
}
