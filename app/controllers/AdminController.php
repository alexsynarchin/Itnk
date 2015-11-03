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
	public function postImportItems($id){

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
