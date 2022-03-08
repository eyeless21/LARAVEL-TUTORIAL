<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      User::truncate();
      Post::truncate();
      Category::truncate();

      $user = User::factory()->create([
            'name' => 'Apostolos Koukounaris'
      ]);

      Post::factory(5)->create([
        'user_id' => $user->id
      ]);
}
}