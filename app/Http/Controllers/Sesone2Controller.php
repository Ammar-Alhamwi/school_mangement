<?php

namespace App\Http\Controllers;

use App\Models\sesone2;
use App\Models\studant;
use Illuminate\Http\Request;

class Sesone2Controller extends Controller
{
    public function index(Request $request)
    {
        $sesone2 = sesone2::all()->where('studant_id',$request->id );

        return view('marks.marks', compact('sesone2'));
    }
    // public function index($id){

    //     $sesone1 = sesone2::where('studant_id', $id)->get();

    //     $studant=studant::where('id',$id)->first();
    //     $phot=$studant->photo;
    //     $avg=sesone2::Where('studant_id', $id)->pluck('value')->avg();
    //     return view('sesone1',compact('sesone1'),compact('phot'),compact('avg'));
    // }
    public function create()
    {

        return view('studant.session2');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' =>  'required',
            'name_sub' =>  'required',
            'value' =>  'required',
        ]);
        sesone2::create([
            'studant_id' => $request->id,
            'name_sub' => $request->name_sub,
            'value' => $request->value,
        ]);
    }
}
