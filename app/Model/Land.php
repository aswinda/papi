<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Land extends Model {
	
	protected $table = 'lands';

	public static function listLands()
	{
		// group id 5, user customer tidak ditampilkan
		$list = DB::select( DB::raw("SELECT 
					id, name, description, wide, price
				FROM
					lands
				 ")
		);
		

		return $list;
	}

	public static function listLandsWithImage($page = 1)
	{
		$offset = 4*($page-1);

		$list = DB::select( DB::raw(
				"SELECT 
					lands.id,
				    lands.name,
				    description,
				    path
				FROM 
					lands, 
					images, 
					images_paths 
				WHERE 
					lands.image_id = images.id AND
					images.image_path_id = images_paths.id
				GROUP BY lands.id
				LIMIT 4
				OFFSET :offset
					"), 

			array(
				"offset"	=> $offset
			));

		

		return $list;
	}

	public static function detailLandsWithImage($id)
	{
		$list = DB::select( DB::raw(
				"SELECT 
					lands.id,
				    lands.name,
				    wide,
				    price,
				    description,
				    path,
				    districts.id AS district_id,
				    provinces.id AS province_id,
				    districts.name AS district_name,
				    provinces.name AS province_name
				FROM 
					lands, 
					images, 
					images_paths,
					districts,
					provinces 
				WHERE 
					lands.id = :id AND
					lands.image_id = images.id AND
					images.image_path_id = images_paths.id AND
					lands.district_id = districts.id AND
					districts.province_id = provinces.id
				GROUP BY lands.id
					"), 

			array(
				"id"	=> $id
			));

		

		return $list[0];
	}

	public static function listLandsWithId($user_id)
	{

		$list = DB::select( DB::raw(
				"SELECT 
					count(*) as jumlah
				FROM 
					lands 
				WHERE 
					lands.id = :id
					"), 

			array(
				"id"		=> $user_id
			));

		

		return $list[0]->jumlah;
	}

	public static function landOwnerDetailLandsWithImage($id)
	{
		$list = DB::select( DB::raw(
				"SELECT 
					lands.id,
				    lands.name,
				    districts.name as district_name,
				    provinces.name as provinces_name,
				    lands.wide as wide_land,
				    lands.description,
				    lands.price as price_land,
				    path
				FROM
					districts,
					provinces,
					lands, 
					images, 
					images_paths 
				WHERE
					districts.id = lands.district_id AND
					districts.province_id = provinces.id AND
					lands.id = :id AND
					lands.image_id = images.id AND
					images.image_path_id = images_paths.id
				GROUP BY lands.id
					"), 

			array(
				"id"	=> $id
			));

		
		//print_r($list);
		//exit;
		return $list[0];
	}

	public static function landOwnerListLandsWithImage($page, $user_id)
	{
		$offset = 4*($page-1);

		$list = DB::select( DB::raw(
				"SELECT 
					lands.id,
				    lands.name,
				    description,
				    path
				FROM 
					lands, 
					images, 
					images_paths 
				WHERE 
					lands.user_id = :id AND
					lands.image_id = images.id AND
					images.image_path_id = images_paths.id
				GROUP BY lands.id
				LIMIT 4
				OFFSET :offset
					"), 

			array(
				"id"		=> $user_id,
				"offset"	=> $offset
			));

		

		return $list;
	}

	public static function landUpdates($id)
	{
		$list = DB::select( DB::raw(
				"SELECT 
					lands_transactions.id, 
					profiles.name AS user_name,
				    lands_transactions.wide,
				    lands_transactions.price
				FROM
					lands_transactions, 
					lands,
					users,
					profiles
				WHERE
					lands.id = :id AND
					lands_transactions.land_id = lands.id AND
					lands_transactions.user_id = users.id AND
					users.profile_id = profiles.id
					"), 

			array(
				"id"	=> $id
			));

		
		//print_r($list);
		//exit;
			return $list;

	}
}
