<?php

use Illuminate\Database\Seeder;
use App\User, App\Category, App\Question, App\Reply, App\Like;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
        factory(Category::class, 6)->create();
        factory(Question::class, 60)->create();
        factory(Reply::class, 160)->create();
        factory(Like::class, 200)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
