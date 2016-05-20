<?php namespace App\Http\Controllers\Admin;

use App\Entrydate;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SaveSubscriptionRequest;
use App\Region;
use App\Subscription;
use App\School;
use App\Zipcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SubscriptionsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subscriptions = Subscription::all();
        $schools = School::all();
        $zipcodes = Zipcode::all();

        return view('admin.subscriptions.index', compact('subscriptions','schools', 'zipcodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $request
     * @return Response
     */
    public function store(SaveSubscriptionRequest $request)
    {
        $date = $request->get('birthday');
        $school_id = $request->get('school_id');
        $school = School::find($school_id);

        $entrydate = Entrydate::orderBy('entrydate', 'desc')->where('birthday', '<', $date)->first();

        $subscription = $request->all();
        $subscription['entrydate_id'] =  $entrydate->id;
        Subscription::create($subscription);

        return redirect()->route('show', compact('entrydate', 'school'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $subscriptions = Subscription::find($id);
        return view('admin.subscriptions.show', compact('subscriptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $schools = School::all();
        $subscription = Subscription::find($id);

        foreach(Entrydate::all() as $entrydate){
            $entrydates[$entrydate->id] = date("d"."-"."m"."-"."Y",strtotime($entrydate->entrydate));
        }

        return view('admin.subscriptions.edit', compact('subscription', 'schools', "entrydates"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(SaveSubscriptionRequest $request, $id)
    {
        $subscription = Subscription::find($id);
        $subscription->update($request->all());
        return redirect()->route('admin.subscriptions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $subscriptions = Subscription::find($id);
        $subscriptions->delete();
        return redirect()->route('admin.subscriptions.index');
    }

}
