<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model{

    use HasFactory;
    public function students(){
        //1つの科目を多数の生徒が履修。
        return $this->belongsToMany(Student::class);
    }
}