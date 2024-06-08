<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Instrumen;
use App\Models\Statement;
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

    public function rekap()
    {
        return view("user.rekap.index");
    }

}
