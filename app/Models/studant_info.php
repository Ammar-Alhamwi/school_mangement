<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studant_info extends Model
{
    use HasFactory;
    protected $table = 'studant_infos';
    protected $fillable = [
        'class', 'division', 'studant_id', 'photo', 'Address'
    ];
    public function student()
    {
        return $this->belongsTo('App\Models\studant', 'studant_id');
    }
}
