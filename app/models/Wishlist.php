<?php

class Wishlist extends \Eloquent {
    protected $table='wishlist';
	protected $fillable = ['user_id','product_id'];
    public function users(){
        return $this->belongsTo('User');
    }
}