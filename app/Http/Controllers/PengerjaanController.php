<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Criteria;
use App\Models\Group;
use App\Models\Instrumen;
use App\Models\Statement;
use App\Models\SubKriteria;
use Exception;
use Illuminate\Http\Request;

class PengerjaanController extends Controller
{
    //
    public function index($group_id, $instrumen_id)
    {
        $instrumens = Instrumen::findOrFail($instrumen_id);
        // dd($instrumens->sub_criterias[0]->statements);
         return view('user.pengerjaan.index',compact("instrumens","group_id"));
    }

    public function store(Request $request,$group_id,$instrumen_id)
    {
        try{
            $data = $request->all();
            unset($data["_token"]);
            $point=0;
            foreach ($data as $key => $value) {
                $key = explode("-", $key);
                $key[1];
                $pernyataan = Statement::findOrFail($key[1])->favorable;
                $jawaban = Answer::findOrFail($value);
                // dd($jawaban,$pernyataan);
                if($pernyataan == "unfav"){
                    $point = $point+$jawaban->point_unfav;
                }
                if($pernyataan == "fav"){
                    $point = $point+$jawaban->point_fav;
                }
            }
            auth()->user()->pengerjaanByInstrumen()->syncWithoutDetaching(
                [
                    $instrumen_id => [
                    "group_id" => $group_id,
                    "points" => $point
                    ]
                ]
            );
            return redirect()->route("user.dashboard")->with("success","Berhasil menyimpan pengerjaan");
        }catch(Exception $e){
            return back()->with("error",$e->getMessage());
        }

    }

    public function show($instrumen_id)
    {
        $data = auth()->user()->pengerjaanByInstrumen()->where("instrumen_id",$instrumen_id)->first();
        $nilaiTiapSubKriteria = auth()->user()->nilaiTiapSubKriteria;
        $nilaiPoint =[];
        $label =[];

        foreach($nilaiTiapSubKriteria as $item){
            if($item->pivot->pointMax > 0){
                $nilaiPoint[]= ($item->pivot->point/$item->pivot->pointMax) * 100;
            }
            $nilaiPoint[]= 0;

            $label[]= $item->text;
        }
        $nilaiPoint[]= 0;
        $nilaiPoint[]= 100;

        $rekap=[
            "group" => Group::findOrFail($data->pivot->group_id),
            "criteria" =>Criteria::findOrFail($data->pivot->criteria_id),
            "instrumen" => Instrumen::findOrFail($data->pivot->instrumen_id),
            "pivot" => $data->pivot,
            "subKriteria" => SubKriteria::where("instrumen_id",$data->pivot->instrumen_id),
            "nilaiPoin" => array_values($nilaiPoint),
            "label" => $label,
            "nilaiTiapSubKriteria" => auth()->user()->nilaiTiapSubKriteria,
            "pengerjaan" => auth()->user()->pengerjaanByInstrumen()->where("instrumen_id",$instrumen_id)->first(),
        ];
        return view("user.rekap.show",compact("rekap"));
    }

    public function rekap()
    {
        $data = auth()->user()->pengerjaanByInstrumen;
        $rekap = [];
        foreach ($data as $key => $value) {

            $rekap[]=[
                "group" => Group::findOrFail($value->pivot->group_id),
                "criteria" =>Criteria::findOrFail($value->pivot->criteria_id),
                "instrumen" => Instrumen::findOrFail($value->pivot->instrumen_id),
                "pivot" => $value->pivot
            ];
        }
        // dd($rekap);
        return view("user.rekap.index",compact("rekap"));
    }


}
