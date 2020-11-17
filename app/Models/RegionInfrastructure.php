<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RegionInfrastructure extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'region_id',
        'target_2016',
        'target_2017',
        'target_2018',
        'target_2019',
        'target_2020',
        'target_2021',
        'target_2022',
        'target_2023',
        'target_2024',
        'target_2025',
        'target_total',
    ];


    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
