<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Seed extends Model {
	
	protected $table = 'seeds';

	public static function listSeeds()
	{
		// group id 5, user customer tidak ditampilkan
		$list = DB::select( DB::raw("SELECT 
					*
				FROM
					seeds
				 ")
		);
		

		return $list;
	}

	public static function listSeedsWithImage($page = 1)
	{
		$offset = 4*($page-1);

		$list = DB::select( DB::raw(
				"SELECT 
					seeds.id,
				    seeds.name,
				    description,
				    path
				FROM 
					seeds, 
					images, 
					images_paths 
				WHERE 
					seeds.image_id = images.id AND
					images.image_path_id = images_paths.id
				GROUP BY seeds.id
				LIMIT 4
				OFFSET :offset
					"), 

			array(
				"offset"	=> $offset
			));

		

		return $list;
	}

	public static function detailSeedsWithImage($id)
	{
		$list = DB::select( DB::raw(
				"SELECT 
					seeds.id,
				    seeds.name,
				    stock,
				    price,
				    description,
				    path
				FROM 
					seeds, 
					images, 
					images_paths 
				WHERE 
					seeds.id = :id AND
					seeds.image_id = images.id AND
					images.image_path_id = images_paths.id
				GROUP BY seeds.id
					"), 

			array(
				"id"	=> $id
			));

		

		return $list[0];
	}

}
