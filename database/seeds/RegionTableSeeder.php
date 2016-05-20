<?php

use App\Region;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegionTableSeeder extends Seeder {


	public function run()
	{
		DB::table('regions')->delete();

        Region::create([
            'name' => 'Aarschot',
        ]);

        Region::create([
            'name' => 'Diest',
        ]);

        Region::create([
            'name' => 'Tessenderlo',
        ]);



	}

}
