<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;
use App\Models\Picture;

class Picture extends Model {

	protected $table = 'pictures';
	
	public function gallery()
	{
		return $this->belongsToMany('App\Models\Gallery')->withTimestamps();
	}

}
