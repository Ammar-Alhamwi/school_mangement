<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentInfoController extends Controller
{
    public function index()
    {
        if (Auth::user()->rool==1) {
            
            // $studant=studant::all()->where('user_id',Auth::user()->id);
            return view('admin.Student behaviour');

        }
    }
    public function show(){

        exec('C:/ProgramData/Anaconda3/python.exe C:/Users/AMMAR/Untitled1.ipynb');
        

    }
}
