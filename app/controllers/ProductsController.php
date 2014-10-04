<?php

class ProductsController extends \BaseController {


    /**
     * Display a listing of the resource.
     * GET /products
     *
     * @return Response
     */
    public function index()
    {

        $cats=[];
        foreach(Category::all() as $cat){
            $cats[$cat->id] = $cat->name;
        }
        return View::make('products.index')
            ->with('products',Product::all())
            ->with('categories',$cats);
    }

    /**
     * Show the form for creating a new resource.
     * GET /products/create
     *
     * @return Response
     */
    public function create()
    {
        $validator =Validator::make(Input::all(), Product::$rules);
        if($validator->passes()){
            $product = new Product;
            $product->category_id=Input::get('category_id');
            $product->title=Input::get('title');
            $product->description=Input::get('description');
            $product->price=Input::get('price');
            $image = Input::file('image');
            $filename = date('Y-m-d-H_i_s').'-'.$image->getClientOriginalName();

            Image::make($image->getRealPath())->resize(468,249)->save('public/img/products/'.$filename);
            $product->image  = 'img/products/'.$filename;
            $product->save();
            return Redirect::back()->with('message','Product created!');
        }
        return Redirect::back()->with('message','Something went wrong')->withInput()->withErrors($validator);
    }

    public function postToggleAvailability(){
        $product = Product::find(Input::get('id'));
        if($product){
            $product->availability = Input::get('availability');
            $product->save();
            return Redirect::back()
                ->with('message','Product Update');
        }
        return Redirect::back()
            ->with('message','Invalid');
    }
    /**
     * Remove the specified resource from storage.
     * DELETE /products/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        $product = Product::find(Input::get('id'));
        if($product){
            File::delete('public/'.$product->image);
            $product->delete();
            return Redirect::back()->with('message','Product deleted');
        }
        return Redirect::back()->with('message','Something went wrong');

    }
}