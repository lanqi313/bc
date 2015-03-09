<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {

	protected $fillable = array('nick', 'province', 'gender','country','city','id','gin_id');

}

