<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Mcqrecord extends Model
{
    protected $table = 'mcq_records';

    function scopewithmcqquestion($query){
        return $query->join('mcqs','mcq_records.mcq_id','=','mcqs.id')->select('mcqs.question','mcq_records.*');
    }
}