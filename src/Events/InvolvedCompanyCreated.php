<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\InvolvedCompany;

class InvolvedCompanyCreated extends Event
{
    public function __construct(public InvolvedCompany $data, Request $request)
    {
        parent::__construct($request);
    }
}
