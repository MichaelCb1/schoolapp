<?php

use App\Subscription;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SubscriptionTableSeeder extends Seeder {


	public function run()
	{
		DB::table('subscriptions')->delete();

        Subscription::create([
            'parent_firstname' => 'Piet',
            'parent_lastname' => 'Den Boer',
            'email' => 'piet.denboer@gmail.com',
            'child_firstname' => 'Jef',
            'child_lastname' => 'Den Boer',
            'birthday' => '2014-11-21',
            'entrydate_id' =>'2',
            'school_id' => '1'

        ]);



	}

}
