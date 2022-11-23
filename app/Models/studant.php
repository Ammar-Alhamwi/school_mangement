<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studant extends Model
{
    use HasFactory;
    protected $fillable = [
        'class', 'division',  'photo', 'Address','name_studant', 'user_id', 'age','behaviour','accept','photo','certificate',
     ];
     public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id' );
    }
    
}

