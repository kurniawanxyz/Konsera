<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKriteria extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function instrumen()
    {
        return $this->belongsTo(Instrumen::class);
    }

    public function statements()
    {
        return $this->belongsTo(Statement::class);
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


