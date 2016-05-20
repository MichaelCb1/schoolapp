<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SaveSchoolRequest;
use App\Http\Requests\SaveSchoolRequestRequest;
use App\Region;
use App\School;
use App\Zipcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class Schoolscontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $schools = School::all();
        return view('admin.schools.index', compact('schools'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        foreach(Zipcode::all() as $zipcode){
            $zipcodes[$zipcode->id] = $zipcode->zipcode . ' ' . $zipcode->town;
        }

        foreach(Region::all() as $region){
            $regions[$region->id] = $region->name;
        }
        return view('admin.schools.create', compact("zipcodes", "regions"));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SaveSchoolRequest $request)
	{
        School::create($request->all());
        return redirect()->route('admin.schools.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $school = School::find($id);
        foreach(Zipcode::all() as $zipcode){
            $zipcodes[$zipcode->id] = $zipcode->zipcode . ' ' . $zipcode->town;
        }

        foreach(Region::all() as $region){
            $regions[$region->id] = $region->name;
        }

        return view('admin.schools.edit', compact('school', "zipcodes", "regions"));

	}

    /**
     * Update the specified resource in storage.
     *
     * @param $request
     * @param  int $id
     * @return Response
     */
	public function update(SaveSchoolRequest $request, $id)
	{
        $school = School::find($id);
        $school->update($request->all());
        return redirect()->route('admin.schools.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $schools = School::find($id);
        $schools->delete();
        return redirect()->route('admin.schools.index');
	}

}
