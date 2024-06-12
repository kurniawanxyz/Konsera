<?php

namespace App\Http\Controllers;

use App\Exports\ArrayExport;
use App\Exports\RekapByGroup;
use App\Models\Group;
use App\Models\Instrumen;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminRekapController extends Controller
{
    public function index($user_id, $instrumen_id, $group_id)
    {
        $user = User::findOrFail($user_id);
        $instrumen = Instrumen::findOrFail($instrumen_id);
        $group = Group::findOrFail($group_id);
        $subVariabel = $user->nilaiTiapSubKriteria;
        $rekap = $user->pengerjaanByInstrumen()->where("instrumen_id",$instrumen_id)->first();
        $persentase = [];
        $labels =[];
        foreach ($user->nilaiTiapSubKriteria as $key => $item) {
            $labels[] = $item->text;
            if($item->pivot->pointMax != 0 && $item->pivot->point != 0){
                $persentase[] = number_format($item->pivot->point/$item->pivot->pointMax*100, 1);
            }else{
                $persentase[] = 0;
            }
        }
        $persentase[] = 0;
        $persentase[] = 100;
        return view("admin.rekap.index", compact('user', 'instrumen_id', 'group_id','rekap','persentase','labels',"subVariabel"));
    }

    public function downloadRekap($instrumen_id,$group_id) {
        $user = Instrumen::findOrFail($instrumen_id)->pengerjaan_user;
        $data = [];
        foreach ($user as $key => $item) {
            $data[] = [
                "No" => $key+1,
                "Nama" => $item->name,
                "Email" => $item->email,
                "Nilai" => $item->pivot->points,
                "Kriteria" => $item->criteria->where("instrumen_id",$instrumen_id)->first()->text
            ];
        }
        $export = new RekapByGroup($data);
        $group= Group::findorFail($group_id);
        $namafile = "rekap-nilai-grup-".$group->name.".xlsx";
        return Excel::download($export, $namafile);
    }
}
