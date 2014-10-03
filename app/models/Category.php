<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Category extends \Eloquent {
    use SoftDeletingTrait;
    protected $fillable = ['name'];
    public static $rules=['name'=>'required|min:3'];
    /**
     * The database table used from the model
     * @var string
     */
    protected $table = 'categories';
    protected $dates = ['deleted_at'];

    public function products(){
        return $this->hasMany('Product');
    }
}