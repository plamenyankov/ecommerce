<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('to add product to wishlist');
$I->am('customer');
$I->amOnPage('/');
$I->signIn();
$I->haveInDatabase('products',['category_id'=>1,'title'=>'iPhone6','price'=>765,'image'=>'http://lorempixel.com/500/300/technics/']);
$I->amOnPage('/');
$I->seeInDatabase('products',['category_id'=>1,'title'=>'iPhone6','price'=>765,'image'=>'http://lorempixel.com/500/300/technics/']);
$I->see('Add to Wishlist');
$I->click('Add to Wishlist');
$I->see('You added successfully added new product to your wishlist','div');
$I->click('Wishlist');
$I->canSeeCurrentUrlEquals('/store/wishlist');
$I->canSee('iPhone6');

