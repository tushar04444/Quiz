<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    function rel_to_category(){
        return $this->belongsTo(Question::class , 'category_id');
    }
}
