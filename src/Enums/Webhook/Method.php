<?php

declare(strict_types=1);

namespace MariusGelez\IGDBLaravel\Enums\Webhook;

enum Method: string
{
    case CREATE = 'create';
    case DELETE = 'delete';
    case UPDATE = 'update';
}
