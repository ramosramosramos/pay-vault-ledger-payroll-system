<?php

namespace App\Enum\Auth;

use App\Concerns\HasEnumOption;

enum PermissionEnum: string
{
    use HasEnumOption;

    case USER_VIEW = 'user_view';
    case USER_CREATE = 'user_create';
    case USER_UPDATE = 'user_update';
    case USER_ARCHIVE = 'user_archive';
    case USER_DELETE = 'user_delete';
    case USER_FORCE_DELETE = 'user_force_delete';

}
