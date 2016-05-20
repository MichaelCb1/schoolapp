<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Region;
use App\School;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscriptionsController extends Controller {

    public function index()
    {
        // return view('subscriptions.index')->with('schools', School::all());
        $schools = School::all();
        $regions = Region::all(['name']);

        return view('subscriptions.index', compact('schools', 'regions'));
    }

    public function show()
    {
        $entrydate = Session::get('entrydate');
        $school = Session::get('school');
        return view('subscriptions.show', compact('entrydate', 'school'));
    }

}
