<?php

namespace App\Enum\Auth;

use App\Concerns\HasEnumOption;

enum RoleEnum: string
{
    use HasEnumOption;
    case ADMIN = 'admin';
    case HR_MANAGER = 'hr_manager';
    case HR_STAFF = 'hr_staff';
    case EMPLOYEE = 'employee';
}
