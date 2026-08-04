<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class UserquizModel extends Model
{
    protected $table = 'quiz_record';
    protected $fillable = ['quiz_id','user_id','status','created_at'];

    public function scopeWithgetquiz($query){
        return $query->join('quizzes','quizzes.id','=','quiz_record.quiz_id')->select('quizzes.name','quiz_record.*');
    }
}

