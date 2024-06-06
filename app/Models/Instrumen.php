<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public static function createOrUpdate(array $searchAttributes, array $updateAttributes)
    {
        // Temukan item berdasarkan atribut pencarian
        $item = static::where($searchAttributes)->first();

        // Jika item ditemukan, lakukan update
        if ($item) {
            $item->update($updateAttributes);
        } else {
            // Jika tidak ditemukan, buat item baru
            $item = static::create(array_merge($searchAttributes, $updateAttributes));
        }

        return $item;
    }

}
