<?php namespace App\Http\Controllers\Admin;

use App\Entrydate;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SaveEntrydateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class EntryDatesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $entrydates = Entrydate::all();
        return view('admin.entrydates.index', compact('entrydates'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('admin.entrydates.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SaveEntrydateRequest $request)
	{
        Entrydate::create($request->all());
        return redirect()->route('admin.entrydates.index');
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
        $entrydate = Entrydate::find($id);
        return view('admin.entrydates.edit', compact('entrydate'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(SaveEntrydateRequest $request, $id)
	{
        $entrydate = Entrydate::find($id);
        $entrydate->update($request->all());
        return redirect()->route('admin.entrydates.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $entrydate = Entrydate::find($id);
        $entrydate->delete();
        return redirect()->route('admin.entrydates.index');
	}

    public function calculate(){
        return view('admin.entrydates.calculate.index');
    }

    public function handleCalculate(){
        $date = Input::get('entrydate');

        $entrydate = Entrydate::orderBy('entrydate', 'desc')->where('birthday', '<', $date)->first();


        return view('admin.entrydates.calculate.show', compact('date', 'entrydate'));
    }

}
