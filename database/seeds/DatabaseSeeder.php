<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class,5)->create();        
        factory(App\Model\Agent::class,20)->create();
        factory(App\Model\Category::class,5)->create();
        factory(App\Model\Property::class,50)->create();
        factory(App\Comment::class,300)->create();
        factory(App\Model\Reply::class,100)->create();

    }
}
