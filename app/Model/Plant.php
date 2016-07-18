<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Plant extends Model {
	
	protected $table = 'plants';

	public static function listPlant($user_id, $page)
	{
		$offset = 4*($page-1);

		$list = DB::select( DB::raw(
				"SELECT 
					plants.id,
				    seeds.name AS seed_name,
				    lands.name AS land_name,
				    districts.name AS district_name,
				    provinces.name AS province_name,
				    path
				FROM 
					plants,
					seeds_transactions, 
					lands_transactions,
					seeds,
					lands,
					images, 
					images_paths,
					districts,
					provinces
				WHERE 
					plants.user_id = :user_id AND
					plants.seed_transaction_id = seeds_transactions.id AND
					seeds_transactions.seed_id = seeds.id AND
					seeds.image_id = images.id AND
					images.image_path_id = images_paths.id AND
					plants.land_transaction_id = lands_transactions.id AND
					lands_transactions.land_id = lands.id AND
					lands.district_id = districts.id AND
					districts.province_id = provinces.id
				GROUP BY plants.id
				LIMIT 4
				OFFSET :offset
					"), 

			array(
				"user_id"	=> $user_id,
				"offset"	=> $offset
			));

		

		return $list;
	}

	public static function plantCount($user_id)
	{

		$list = DB::select( DB::raw(
				"SELECT 
					COUNT(plants.id) AS jumlah
				FROM 
					plants
				WHERE 
					plants.user_id = :user_id
					"), 

			array(
				"user_id"	=> $user_id
			));

		

		return $list[0]->jumlah;
	}

	public static function detailSeedsOwnedWithImage($id)
	{
		$list = DB::select( DB::raw(
				"SELECT 
					seeds_transactions.id,
				    seeds.name,
				    seeds_transactions.amount,
				    seeds_transactions.price,
				    description,
				    path,
				    seeds_transactions.status
				FROM 
					seeds_transactions,
					seeds, 
					images, 
					images_paths
				WHERE 
					seeds_transactions.id = :id AND
					seeds_transactions.seed_id = seeds.id AND
					seeds.image_id = images.id AND
					images.image_path_id = images_paths.id
				GROUP BY seeds.id
					"), 

			array(
				"id"	=> $id
			));

		return $list[0];
	}

	public static function listSeedTransactions()
	{
		$list = DB::select( DB::raw(
				"SELECT 
					seeds_transactions.id,
					profiles.name AS user_name,
					seeds.name AS seed_name,
					seeds_transactions.amount,
					seeds_transactions.price,
					seeds_transactions.status,
					seeds_transactions.created_at
				FROM 
					seeds_transactions,
					seeds,
					users,
					profiles
				WHERE 
					seeds_transactions.seed_id = seeds.id AND
					seeds_transactions.user_id = users.id AND
					users.profile_id = profiles.id
					"), 

			array(
			));

		

		return $list;
	}

	public static function detailSeedsWithImage($id)
	{
		$list = DB::select( DB::raw(
				"SELECT 
					seeds_transactions.id,
					profiles.name AS user_name,
					seeds.name AS seed_name,
					seeds_transactions.amount,
					seeds_transactions.price,
					seeds_transactions.status,
					seeds_transactions.created_at
				FROM 
					seeds_transactions,
					seeds,
					users,
					profiles
				WHERE
					seeds_transactions.id = :id AND 
					seeds_transactions.seed_id = seeds.id AND
					seeds_transactions.user_id = users.id AND
					users.profile_id = profiles.id
					"), 

			array(
				"id"	=> $id
			));

		

		return $list[0];
	}

	public static function countSeed($id)
	{
		$list = DB::select( DB::raw(
				"SELECT 
					COUNT(plants.id) as jumlah
				FROM 
					plants
				WHERE
					plants.user_id = :id
					"), 

			array(
				"id"	=> $id
			));

		

		return $list[0]->jumlah;
	}

	public static function getFirstDate()
	{
		$list = DB::select( DB::raw(
				"SELECT 
					DATEDIFF(NOW(), created_at) AS diff
				FROM 
					plants
				ORDER BY created_at ASC
				LIMIT 1
					"), 

			array(
			));

		

		return $list[0]->diff;
	}

	public static function adminListPlants()
	{
		$list = DB::select( DB::raw(
				"SELECT 
					plants.id,
					profiles.name AS profile_name,
				    seeds.name AS seed_name,
				    lands.name AS land_name,
				    plants.created_at AS date
				FROM 
					plants,
					seeds_transactions, 
					lands_transactions,
					seeds,
					lands,
					users,
					profiles
				WHERE
					plants.seed_transaction_id = seeds_transactions.id AND
					seeds_transactions.seed_id = seeds.id AND
					plants.land_transaction_id = lands_transactions.id AND
					lands_transactions.land_id = lands.id AND
					plants.user_id = users.id AND
					users.profile_id = profiles.id

					"), 

			array(

			));

		

		return $list;
	}
}
