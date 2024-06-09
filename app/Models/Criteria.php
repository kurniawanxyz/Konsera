<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Criteria extends Model
{
    use HasFactory;
    protected $guarded = [

    ];
    public function instrumen():BelongsTo
    {
        return $this->belongsTo(Instrumen::class);
    }
    
    public function pengerjaan(): HasMany
    {
        return $this->hasMany(Pengerjaan::class, 'criteria_id');
    }

}
