<?php

namespace App\Http\Controllers;

use App\Models\slider;
use App\Models\studant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()==false){

            return view('homepage.home');
        }

        if (Auth::user()->rool==0) {
            $silder=slider::all();
            $studant=studant::all()->where('user_id',Auth::user()->id);
            return view('homepage.home2',compact('silder'),compact('studant'));

        }else{

            $silder=slider::all();
            return view('home_admin',compact('silder'));
        }


    
    }
    public function home2(){
        $silder=slider::all();
        $studant=studant::all()->where('user_id',Auth::user()->id);
        return view('homepage.home2',compact('silder'),compact('studant'));

    }
    
}
