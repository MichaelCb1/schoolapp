<?php

use App\Entrydate;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EntrydateTableSeeder extends Seeder {


	public function run()
	{
		DB::table('entrydates')->delete();

        Entrydate::create([
            'birthday' => '2014-11-29',
            'entrydate' => '2017-05-29'
        ]);

        Entrydate::create([
            'birthday' => '2014-10-18',
            'entrydate' => '2017-04-18'
        ]);

        Entrydate::create([
            'birthday' => '2014-09-06',
            'entrydate' => '2017-03-06'
        ]);

        Entrydate::create([
            'birthday' => '2014-08-01',
            'entrydate' => '2017-02-01'
        ]);

        Entrydate::create([
            'birthday' => '2014-07-09',
            'entrydate' => '2017-01-09'
        ]);

        Entrydate::create([
            'birthday' => '2014-05-07',
            'entrydate' => '2016-11-07'
        ]);

        Entrydate::create([
            'birthday' => '2014-03-01',
            'entrydate' => '2016-09-01'
        ]);

        Entrydate::create([
            'birthday' => '2013-11-09',
            'entrydate' => '2016-05-09'
        ]);

        Entrydate::create([
            'birthday' => '2013-10-11',
            'entrydate' => '2016-04-11'
        ]);

        Entrydate::create([
            'birthday' => '2013-08-15',
            'entrydate' => '2016-02-15'
        ]);

        Entrydate::create([
            'birthday' => '2013-08-01',
            'entrydate' => '2016-02-01'
        ]);

        Entrydate::create([
            'birthday' => '2013-07-04',
            'entrydate' => '2016-01-04'
        ]);

        Entrydate::create([
            'birthday' => '2013-05-09',
            'entrydate' => '2015-11-09'
        ]);

        Entrydate::create([
            'birthday' => '2013-03-01',
            'entrydate' => '2015-09-01'
        ]);

        Entrydate::create([
            'birthday' => '2012-11-18',
            'entrydate' => '2015-05-18'
        ]);

        Entrydate::create([
            'birthday' => '2012-10-20',
            'entrydate' => '2015-04-20'
        ]);

        Entrydate::create([
            'birthday' => '2012-08-23',
            'entrydate' => '2015-02-23'
        ]);


	}

}
