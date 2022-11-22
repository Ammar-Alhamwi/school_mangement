<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sesone1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'studant_id',
        'name_sub',
        'value'

    ];

    public function sesone1(){
        return $this->belongsTo('App\Models\studant');
    }
}
