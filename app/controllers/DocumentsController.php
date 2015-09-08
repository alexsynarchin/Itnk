<?php

class DocumentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /documents
	 *
	 * @return Response
	 */
	public function index()
	{
		$documents = Document::get();
		return View::make('documents.documents')->with('documents', $documents);
	}
	public function getAdd() {
		return View::make('documents.add');
	}
	public function postAdd() {
		$document = new Document();
		$document->number = Input::get('number');
		$document->document_date = Input::get('document_date');
		$document->actual_date = Input::get('actual_date');
		$document->user_id = Auth::user()->id;
		$document->save();
		return Redirect::route('documents');
	}
	/**
	 * Show the form for creating a new resource.
	 * GET /documents/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /documents
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /documents/{id}
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
	 * GET /documents/{id}/edit
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
	 * PUT /documents/{id}
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
	 * DELETE /documents/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}