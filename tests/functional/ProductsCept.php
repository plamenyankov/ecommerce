<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('create product');
$I->amOnPage('/admin/products');
$I->see('Products Admin Panel');
$I->selectOption('category_id','Phone');
$I->fillField('title', 'iPad');
$I->fillField('textarea','Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,
when an unknown');
$I->fillField('price',233);
$I->attachFile('input[name="image"]', 'product.gif');
$I->click('Create product');
$I->amOnPage('/admin/products');
$I->dontSee('Something went wrong','div');
$I->canSee('Product created','div');
$I->canSee('iPad','li');


