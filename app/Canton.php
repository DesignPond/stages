<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    protected $table = 'cantons';
    protected $fillable = ['title','slug'];
}
