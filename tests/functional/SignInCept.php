<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('sign in');
$I->amOnPage('/users/signin');
$I->seeInCurrentUrl('/users/signin');
$I->see('I have an account');
$I->fillField('email', 'justen61@russel.com');
$I->fillField('password', '1234');
$I->click('Login');
$I->dontSee('Your email/password combo was incorrect!','div');
$I->assertTrue(Auth::check());

