<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\member_model as member;

class group_model extends Model
{
    //
    public function member(){
        return 	$this->hasMany('App\member');
    }
}
