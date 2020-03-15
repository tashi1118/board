<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new App\Category([
            'name' => '政治',
          ]);
        $category->save();

        $category = new App\Category([
            'name' => '経済',
          ]);
        $category->save();

        $category = new App\Category([
            'name' => 'エンタメ',
          ]);
        $category->save();

        $category = new App\Category([
            'name' => '技術',
          ]);
        $category->save();

        $category = new App\Category([
          'name' => 'スポーツ',
        ]);
        $category->save();

        $category = new App\Category([
          'name' => '国内',
        ]);
        $category->save();

        $category = new App\Category([
          'name' => '国際',
        ]);
        $category->save();

        $category = new App\Category([
          'name' => 'IT',
        ]);
        $category->save();

        $category = new App\Category([
          'name' => '化学',
        ]);
        $category->save();

        $category = new App\Category([
          'name' => 'ライフ',
        ]);
        $category->save();
    }
}
