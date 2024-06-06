<?php

namespace App\Imports;

use App\Models\Statement;
use App\Models\SubKriteria;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PernyataanImport implements ToCollection,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function __construct(
        private int $instrumen_id
    ) {
    }
    public function collection(Collection $collection)
    {
        foreach ($collection as $i => $item) {
            $subKriteria = SubKriteria::updateOrCreate(
                [
                    "text" => $item["sub_kriteria"],
                    "instrumen_id" => $this->instrumen_id
                ],
                [
                    "instrumen_id" => $this->instrumen_id,
                    "text" => $item["sub_kriteria"],
                    "description" => "Example Description"
                ]
            );
           Statement::updateOrCreate(
                [
                    "text" => $item["pernyataan"],
                    "instrumen_id" => $this->instrumen_id
                ],
                [
                    "instrumen_id" => $this->instrumen_id,
                    "sub_kriteria_id" => $subKriteria->id,
                    "text" => $item["pernyataan"],
                    "favorable" => $item["favorable"]
                ]
            );

        }
    }
}
