<?php

class OrganizationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /organizations
	 *
	 * @return Response
	 */
	public function index()
	{

		return View::make('organization.organization');
	}
	public function all(){
		$organizations=Organization::get();
		return View::make('organization.organizations')->with('organizations', $organizations);
	}
	public function getView($id){
		$organization=Organization::find($id);
		return View::make('organization.organization_view', array('organization'=>$organization));
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