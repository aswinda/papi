<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class SeedTransaction extends Model {
	
	protected $table = 'seeds_transactions';

	public static function listSeedsOwned($user_id, $page)
	{
		$offset = 4*($page-1);

		$list = DB::select( DB::raw(
				"SELECT 
					seeds_transactions.id,
				    seeds.name,
				    description,
				    path
				FROM 
					seeds_transactions,
					seeds, 
					images, 
					images_paths 
				WHERE 
					seeds_transactions.user_id = :user_id AND
					seeds_transactions.seed_id = seeds.id AND
					seeds.image_id = images.id AND
					images.image_path_id = images_paths.id
				GROUP BY seeds_transactions.id
				LIMIT 4
				OFFSET :offset
					"), 

			array(
				"user_id"	=> $user_id,
				"offset"	=> $offset
			));

		

		return $list;
	}

	public static function seedsOwnedCount($user_id)
	{

		$list = DB::select( DB::raw(
				"SELECT 
					COUNT(seeds_transactions.id) AS jumlah
				FROM 
					seeds_transactions
				WHERE 
					seeds_transactions.user_id = :user_id
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
}
