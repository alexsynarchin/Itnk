<?php

class OssController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /oss
	 *
	 * @return Response
	 */
	public function index()
	{
		$documents = Auth::user() -> documents;
		$i=0;
		$num =$documents->count();
		if($num == 0){
			$ids=0;
		}
		else{
			foreach($documents as $document){
				$ids[$i]=$document->id;
			}
		}
		$items=Item::where('document_id', $ids)->get();
		return View::make('items.oss')->with('items',$items);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /oss/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /oss
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /oss/{id}
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
	 * GET /oss/{id}/edit
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
	 * PUT /oss/{id}
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
	 * DELETE /oss/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}