<?php

use App\School;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SchoolTableSeeder extends Seeder {


	public function run()
	{
		DB::table('schools')->delete();

        School::create([
            'name' => 'De Winge',
            'phonenumber' => '016634532',
            'website' => 'http://www.bsdewinge.be',
            'address' => 'Halensebaan 16',
            'town_id' => '8',
            'region_id' => '1',
            'url_small' => 'logos/winge-klein.png',
            'url_big' => 'logos/BS-DE-WINGE.jpg'
        ]);

        School::create([
            'name' => 'Dolfijn',
            'phonenumber' => '016509100',
            'website' => 'http://www.bsdolfijn.be',
            'address' => 'Ebdries 11',
            'town_id' => '6',
            'region_id' => '1',
            'url_small' => 'logos/dolfijn-klein.png',
            'url_big' => 'logos/BS-DOLFIJN.jpg'
        ]);

        School::create([
            'name' => 'Station',
            'phonenumber' => '013554439',
            'website' => 'http://www.bsstation.be',
            'address' => 'Sint-Jacobsplein 11',
            'town_id' => '3',
            'region_id' => '2',
            'url_small' => 'logos/station-klein.png',
            'url_big' => 'logos/BS-STATION.jpg'
        ]);

        School::create([
            'name' => 'Zonnedorp',
            'phonenumber' => '016689820',
            'website' => 'http://www.bszonnedorp.be',
            'address' => 'Bogaardenlaan 8',
            'town_id' => '1',
            'region_id' => '1',
            'url_small' => 'logos/zonnedorp-klein.png',
            'url_big' => 'logos/BS-ZONNEDORP.jpg'
        ]);






	}

}
