<?php

class StoreController extends \BaseController {

    function __construct()
    {
        $this->beforeFilter('csfr',['on'=>'post']);
    }

    /**
	 * Display a listing of the resource.
	 * GET /store
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('store.index')->with('products', Product::take(12)->orderBy('created_at', 'DESC')->get());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /store/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /store
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /store/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		return View::make('store.view')->with('product',Product::find($id));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /store/{id}/edit
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
	 * PUT /store/{id}
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
	 * DELETE /store/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}