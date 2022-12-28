<?php

namespace App\Http\Controllers;

use App\Models\subject_name;
use Illuminate\Http\Request;

class SubjectNameController extends Controller
{

    public function index(Request $request){
        $id=$request->id;
        $sub=subject_name::all()->where('book_id',$id);
        return view('class.book page',compact('sub'));


    }

}

