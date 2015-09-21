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
		return View::make('documents.index')->with('documents', $documents);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /documents/create
	 *
	 * @return Response
	 */
	public function getAdd(){
		return View::make('documents.add');
	}
	public function  postAdd(){
		$document = Document::create(Input::all());
		$document->user_id = Auth::user()->id;
		$document->save();
		return Redirect::action('DocumentsController@getView', [$document->id]);
	}
	public function getDelete($id) {
		$document = Document::find($id);
		$document->delete();
		return Redirect::to('documents');
	}
	public function getView($id){
		$document = Document::find($id);
		$type=$document->os_type;
		switch($type){
			case 'movables'||'value_movables':
				$items = Document::find($id)->items;

		}
		// Если такого документа нет, то вернем пользователю ошибку 404 - Не найдено
		if (!$document) {
			App::abort(404);
		}
		return View::make('documents/view', array( 'items' =>$items, 'document' => $document ));
	}
	public  function getEdit($id){
		$document = Document::find($id);
		// show the edit form and pass the nerd
		return View::make('documents.edit', array('document' => $document));
	}
	public function postUpdate($id){
		$document=Document::find($id);
		$document->document_date = Input::get('document_date');
		$document->actual_date = Input::get('actual_date');
		$document->save();

		return Redirect::action('DocumentsController@getView', [$document->id]);
	}
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
	 * GET documents/{id}
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
	 * DELETE /unp_documents/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}