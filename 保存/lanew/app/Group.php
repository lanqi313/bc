<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

	protected  $fillable = array('name','id');
	public   function members()
		{
	         		return $this->hasMany('App\Member');
		}

}
