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
		$item = new Item;
		$item -> name=Input::get('name');
		$item -> os_date=Input::get('os_date');
		$item -> number=Input::get('number');
		//$item -> os_view=Input::get('os_view');
		$item -> okof=Input::get('okof');
		$item->carrying_amount=Input::get('carrying_amount');
		$item->financing_source=Input::get('financing_source');
		$item->additional_field=Input::get('additional_field');
		$item -> document_id = $id;
		$item->save();
		$variable = new Variable;
		$variable -> residual_value = Input::get('residual_value');
		$variable -> monthly_rate = Input::get('monthly_rate');
		$variable -> useful_life = Input::get('useful_life');
		$item->variable()->save($variable);
		return Redirect::action('DocumentsController@getView',[$item->document_id]);
	}
	if($type=='buildings'){
		$item = new Item;
		$item -> name=Input::get('name');
		$item -> os_date=Input::get('os_date');
		$item -> number=Input::get('number');
		//$item -> os_view=Input::get('os_view');
		$item -> okof=Input::get('okof');
		$item->carrying_amount=Input::get('carrying_amount');
		$item->financing_source=Input::get('financing_source');
		$item->additional_field=Input::get('additional_field');
		$item -> document_id = $id;
		$item->save();
		$variable = new Variable;
		$variable -> residual_value = Input::get('residual_value');
		$variable -> monthly_rate = Input::get('monthly_rate');
		$variable -> useful_life = Input::get('useful_life');
		$item->variable()->save($variable);
		$building=new Building;
		$building->appointment=Input::get('appointment');
		$building->wall_material=Input::get('wall_material');
		$building->date_construction=Input::get('date_construction');
		$building->floors=Input::get('floors');
		$item->building()->save($building);
		$address=new Address;
		$address->state=Input::get('state');
		$address->district=Input::get('district');
		$address->city=Input::get('city');
		$address->street=Input::get('street');
		$address->building_number=Input::get('building_number');
		$address->building_number_2=Input::get('building_number_2');
		$item->address()->save($address);
		return Redirect::action('DocumentsController@getView',[$item->document_id]);
	}
	if($type=='parcels'){
		$item=new Item;
		$item -> name=Input::get('name');
		$item -> os_date=Input::get('os_date');
		$item -> number=Input::get('number');
		$item->carrying_amount=Input::get('carrying_amount');
		$item->financing_source=Input::get('financing_source');
		$item->additional_field=Input::get('additional_field');
		$item -> document_id = $id;
		$item->save();
		$parcel=new Parcel;
		$parcel->cadastral=Input::get('cadastral');
		$parcel->assigning_land=Input::get('assigning_land');
		$parcel->area=Input::get('area');
		$item->parcel()->save($parcel);
		$address=new Address;
		$address->state=Input::get('state');
		$address->district=Input::get('district');
		$address->city=Input::get('city');
		$address->street=Input::get('street');
		$address->building_number=Input::get('building_number');
		$address->building_number_2=Input::get('building_number_2');
		$item->address()->save($address);
		return Redirect::action('DocumentsController@getView',[$item->document_id]);
	}



}
	public function getView($id){
		$item=Item::find($id);
		$document=Item::find($id)->document();
		$type=$item->document->os_type;
		switch($type){
			case 'movables'||'value_movables':
				$variable=Item::find($id)->variable();
				return View::make('items.view', array('item'=>$item,'document'=>$document, 'variable'=>$variable));
				break;
			case 'buildings':
				$variable=Item::find($id)->variable();
				$building=Item::find($id)->building();
				$address=Address::find($id)->address();
				return View::make('items.view', array('item'=>$item,'document'=>$document, 'building'=>$building, 'address'=>$address, 'variable'=>$variable));
			break;
			case 'parcels':
				$parcel=Item::find($id)->parcel;
				$address=Address::find($id)->address();
				return View::make('items.view', array('item'=>$item,'document'=>$document, 'parcel'=>$parcel, 'address'=>$address));
			break;
			default:
				return View::make('hello');
		}
	}
	public function getDelete($id){
		$item=Item::find($id);
		$document=Item::find($id)->document();
		$type=$item->document->os_type;
		switch($type){
			case 'buildings':
				$variable=Item::find($id)->variable();
				$building=Item::find($id)->building();
				$address=Item::find($id)->address();
				$variable->delete();
				$address->delete();
				$building->delete();
				$item->delete();
				return Redirect::action('DocumentsController@getView', [$item->document->id]);
				break;
			case 'parcels':
				$parcel=Item::find($id)->parcel();
				$address=Item::find($id)->address();
				$address->delete();
				$parcel->delete();
				return Redirect::action('DocumentsController@getView', [$item->document->id]);
			break;
			case 'movables'||'value_movables':
				$variable=Item::find($id)->variable();
				$variable->delete();
				$item->delete();
				return Redirect::action('DocumentsController@getView', [$item->document->id]);
				break;
		}

	}
	public function getEdit($id){
		$item=Item::find($id);
		$document=Item::find($id)->document();
		$type=$item->document->os_type;
		switch($type){
			case 'movables'||'value_movables':
				$variable=Item::find($id)->variable();
				return View::make('items.edit', array('item' => $item,'document'=>$document, 'variable'=>$variable));
			break;
			case 'buildings':
				$variable=Item::find($id)->variable();
				$building=Item::find($id)->building();
				$address=Address::find($id)->address();
				return View::make('items.edit', array('item' => $item,'document'=>$document, 'building'=>$building,'variable'=>$variable,'address'=>$address));
			break;
			case 'parcels':
				$parcel=Item::find($id)->parcel;
				$address=Address::find($id)->address();
				return View::make('items.edit', array('item' => $item,'document'=>$document, 'parcel'=>$parcel,'address'=>$address));
			break;
		}

	}
	public function postUpdate($id){
		$item=Item::find($id);
		$document=Item::find($id)->document();
		$type=$item->document->os_type;
		if(($type=='movables')||($type=='value_movables')){
			$item -> name=Input::get('name');
			$item -> os_date=Input::get('os_date');
			$item -> number=Input::get('number');
			$item -> os_view=Input::get('os_view');
			$item -> okof=Input::get('okof');
			$item->carrying_amount=Input::get('carrying_amount');
			$item->financing_source=Input::get('financing_source');
			$item->additional_field=Input::get('additional_field');
			$item->save();
			$variable=Item::find($id)->variable();
			$variable -> residual_value = Input::get('residual_value');
			$variable -> monthly_rate = Input::get('monthly_rate');
			$variable -> useful_life = Input::get('useful_life');
			$item->variable->save();
			return Redirect::action('DocumentsController@getView',[$item->document_id]);
		}
		if($type=='buildings'){
			$variable=Item::find($id)->variable();
			$building=Item::find($id)->building();
			$address=Item::find($id)->address();
			$item -> name=Input::get('name');
			$item -> os_date=Input::get('os_date');
			$item -> number=Input::get('number');
			$item -> os_view=Input::get('os_view');
			$item -> okof=Input::get('okof');
			$item->carrying_amount=Input::get('carrying_amount');
			$item->financing_source=Input::get('financing_source');
			$item->additional_field=Input::get('additional_field');
			$item->save();
			$variable -> residual_value = Input::get('residual_value');
			$variable -> monthly_rate = Input::get('monthly_rate');
			$variable -> useful_life = Input::get('useful_life');
			$item->variable->save();
			$building->appointment=Input::get('appointment');
			$building->wall_material=Input::get('wall_material');
			$building->date_construction=Input::get('date_construction');
			$building->floors=Input::get('floors');
			$item->building->save();
			$address->state=Input::get('state');
			$address->district=Input::get('district');
			$address->city=Input::get('city');
			$address->street=Input::get('street');
			$address->building_number=Input::get('building_number');
			$address->building_number_2=Input::get('building_number_2');
			$item->address->save();
			return Redirect::action('DocumentsController@getView',[$item->document_id]);
		}
		if($type=='parcels'){
			$parcel=Item::find($id)->parcel();
			$address=Item::find($id)->address();
			$item -> name=Input::get('name');
			$item -> os_date=Input::get('os_date');
			$item -> number=Input::get('number');
			$item->carrying_amount=Input::get('carrying_amount');
			$item->financing_source=Input::get('financing_source');
			$item->additional_field=Input::get('additional_field');
			$item->save();
			$parcel->cadastral=Input::get('cadastral');
			$parcel->assigning_land=Input::get('assigning_land');
			$parcel->area=Input::get('area');
			$item->parcel->save();
			$address->state=Input::get('state');
			$address->district=Input::get('district');
			$address->city=Input::get('city');
			$address->street=Input::get('street');
			$address->building_number=Input::get('building_number');
			$address->building_number_2=Input::get('building_number_2');
			$item->address->save();
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