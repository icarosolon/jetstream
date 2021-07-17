<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait TeamTrait
{
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->team_id = auth()->user()->currentTeam->id;
        });

        static::addGlobalScope('team', function (Builder $builder) {
            $builder->where('team_id', '=', auth()->user()->currentTeam->id);
        });
    }
}
