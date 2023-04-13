<?php

namespace App\Http\Controllers;

use App\Models\sesone1;
use App\Models\sesone2;
use App\Models\studant;
use App\Models\student_info;
use Illuminate\Database\Eloquent\Model;
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
    public function index(Request $request)
    {
        $sesone1 = sesone1::all()->where('studant_id',$request->id );

        return view('marks.marks', compact('sesone1'));
    }
    public function create(Request $request)
    {
        $studant_info = student_info::all();

        return view('admin.List_of_students1')->with('student_info', $studant_info);
    }
    public function create2(Request $request)
    {
        $studant_info = student_info::all();

        return view('admin.List_of_students2')->with('student_info', $studant_info);
    }
    public function create3(Request $request)
    {
        $studant_info = student_info::all();

        return view('admin.List_of_students3')->with('student_info', $studant_info);
    }
    public function insertmarks(Request $request)
    {

        return view('admin.insertmarks')->with('id', $request->id);
    }


    public function stor_mark(Request $request)
    {

        sesone1::create([

            'studant_id' => $request->id,
            'name_sub' => $request->name_sub1,
            'value' => $request->value1,
        ]);
        sesone1::create([

            'studant_id' => $request->id,
            'name_sub' => $request->name_sub2,
            'value' => $request->value2,
        ]);
        sesone1::create([

            'studant_id' => $request->id,
            'name_sub' => $request->name_sub3,
            'value' => $request->value3,
        ]);
        sesone1::create([

            'studant_id' => $request->id,
            'name_sub' => $request->name_sub4,
            'value' => $request->value4,
        ]);


        return redirect()->route('home');
    }
}
