<?php

namespace App\Enum;

use App\Concerns\HasEnumOption;

enum ModelTypeEnum: string
{
    use HasEnumOption;
    case ACTIVE = 'active';
    case ARCHIVED = 'archived';
    case DELETED = 'deleted';
}
