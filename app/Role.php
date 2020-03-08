<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Role extends Model
{
    protected $fillable=[
        'role',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }  
}
