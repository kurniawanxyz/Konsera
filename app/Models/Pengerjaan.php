<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Pengerjaan extends Pivot
{
    use HasFactory;
    protected $guarded=[];
    protected $table="pengerjaan";
}
