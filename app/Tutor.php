<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
class Tutor extends Model
{ 
    public function students(){
        return $this->hasMany(Student::class);
    } 
    public function comments(){
        return $this->hasMany(Student::class);
    }  
}
