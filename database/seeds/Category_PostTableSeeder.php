<?php

use Illuminate\Database\Seeder;

class Category_PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category_Post::class, 80)->create();
    }
}
