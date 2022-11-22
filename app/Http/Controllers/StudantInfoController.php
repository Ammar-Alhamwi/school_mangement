<?php

namespace App\Http\Controllers;

use App\Models\studant;
use Illuminate\Http\Request;
use App\Models\studentinfo;
use PDO;

class StudantInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studentinfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studentinfo = studentinfo::where('id' , $id )->first();
        return view('studentinfo.show')->with('studentinfo',$studentinfo);
    }

    public function edit($id)
    {
        $Student = studant::where('id', $id)->first();
        $studentinfo=studentinfo::where('$student_id',$id);
        return view('studentinfo.edit', compact('Student'),compact('studentinfo'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'class' =>  'required',
            'division' =>  'required',
        ]);
        $studentinfo=studentinfo::where('user_id',$id)->update([
            'class'=>$request->class,
            'division'=>$request->division
        ]);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
