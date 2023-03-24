<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\sesone1;

class studant extends Model
{

    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'user_id', 'name_studant', 'age',  'certificate', 'accept', 'photo', 'gender', 'division', 'Address', 'class', 'phone',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function student_info()
    {
        return $this->hasOne('App/Models/student_info');
    }

}
