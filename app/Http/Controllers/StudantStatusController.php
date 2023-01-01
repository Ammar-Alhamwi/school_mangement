<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student_info;
use App\Models\studant;

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
        // $user = Auth::user();
        // $id = Auth::id();
        $studant_info = student_info::all();
       
        
            return view('admin.dashboard')->with('student_info', $studant_info);
        }
        // رفض الطالب 
        public function SoftDelete( $id)
    {
        $studant_info = student_info::find($id)->delete();
        $studant = studant::find($id)->delete();
        return redirect()->back() ;
    }
    

    // الموافقة على الطالب-> accept=1;
    public function accept(Request $request, $id)
    {
       
    studant::where('id', $id)->update(array('accept' => '1'));
    return redirect()->back();
}

}