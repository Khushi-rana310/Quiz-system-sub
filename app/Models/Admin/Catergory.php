<?php

namespace App\Models\Admin;
use App\Models\Admin\Adminmodel;
use Illuminate\Database\Eloquent\Model;

class Catergory extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'creater_id',
        'creater_name',
    ];   
    // belongsTo() means each category belongs to one admin.
    //'creater_id' is the foreign key in categories.
    //'id' is the primary key in admins.
    public function creator()
    {
        return $this->belongsTo(Adminmodel::class, 'creater_id', 'id');
    }


}
