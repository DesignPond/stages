<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    protected $fillable = ['user_id','title','description','valid_until','type_id','remunere'];
    protected $dates = ['valid_until'];

    public function getBadgeAttribute()
    {
        if($this->type_id == 1){
            return 'success';
        }

        if($this->type_id == 2){
            return 'primary';
        }

        if($this->type_id == 3){
            return 'info';
        }

        return 'warning';
    }

    public function scopeType($query,$type_id)
    {
        if($type_id) $query->where('type_id', '=', $type_id);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
