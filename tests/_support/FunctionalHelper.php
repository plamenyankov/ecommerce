<?php
namespace Codeception\Module;
use Laracasts\TestDummy\Factory as TestDummy;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module
{
    public function signIn(){
    $this->haveAnAccount(['email'=>'foo@example.com','password'=>'secret']);
    $I = $this->getModule('Laravel4');
    $I->amOnPage('/users/signin');
    $I->fillField('email','foo@example.com');
    $I->fillField('password','secret');
    $I->click('Login');
}

    public function have($model,$overrides = []){
        TestDummy::create($model, $overrides);
    }
    public function haveAnAccount($overrides=[]){

        $this->have('User', $overrides);
    }

}