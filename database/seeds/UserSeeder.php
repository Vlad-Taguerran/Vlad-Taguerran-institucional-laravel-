<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::get();
        if($user->count() === 0){
            User::create(array(
                'email' => 'admin@adin.com',
                'name' => 'admin',
                'password' => bcrypt('testeadmin'),
                'type' => 'admin'
            ));
        }
    }
}
