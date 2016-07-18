<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class LandTransaction extends Model {
	
	protected $table = 'lands_transactions';

	public static function listLandsOwned($user_id, $page)
	{
		$offset = 4*($page-1);

		$list = DB::select( DB::raw(
				"SELECT 
					lands_transactions.id,
				    lands.name,
				    description,
				    path
				FROM 
					lands_transactions,
					lands, 
					images, 
					images_paths 
				WHERE 
					lands_transactions.user_id = :user_id AND
					lands_transactions.land_id = lands.id AND
					lands.image_id = images.id AND
					images.image_path_id = images_paths.id
				GROUP BY lands_transactions.id
				LIMIT 4
				OFFSET :offset
					"), 

			array(
				"user_id"	=> $user_id,
				"offset"	=> $offset
			));

		

		return $list;
	}

	public static function landsOwnedCount($user_id)
	{

		$list = DB::select( DB::raw(
				"SELECT 
					COUNT(lands_transactions.id) AS jumlah
				FROM 
					lands_transactions
				WHERE 
					lands_transactions.user_id = :user_id
					"), 

			array(
				"user_id"	=> $user_id
			));

		

		return $list[0]->jumlah;
	}

	public static function detailLandsOwnedWithImage($id)
	{
		$list = DB::select( DB::raw(
				"SELECT 
					lands_transactions.id,
				    lands.name,
				    lands_transactions.wide,
				    lands_transactions.price,
				    description,
				    path,
				    lands_transactions.status,
				    districts.name AS district_name,
				    provinces.name AS province_name
				FROM 
					lands_transactions,
					lands, 
					images, 
					images_paths,
					districts,
					provinces 
				WHERE 
					lands_transactions.id = :id AND
					lands_transactions.land_id = lands.id AND
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

	public static function listLandTransactions()
	{
		$list = DB::select( DB::raw(
				"SELECT 
					lands_transactions.id,
					profiles.name AS user_name,
					lands.name AS land_name,
					lands_transactions.wide,
					lands_transactions.price,
					lands_transactions.status,
					lands_transactions.created_at
				FROM 
					lands_transactions,
					lands,
					users,
					profiles
				WHERE 
					lands_transactions.land_id = lands.id AND
					lands_transactions.user_id = users.id AND
					users.profile_id = profiles.id
					"), 

			array(
			));

		

		return $list;
	}

	public static function detailLandsWithImage($id)
	{
		$list = DB::select( DB::raw(
				"SELECT 
					lands_transactions.id,
					profiles.name AS user_name,
					lands.name AS land_name,
					lands_transactions.wide,
					lands_transactions.price,
					lands_transactions.status,
					lands_transactions.created_at
				FROM 
					lands_transactions,
					lands,
					users,
					profiles
				WHERE
					lands_transactions.id = :id AND 
					lands_transactions.land_id = lands.id AND
					lands_transactions.user_id = users.id AND
					users.profile_id = profiles.id
					"), 

			array(
				"id"	=> $id
			));

		

		return $list[0];
	}
}
