<?php

use App\User;
use App\Zipcode;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ZipcodeTableSeeder extends Seeder {


	public function run()
	{
		DB::table('zipcodes')->delete();

        Zipcode::create([
            'town' => 'Aarschot',
            'zipcode' => 'B-3200'
        ]);

        Zipcode::create([
            'town' => 'Aarschot (Ourodenberg)',
            'zipcode' => 'B-3200'
        ]);

        Zipcode::create([
            'town' => 'Diest',
            'zipcode' => 'B-3290'
        ]);

        Zipcode::create([
            'town' => 'Ham',
            'zipcode' => 'B-3945'
        ]);

        Zipcode::create([
            'town' => 'Paal',
            'zipcode' => 'B-3583'
        ]);

        Zipcode::create([
            'town' => 'Rillaar',
            'zipcode' => 'B-3203'
        ]);

        Zipcode::create([
            'town' => 'Tessenderlo',
            'zipcode' => 'B-3980'
        ]);

        Zipcode::create([
            'town' => 'Tielt-winge',
            'zipcode' => 'B-3390'
        ]);



	}

}
