<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function subCriteria()
    {
        return $this->belongsTo(SubKriteria::class);
    }
    public function instrument()
    {
        return $this->belongsTo(Instrumen::class);
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
