<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\studant;

class sesone1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'studant_id',
        'name_sub',
        'value',
        

    ];

    public function studant(){
        return $this->belongsTo('App\Models\studant');
    }
}
