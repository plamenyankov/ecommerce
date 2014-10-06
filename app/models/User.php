<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
    protected $fillable = ['firstname','lastname','email','telephone','password'];
    public static $rules = [
        'firstname'=>'required|min:2|alpha',
        'lastname'=>'required|min:2|alpha',
        'email'=>'required|email|unique:users',
        'telephone'=>'required|between:8,16',
        'password'=>'required|between:4,10|confirmed|alpha_num',
        'password_confirmation'=>'required|between:4,10|alpha_num',
        'admin'=>'boolean'
    ];
    public function wishlist(){
        return $this->hasMany('Wishlist');
    }
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
