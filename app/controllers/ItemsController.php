<?php

class ItemsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /items
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
public function getAdd($id){
$document=Document::find($id);
return View::make('items.add',['document' => $document]);
}
public function postAdd($id){
	$document=Document::find($id);
	$type=$document->os_type;
	if(($type=='movables')||($type=='value_movables')){
		$item = Item::create(Input::all());
		$item -> document_id = $id;
		$item->save();
		return Redirect::action('DocumentsController@getView',[$item->document_id]);
	}
	if($type=='buildings'){
		$item=new Item;
		$item -> name=Input::get('name');
		$item -> number=Input::get('number');
		$item -> os_view=Input::get('os_view');
		$item -> okof=Input::get('okof');
		$item->carrying_amount=Input::get('carrying_amount');
		$item->carrying_amount=Input::get('financing_source');
		$item->carrying_amount=Input::get('additional_field');
		$item -> document_id = $id;
		$item->save();
		$building=new Building;
		$building->appointment=Input::get('appointment');
		$building->wall_material=Input::get('wall_material');
		$building->date_construction=Input::get('date_construction');
		$building->floors=Input::get('floors');
		$item->building()->save($building);
		return Redirect::action('DocumentsController@getView',[$item->document_id]);
	}
	if($type=='parcels'){
		$item=new Item;
		$item -> name=Input::get('name');
		$item -> number=Input::get('number');
		$item->carrying_amount=Input::get('carrying_amount');
		$item->carrying_amount=Input::get('financing_source');
		$item->carrying_amount=Input::get('additional_field');
		$item -> document_id = $id;
		$item->save();
		$parcel=new Parcel;
		$parcel->cadastral=Input::get('cadastral');
		$parcel->assigning_land=Input::get('assigning_land');
		$parcel->area=Input::get('area');
		$item->parcel()->save($parcel);
		return Redirect::action('DocumentsController@getView',[$item->document_id]);
	}



}
	/**
	 * Show the form for creating a new resource.
	 * GET /items/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /items
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /items/{id}
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
	 * GET /items/{id}/edit
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
	 * PUT /items/{id}
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
	 * DELETE /items/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}