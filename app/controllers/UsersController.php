<?php

class UsersController extends \BaseController {

    /**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.newaccount');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
	$validator = Validator::make(Input::all(),User::$rules);
        if($validator->passes()){
            $user = new User;
            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->email = Input::get('email');
            $user->telephone = Input::get('telephone');
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            return Redirect::to('users/signin')
                ->with('message','Thank you for creating an account!');
        }
        return Redirect::back()
            ->with('message','Something went wrong!')
            ->withErrors($validator)
            ->withInput();
	}
    public function signIn(){
        return View::make('users.signin');
    }
    public function postSignIn(){
        $auth = Auth::attempt(['email'=>Input::get('email'),'password'=>Input::get('password')]);
        if($auth){
            return Redirect::to('/')
                ->with('message','Thank you for signing in!');
        }
        return Redirect::to('users/signin')
            ->with('Your email/password combo was incorrect!');
    }
    public function signOut(){

        Auth::logout();
        return Redirect::to('users/signin')
            ->with('message','You have been signout!');
    }
	/**
	 * Display the specified resource.
	 * GET /users/{id}
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
	 * GET /users/{id}/edit
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
	 * PUT /users/{id}
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
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}