<?php

class OrganizationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /organizations
	 *
	 * @return Response
	 */
	protected $fillable =['*'];
	public function index()
	{

		return View::make('organization.organization');
	}
	public function getAdd(){
		return View::make('organization.add');
	}
	public function  postAdd(){
		$organization = new Organization;
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
		$organization -> last_document_number = 1;
		$organization->save();
		$user = new User;
		$user ->first_name = Input::get('first_name');
		$user ->last_name = Input::get('last_name');
		$user ->surname = Input::get('surname');
		$user ->username = Input::get('username');
		$user ->password = Input::get('password');
		$organization->user()->save($user);
		return Redirect::action('AdminController@index');
	}
	public function all(){
		$organizations=Organization::get();
		return View::make('organization.organizations')->with('organizations', $organizations);
	}
	public function getView($id){
		$organization=Organization::find($id);
		$user =  Organization::find($id)-> user();
		$documents = User::find($organization->user->id)->documents;
		return View::make('organization.organization_view', ['organization'=>$organization, 'user'=>$user, 'documents'=>$documents]);
	}
	/**
	 * Show the form for creating a new resource.
	 * GET /organizations/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /organizations
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /organizations/{id}
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
	 * GET /organizations/{id}/edit
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
	 * PUT /organizations/{id}
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
	 * DELETE /organizations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}