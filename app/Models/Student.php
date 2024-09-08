<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model{

    use HasFactory;
    public function subjects(){
        //生徒は多数の科目を履修。
        return $this->belongsToMany(Subject::class);
    }
}