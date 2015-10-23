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
		$user ->first_name = Input::get('first_name');
		$user ->last_name = Input::get('last_name');
		$user ->surname = Input::get('surname');
		$user ->username = Input::get('username');
		$user ->password = Hash::make(Input::get('password'));
		$organization->user->save();
		return Redirect::action('AdminController@index');
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
