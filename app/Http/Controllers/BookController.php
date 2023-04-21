<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\slider;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //effe
    public function index(){
        $book=book::all();

        $silder=slider::all();
        return view('class.classes',compact('book'),compact('silder'));


    }
}
