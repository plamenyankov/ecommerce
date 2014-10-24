<?php 
$I = new AcceptanceTester($scenario);
$I->am('admin');
$I->amOnPage('/');
//$I->click('Sign In');
$I->amOnPage('/users/signin');
$I->seeInCurrentUrl('/users/signin');
$I->see('I have an account');
$I->dontSee('Your email/password combo was incorrect!','div');
$I->fillField('email', 'justen61@russel.com');
$I->fillField('password', '1234');
$I->click('Login');
$I->dontSee('Your email/password combo was incorrect!','div');
$I->dontSee('I have an account','h1');
$I->canSeeCurrentUrlEquals('/');
$I->see('Today\'s Deals');
$I->see('Thank you for signing in!','div');
$I->moveMouseOver('.username');
$I->click('Manage Categories');
$I->amOnPage('/admin/category');
$I->see('Categories Admin Panel');
$I->fillField('name', 'Laptop new');
$I->click('Create category');
$I->amOnPage('/admin/category');
$I->dontSee('Something went wrong');
$I->canSee('Laptop new');
$I->canSee('Category created');

