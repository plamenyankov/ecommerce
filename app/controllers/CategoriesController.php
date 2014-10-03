<?php

class CategoriesController extends \BaseController {
    function __construct()
    {
        parent::__construct();
        $this->beforeFilter('csfr',['on'=>'post']);
    }

    /**
     * Display a listing of the resource.
     * GET /categories
     *
     * @return Response
     */
    public function index()
    {
        return View::make('categories.index')->with('categories',Category::all());

    }

    /**
     * Show the form for creating a new resource.
     * GET /categories/create
     *
     * @return Response
     */
    public function create()
    {
        $validator =Validator::make(Input::all(), Category::$rules);
        if($validator->passes()){
            $category = new Category;
            $category->name=Input::get('name');
            $category->save();
            return Redirect::back()->with('message','Category created!');
        }
        return Redirect::back()->with('message','Something went wrong')->withInput()->withErrors($validator);

    }

    /**
     * Remove the specified resource from storage.
     * DELETE /categories/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        $category = Category::find(Input::get('id'));
        if($category){
            $category->delete();
            return Redirect::back()->with('message','Category deleted');
        }
        return Redirect::back()->with('message','Something went wrong');

    }
}