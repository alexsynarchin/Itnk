<?php

class OsMovablesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /os_movables
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
public function getAdd($id){
$document=Document::find($id);
return View::make('os.movable.add',['document' => $document]);
}
public function postAdd($id){
	$os_movable = Os_movable::create(Input::all());
	$os_movable -> document_id = $id;
	$os_movable->save();
	return Redirect::action('DocumentsController@getView',[$os_movable->document_id]);
}
	/**
	 * Show the form for creating a new resource.
	 * GET /os_movables/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /os_movables
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /os_movables/{id}
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
	 * GET /os_movables/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /os_movables/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /os_movables/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}