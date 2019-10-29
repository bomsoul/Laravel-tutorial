<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;

    protected $fillable = ['subj_id','subj_name','lec_credit','lab_credit','prerequisite','user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
