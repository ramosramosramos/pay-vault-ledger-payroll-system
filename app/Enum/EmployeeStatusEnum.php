<?php

namespace App\Enum;

enum EmployeeStatusEnum: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case TERMINATED = 'terminated';
    case ON_LEAVE = 'on_leave';

    public function label(): string
    {

        return match ($this) {
            self::ACTIVE => 'Active',
            self::INACTIVE => 'Inactive',
            self::TERMINATED => 'Terminated',
            self::ON_LEAVE => 'On leave',
        };
    }
}
