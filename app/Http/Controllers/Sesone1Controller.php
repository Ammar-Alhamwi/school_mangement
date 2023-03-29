<?php

namespace App\Http\Controllers;

use App\Models\sesone1;
use App\Models\sesone2;
use App\Models\studant;
use App\Models\student_info;
use Illuminate\Http\Request;

class Sesone1Controller extends Controller
{
    // public function index($id)
    // {
    //     /*wqfwqfqf*/
    //     $sesone1 = sesone1::where('studant_id', $id)->get();

    //     $studant = studant::where('id', $id)->first();
    //     $phot = $studant->photo;
    //     $avg = sesone1::Where('studant_id', $id)->pluck('value')->avg();

    //     return view('sesone1', compact('sesone1'), compact('phot'), compact('avg'));
    // }
    public function index()
    {
        $sesone1 = sesone1::all();

        return view('marks.marks', compact('sesone1'));
    }
    public function create(Request $request)
    {
        $studant_info = student_info::all();

        return view('admin.List of students1')->with('student_info', $studant_info);;
    }
    public function create2(Request $request)
    {
        $studant_info = student_info::all();

        return view('admin.List of students2')->with('student_info', $studant_info);;
    }
    public function create3(Request $request)
    {
        $studant_info = student_info::all();

        return view('admin.List of students3')->with('student_info', $studant_info);;
    }
    public function insertmarks(Request $request)
    {
        $studant_info = student_info::all();

        return view('admin.insertmarks')->with('student_info', $studant_info);;
    }
    

    public function store(Request $request)
    {
        $this->validate($request, [
            'id' =>  'required',
            'name_sub' =>  'required',
            'value' =>  'required',
        ]);
        sesone1::create([
            'studant_id' => $request->id,
            'name_sub' => $request->name_sub,
            'value' => $request->value,
        ]);
    }
    
}
