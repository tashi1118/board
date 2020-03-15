<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User([
            'name' => '吉田直志',
            'email' => 'tadashi@gmail.com',
            'password' =>  Hash::make('test123'),
            ]);
        $user->save();

        factory(App\User::class, 39)->create();
    }
}
