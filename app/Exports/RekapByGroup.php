<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RekapByGroup implements FromView
{

    public function __construct(
        private array $data
    ) {
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
     return view("exports.rekap",[
        "data" => $this->data
     ]);
    }
}
