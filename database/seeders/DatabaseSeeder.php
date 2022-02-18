<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Catigory;
use App\Models\Post;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {

		$user = User::factory()->create([
			'name' => 'Jhon Doe'
		]);

		Post::factory(5)->create([
			'user_id' => $user->id
		]);


	}
}
