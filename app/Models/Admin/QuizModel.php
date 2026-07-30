<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\McqModal;
use App\Models\Admin\Catergory;
class QuizModel extends Model
{
    protected $table = 'quizzes';
    protected $fillable = ['name','category_id','created_at'];

    public function mcqs()
    {
        return $this->hasMany(McqModal::class, 'quiz_id');
    }

    public function category(){
       return  $this->belongsTo(Catergory::class,'id');
    }
}
