<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

        User::create([
            'name' => 'leerkracht',
            'email' => 'leerkracht@example.com',
            'password' => bcrypt('leerkracht')
        ]);

        User::create([
            'name' => 'beheer',
            'email' => 'admin@example.com',
            'password' => bcrypt('reeheb')
        ]);

        User::create([
            'name' => 'jos',
            'email' => 'jos@example.com',
            'password' => bcrypt('joske')
        ]);


	}

}
