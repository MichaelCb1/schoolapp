<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SaveZipcodeRequest;
use App\Zipcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ZipCodesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $zipcodes = Zipcode::all();
        return view('admin.zipcodes.index', compact('zipcodes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('admin.zipcodes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SaveZipcodeRequest $request)
	{
    Zipcode::create($request->all());
    return redirect()->route('admin.zipcodes.index');
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
        $zipcode = Zipcode::find($id);
        return view('admin.zipcodes.edit', compact('zipcode'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(SaveZipcodeRequest $request, $id)
	{
		$zipcode = Zipcode::find($id);
        $zipcode->update($request->all());
        return redirect()->route('admin.zipcodes.index');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$zipcode = Zipcode::find($id);
        $zipcode->delete();
        return redirect()->route('admin.zipcodes.index');
	}

}
