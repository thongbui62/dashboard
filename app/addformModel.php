<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addformModel extends Model
{
    protected $table='form';
    protected $fillable=['name','des','id'];
    public function element()
    {
    	return $this->hasMany('App\addelementformModel','id_form');
    }
}
