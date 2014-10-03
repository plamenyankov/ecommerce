<?php

class Product extends \Eloquent {
    protected $fillable = ['category_id','title','availability','description','price','image'];
    public static $rules = [
        'category_id' =>'required|integer',
        'title' => 'required|min:2',
        'availability' => 'integer',
        'description' => 'required|min:20',
        'price' => 'required|numeric',
        'image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif'
    ];
    public function category(){
        return $this->belongsTo('Category');
    }
}