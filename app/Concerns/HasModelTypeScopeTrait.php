<?php

namespace App\Concerns;

use App\Enum\ModelTypeEnum;
use Illuminate\Database\Eloquent\Builder;

trait HasModelTypeScopeTrait
{
    protected static function bootHasModelTypeScopeTrait(): void
    {
        static::addGlobalScope('model_type', function (Builder $builder) {
            $builder->where(
                $builder->getModel()->qualifyColumn('model_type'),
                ModelTypeEnum::ACTIVE->value
            );
        });
    }

    public function scopeOfModelType(
        Builder $query,
        ModelTypeEnum $type
    ): Builder {
        return $query->withoutGlobalScope('model_type')
            ->where(
                $query->getModel()->qualifyColumn('model_type'),
                $type->value
            );
    }

    public function scopeActiveModel(Builder $query): Builder
    {
        return $query->ofModelType(ModelTypeEnum::ACTIVE);
    }

    public function scopeArchivedModel(Builder $query): Builder
    {
        return $query->ofModelType(ModelTypeEnum::ARCHIVED);
    }

    public function scopeDeletedModel(Builder $query): Builder
    {
        return $query->ofModelType(ModelTypeEnum::DELETED);
    }

    // Lifecycle methods

    public function modelTypeArchive(): bool
    {
        return $this->changeModelType(ModelTypeEnum::ARCHIVED);
    }

    public function modelTypeRestore(): bool
    {
        return $this->changeModelType(ModelTypeEnum::ACTIVE);
    }

    public function modelTypeDeleted(): bool
    {
        return $this->changeModelType(ModelTypeEnum::DELETED);
    }

    public function modelTypeForceDelete(): bool
    {
        return $this->delete();
    }

    protected function changeModelType(ModelTypeEnum $type): bool
    {
        $this->setAttribute('model_type', $type->value);

        return $this->save();
    }
}
