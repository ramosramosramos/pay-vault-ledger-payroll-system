<?php

namespace App\Enum;

use App\Concerns\HasEnumOption;

enum EmploymentTypeEnum: string
{
    use HasEnumOption;
    case REGULAR = 'regular';
    case PROBATIONARY = 'probationary';
    case CONTRACTUAL = 'contractual';
    case PART_TIME = 'part_time';
    case PROJECT_BASED = 'project_based';
    case SEASONAL = 'seasonal';
    case CASUAL = 'casual';
    case FREELANCE = 'freelance';
    case INTERN = 'intern';
    case COMMISSION_BASED = 'commission_based';

    /**
     * Get the human-readable label.
     */
    public function label(): string
    {
        return match ($this) {
            self::REGULAR => 'Regular / Permanent',
            self::PROBATIONARY => 'Probationary',
            self::CONTRACTUAL => 'Contractual',
            self::PART_TIME => 'Part-Time',
            self::PROJECT_BASED => 'Project-Based',
            self::SEASONAL => 'Seasonal',
            self::CASUAL => 'Casual',
            self::FREELANCE => 'Freelance / Contractor',
            self::INTERN => 'Internship / Trainee',
            self::COMMISSION_BASED => 'Commission-Based',
        };
    }

    /**
     * Determine whether this employment type is classified as regular.
     */
    public function isPermanent(): bool
    {
        return $this === self::REGULAR;
    }

    /**
     * Determine whether this employment type is generally temporary.
     */
    public function isTemporary(): bool
    {
        return match ($this) {
            self::PROBATIONARY,
            self::CONTRACTUAL,
            self::PROJECT_BASED,
            self::SEASONAL,
            self::CASUAL,
            self::INTERN => true,

            default => false,
        };
    }
}
