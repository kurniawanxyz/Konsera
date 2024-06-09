<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Relasi untuk mendapatkan group yang dimasuki user terkait
     *
     * @return BelongsToMany
     */
    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class, 'user_groups')->withTimestamps();
    }

    public function pengerjaanByInstrumen(): BelongsToMany
    {
        return $this->belongsToMany(Instrumen::class, 'pengerjaan')->withPivot(["group_id","points","criteria_id"]);
    }

    public function pengerjaanByGroup(): BelongsToMany
    {
        return $this->belongsToMany(Group::class, 'pengerjaan')
                    ->withPivot('instrumen_id', 'points')
                    ->withTimestamps();
    }
    /**
     * Fungsi untuk mengecek apakah user adalah anggota grup terkait
     *
     * @param  mixed $group_id
     * @return void
     */
    public function isMember($group_id)
    {
        return $this->groups()->where('group_id', $group_id)->exists();
    }

    public function nilaiTiapSubKriteriaInstrumen(): BelongsToMany
    {
        return $this->belongsToMany(Instrumen::class, 'PengerjaanByKriteria', 'user_id', 'instrumen_id')
                    ->withPivot('sub_kriteria_id', 'group_id', 'point', 'pointMax','status')
                    ->withTimestamps();
    }

    public function nilaiTiapSubKriteria(): BelongsToMany
    {
        return $this->belongsToMany(SubKriteria::class, 'PengerjaanByKriteria', 'user_id', 'sub_kriteria_id')
                    ->withPivot('instrumen_id', 'group_id', 'point', 'pointMax', 'status')
                    ->withTimestamps();
    }
}
