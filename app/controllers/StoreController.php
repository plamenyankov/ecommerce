<?php

class StoreController extends \BaseController {
public function __construct()
{
    parent::__construct();
    $this->beforeFilter('auth',['only'=>['postAddtocart','getCart','getRemoveitem']]);
}

    /**
	 * Display a listing of the resource.
	 * GET /store
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('layouts.layout');
//		return View::make('store.index')->with('products', Product::take(12)->orderBy('created_at', 'DESC')->get());
	}
    public function showByCategory($id){
            return View::make('store.category')
                ->with('products',Product::where('category_id','=',$id)->paginate(6))
                ->with('category',Category::find($id));
    }
    public function search(){
        $key = Input::get('keyword');
        return View::make('store.search')
            ->with('products',Product::where('title','LIKE','%'.$key.'%')->get())
            ->with('keyword',$key);
    }
    public function postAddtocart(){

        $product = Product::find(Input::get('id'));
        $qty = Input::get('quantity');
        Cart::insert([
            'id'=>$product->id,
            'name'=>$product->title,
            'price'=>$product->price,
            'quantity'=>$qty,
            'image'=>$product->image
        ]);

        return Redirect::to('store/cart');
    }
    public function getCart(){

        return View::make('store.cart')
            ->with('products',Cart::contents());
    }
    public function getRemoveitem($identifier){
        $item = Cart::item($identifier);
        $item->remove();
        return Redirect::to('store/cart');
    }
    public function contact(){

        return View::make('store.contact');
    }
    public function addToWishlist($id){
        return 1;
    }
    public function removeFromWishlist($id){
        return 1;
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