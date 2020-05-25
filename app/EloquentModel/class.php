<?php

namespace App\EloquentModel;

use Illuminate\Database\Eloquent\Model;

class TitleClass extends Model
{
    protected $guarded = ['id'];
    protected $table = 'class';
}
