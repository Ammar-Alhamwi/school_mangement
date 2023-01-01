<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class student_info extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'student_id','gender','Address','phone','notes',
     ];
     public function student()
    {
        return $this->belongsTo('App\Models\studant','student_id' );
    }
}
