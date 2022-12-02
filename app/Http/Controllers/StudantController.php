<?php

namespace App\Http\Controllers;

use App\Models\studant;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;



class StudantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth'); // if users login can see it
    }
    public function index(Request $request)
    {
        $user = Auth::user();
        $id = Auth::id();
        $studant = studant::where('user_id', Auth::id())->get();
        return view('studentinfo.index')->with('studant', $studant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name_studant' =>  'required',
        //     'age' =>  'required',
        //     'certificate' =>  'required|image',
        //     'Address' =>  'required',
        //     'photo' =>  'required|image',
        //     'accept' => '0',
        //      'phone' =>'required',
        //      'gender'=>'required',
        // ]);
        //save photo
         $photo = $request->photo;
         $newPhoto = time() . $photo->getClientOriginalName();
        $photo->move('uploads/student', $newPhoto);
        // //save certificate
         $certificate = $request->certificate;
        $newPhoto = time() . $certificate->getClientOriginalName();
         $certificate->move('uploads/student', $newPhoto);
        $new_student = new studant;
        $new_student->user_id = Auth::id();
        $new_student->name_studant = $request->name_studant;
        $new_student->age=$request->age;
        $new_student->accept=0;
        $new_student->division=$request->division;
         $new_student->class=$request->class;
         $new_student->phone=$request->phone;
          $new_student->gender=$request->gender;
         $new_student->Address=$request->Address;
         $new_student->photo='uploads/student/' . $newPhoto;
         $new_student->certificate='uploads/student/' . $newPhoto;
        $new_student->save();
        return back();

         
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }
    public function show_info($id)
    {
        $studentinfo = studant::where('id', $id)->first();
        return view('studentinfo.show')->with('studentinfo', $studentinfo);
    }

    public function edit_admin($id)
    {
        $studant = studant::all()->where('id', $id);

        return view('studentinfo.edit_admin', compact('studant'));
    }
    public function update_admin(Request $request)
    {
        $this->validate($request, [
            'class' =>  'required',
            'division' =>  'required',
        ]);
        $studentinfo = studant::where('id', $request->id)->update([
            'class' => $request->class,
            'division' => $request->division
        ]);
        return view('studentinfo.edit_admin');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Student = studant::where('id', $id)->first();

        return view('studentinfo.edit', compact('Student'), compact('studentinfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Student = studant::where('id', $id)->first();

        if ($request->has('photo')) {
            $photo = $request->photo;
            $newPhoto = time() . $photo->getClientOriginalName();
            $photo->move('uploads/student', $newPhoto);
            $Student->photo = 'uploads/student/' . $newPhoto;
        }
        $Student = new  studant;
       
        $Student->user_id = Auth::id();
        $Student->Address = $request->Address;
        $Student->save();
    }
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
