<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SaveRegionRequest;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RegionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$regions = Region::all();
        return view('admin.regions.index', compact('regions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('admin.regions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SaveRegionRequest $request)
	{
        Region::create($request->all());
        return redirect()->route('admin.regions.index');
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
        $regions = Region::find($id);
        return view('admin.regions.edit', compact('regions'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $regions = Region::find($id);
        $regions->update(Input::all());
        return redirect()->route('admin.regions.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $regions = Region::find($id);
        $regions->delete();
        return redirect()->route('admin.regions.index');
	}

}
