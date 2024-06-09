<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instrumen extends Model
{
    use HasFactory;
    protected $guarded = [

    ];

    public function criteria(): HasMany
    {
        return $this->hasMany(Criteria::class);
    }

    public function sub_criterias(): HasMany
    {
        return $this->hasMany(SubKriteria::class);
    }

    public function statements(): HasMany
    {
        return $this->hasMany(Statement::class);
    }

    public function answer(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function groups()
    {
        return $this->BelongsToMany(Group::class,'groups_to_instruments');
    }

    public function pengerjaan_user():BelongsToMany
    {
        return $this->belongsToMany(User::class,'pengerjaan')->withPivot(["points"]);
    }

    public function usersByKriteria(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'PengerjaanByKriteria', 'instrumen_id', 'user_id')
                    ->withPivot('sub_kriteria_id', 'group_id', 'point', 'pointMax', 'status')
                    ->withTimestamps();
    }

}
