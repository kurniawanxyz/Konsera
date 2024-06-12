<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;

class ArrayExport implements FromArray
{


    public function __construct(
        private array $data
    ) {
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function array(): array
    {
        return $this->data;
    }
}
