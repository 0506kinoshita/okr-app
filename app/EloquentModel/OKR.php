<?php

namespace App\EloquentModel;

use Illuminate\Database\Eloquent\Model;

class OKR extends Model
{
    protected $guarded = ['id'];
    protected $table = '_o_k_r';

    public function User(){
        return $this->belongsto('App\EloquentModel\User.php');
    }
}
