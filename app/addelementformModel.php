<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addelementformModel extends Model
{
    protected $table='element_form';
    protected $fillable=['name_input','type_input','place_input','id_form'];
    public function form()
    {
    	return $this->belongsTo('App\addformModel');
    }
}
