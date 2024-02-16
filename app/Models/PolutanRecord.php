<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PolutanRecord extends Model
{
    use HasFactory;

    protected $fillable = ['pm_two', 'district_id', 'village_id', 'user_id'];

    public function district(): BelongsTo
    {
        return $this->belongsTo(
            related: District::class,
            foreignKey: 'district_id'
        );
    }

    public function village(): BelongsTo
    {
        return $this->belongsTo(
            related: Villages::class,
            foreignKey: 'village_id'
        );
    }
}
