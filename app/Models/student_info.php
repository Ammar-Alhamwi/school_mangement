<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_info extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id','gender','Address','phone','notes',
     ];
     public function student()
    {
        return $this->belongsTo('App\Models\student_id' );
    }
}
