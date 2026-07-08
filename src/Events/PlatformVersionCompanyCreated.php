<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MariusGelez\IGDBLaravel\Models\PlatformVersionCompany;

class PlatformVersionCompanyCreated extends Event
{
    public function __construct(public PlatformVersionCompany $data, Request $request)
    {
        parent::__construct($request);
    }
}
