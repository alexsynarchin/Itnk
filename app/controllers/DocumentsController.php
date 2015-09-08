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
		return View::make('documents.documents');
	}
	public function getAdd() {
		return View::make('documents.add');
	}
	public function postAdd() {
		$document = Document::create(Input::all());
		return 'Добавлен: новый документ с номером ' . $document->number;
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