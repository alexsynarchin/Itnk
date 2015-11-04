<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$organizations=Organization::get();
		return View::make('admin')->with('organizations', $organizations);
	}
	public function getOrgView($id){
		$organization=Organization::find($id);
		return View::make('admin_organization', array('organization'=>$organization));
	}
	public function getAdd(){
		return View::make('organization.add');
	}
	public  function getEdit($id){
		$organization = Organization::find($id);
		$user=Organization::find($id)->user();
		return View::make('organization.edit', array('organization' => $organization, 'user' => $user));
	}
	public function postOrgUpdate($id){
		$organization=Organization::find($id);
		$organization -> full_name = Input::get('full_name');
		$organization -> short_name = Input::get('short_name');
		$organization -> inn = Input::get('inn');
		$organization -> kpp = Input::get('kpp');
		$organization -> legal_address = Input::get('legal_address');
		$organization -> fact_address = Input::get('fact_address');
		$organization -> boss_position = Input::get('boss_position');
		$organization -> fio = Input::get('fio');
		$organization -> date = Input::get('date');
		$organization -> contract_number = Input::get('contract_number');
		$organization -> operate_foundation = Input::get('operate_foundation');
		$organization -> rs = Input::get('rs');
		$organization -> ks = Input::get('ks');
		$organization -> ls = Input::get('ls');
		$organization -> bank = Input::get('bank');
		$organization -> bik = Input::get('bik');
		$organization -> phone = Input::get('phone');
		$organization -> email = Input::get('email');
		$organization->save();
		$user=Organization::find($id)->user();
		$organization->user -> username = Input::get('username');
		$organization->user -> password = Input::get('password');
		$organization->user -> first_name = Input::get('first_name');
		$organization->user -> last_name = Input::get('last_name');
		$organization->user -> surname = Input::get('surname');
		$organization -> user->save();
		return Redirect::action('AdminController@index');
	}
	public function getOrgDocs($id){
		$organization=Organization::find($id);
		$user=Organization::find($id)->user();
		$documents=User::find($organization->user->id)->documents;
		return View::make('admin.OrgDocs',['user' =>$user, 'organization' =>$organization, 'documents' =>$documents]);
	}
	public function getDocAdd($id){
		$user_id=$id;
		return View::make('admin.AddDoc', ['user_id'=> $user_id] );
	}
	public function postDocAdd($id){
		$document = Document::create(Input::all());
		$user=User::find($id);
		$organization=User::find($id)->organization();
		$user->organization->last_document_number++;
		$user->organization->save();
		$document->document_number=$user->organization->last_document_number;
		$document->user_id = $id;
		$document->save();
		return Redirect::action('AdminController@getDocView', [$document->id]);
	}
	public function getDocView($id){
		$document = Document::find($id);
		$user =Document::find($id)->user();
		$organization_id = $document->user->organization_id;
		$organization=Organization::find($organization_id);
		$items = Document::find($id)->items;
		// Если такого документа нет, то вернем пользователю ошибку 404 - Не найдено
		if (!$document) {
			App::abort(404);
		}
		return View::make('admin.DocView', array( 'items' =>$items, 'document' => $document, 'organization' =>$organization ));
	}
	public function getDocEdit($id){
		$document = Document::find($id);
		// show the edit form and pass the nerd
		return View::make('admin.EditDoc', array('document' => $document));
	}
	public function postDocUpdate($id){
		$document=Document::find($id);
		$document->document_date = Input::get('document_date');
		$document->actual_date = Input::get('actual_date');
		$document->save();

		return Redirect::action('AdminController@getDocView', [$document->id]);
	}
	public function postImport($id){
		$document = Document::find($id);
		$type=$document->os_type;
		if(Input::hasFile('file')){
			$file=Input::file('file');
			$filename = $file->getClientOriginalName();
			$destinationPath = public_path().'/uploads/';
			Input::file('file')->move($destinationPath, $filename);
			$handle=fopen(public_path().'/uploads/'.$filename, "r");
			if ($handle !== FALSE)
			{
				if(($type=='movables')||($type=='value_movables')){
					while (($data = fgetcsv($handle, 1000, ';')) !==FALSE)
					{
						$item = new Item();
						$name = iconv("Windows-1251", "utf-8", $data[0]);
						$item->name = $name;
						$item->number=$data[1];
						$os_date = date("Y-m-d", strtotime($data[2]));
						$item -> os_date=$os_date;
						$okof=$data[5];
						$okof = str_replace(" ","",$okof);
						$item -> okof=$okof;
						$carrying_amount=$data[6];
						$carrying_amount=str_replace(",",".",$carrying_amount);
						$item->carrying_amount=$carrying_amount;
						$item->financing_source=1;
						$item -> document_id = $id;
						$item->save();
						$variable = new Variable;
						$residual_value=$data[8];
						$residual_value=str_replace(",",".",$residual_value);
						$variable -> residual_value = $residual_value;
						$monthly_rate=$data[10];
						$monthly_rate=str_replace(",",".",$monthly_rate);
						$variable -> monthly_rate = $monthly_rate;
						$variable -> useful_life = $data[11];
						$item->variable()->save($variable);
					}
				}
				if($type=='buildings'){
					while (($data = fgetcsv($handle, 1000, ';')) !==FALSE){
						$item = new Item();
						$name = iconv("Windows-1251", "utf-8", $data[0]);
						$item->name = $name;
						$item->number=$data[1];
						$os_date = date("Y-m-d", strtotime($data[2]));
						$item -> os_date=$os_date;
						$okof=$data[5];
						$okof = str_replace(" ","",$okof);
						$item -> okof=$okof;
						$carrying_amount=$data[6];
						$carrying_amount=str_replace(",",".",$carrying_amount);
						$item->carrying_amount=$carrying_amount;
						$item->financing_source=1;
						$item -> document_id = $id;
						$item->save();
						$variable = new Variable;
						$residual_value=$data[8];
						$residual_value=str_replace(",",".",$residual_value);
						$variable -> residual_value = $residual_value;
						$monthly_rate=$data[10];
						$monthly_rate=str_replace(",",".",$monthly_rate);
						$variable -> monthly_rate = $monthly_rate;
						$variable -> useful_life = $data[11];
						$item->variable()->save($variable);
						$building=new Building;
						$appointment=iconv("Windows-1251", "utf-8", $data[12]);
						$building->appointment=$appointment;
						$wall_material=iconv("Windows-1251", "utf-8", $data[13]);
						$building->wall_material=$wall_material;
						$date_construction = date("Y-m-d", strtotime($data[14]));
						$building->date_construction=$date_construction;
						$building->floors=$data[15];
						$item->building()->save($building);
						$address=new Address;
						$state=iconv("Windows-1251", "utf-8", $data[16]);
						$address->state=$state;
						$item->address()->save($address);
					}
				}
				if($type=='parcels'){
					while (($data = fgetcsv($handle, 1000, ';')) !==FALSE){
						$item = new Item();
						$name = iconv("Windows-1251", "utf-8", $data[0]);
						$item->name = $name;
						$item->number=$data[1];
						$os_date = date("Y-m-d", strtotime($data[2]));
						$item -> os_date=$os_date;
						$carrying_amount=$data[3];
						$carrying_amount=str_replace(",",".",$carrying_amount);
						$item->carrying_amount=$carrying_amount;
						$item->financing_source=1;
						$item -> document_id = $id;
						$item->save();
						$parcel=new Parcel;
						$parcel->cadastral=$data[5];
						$assigning_land=iconv("Windows-1251", "utf-8", $data[6]);
						$parcel->assigning_land=$assigning_land;
						$parcel->area=$data[7];
						$item->parcel()->save($parcel);
						$address=new Address;
						$state=iconv("Windows-1251", "utf-8", $data[8]);
						$address->state=$state;
						$state=iconv("Windows-1251", "utf-8", $data[8]);
						$item->address()->save($address);
					}
				}

				fclose($handle);
			}
		}
		return Redirect::action('AdminController@getDocView', [$document->id]);
	}
	public function getDocDelete($id){
		$document = Document::find($id);
		$user = Document::find($id)->user();
		$organization_id = $document->user->organization_id;
		$items=Document::find($id)->items;
		$type=$document->os_type;
		switch($type){
			case 'movables':
				foreach($items as $item){
					$variable=Item::find($item->id)->variable();
					$variable->delete();
				}
				$document->items()->delete();
				$document->delete();
				break;
			case 'value_movables':
				foreach($document->items as $item){
					$variable=Item::find($item->id)->variable();
					$variable->delete();
				}
				$document->items()->delete();
				$document->delete();
				break;
			case 'buildings':
				foreach($document->items as $item){
					$variable=Item::find($item->id)->variable();
					$variable->delete();

				}
				foreach($document->items as $item){
					$building=Item::find($item->id)->building();
					$building->delete();
				}
				foreach($document->items as $item){
					$address=Item::find($item->id)->address();
					$address->delete();
				}
				$document->items()->delete();
				$document->delete();
				break;
			case 'parcels':
				foreach($document->items as $item){
					$parcel=Item::find($item->id)->parcel();
					$address=Item::find($item->id)->address();
					$address->delete();
					$parcel->delete();
				}
				$document->items()->delete();
				$document->delete();
				break;
		}
		return Redirect::action('AdminController@getOrgDocs', [$organization_id]);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}


	/**
	 * Update the specified resource in storage.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
