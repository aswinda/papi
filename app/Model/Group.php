<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {
	
	protected $table = 'groups';

	const ADMIN = 0;
	const INVESTOR = 1;
	const LAND_OWNER = 2;

}
