<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;
use App\Models\Picture;

class Gallery extends Model {

	protected $table = 'gallery';
		
	public function pictures()
	{
		return $this->belongsToMany('App\Models\Picture')->withTimestamps();
	}

}
