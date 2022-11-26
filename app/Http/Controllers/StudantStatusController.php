<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studant;
use App\Models\studant_info;
use Illuminate\Support\Facades\Auth;
use App\softDeletes;
class StudantStatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // if users login can see it
    }
    public function index(Request $request)
    {
        $user = Auth::user();
        $id = Auth::id();
        $studant = studant::where('user_id', Auth::id())->get();
       
        
            return view('studentadminreg.index')->with('studant', $studant);
        }
        public function SoftDelete( $id)
    {
        $studant = studant::find($id)->delete();
        
        return redirect()->back() ;
    }
    public function restore( $id)
    {
        $studant = studant::withTrashed()->where('id' ,  $id )->first() ;
        $studant->restore();
        return redirect()->back() ;
    }
         
}
