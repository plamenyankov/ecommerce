<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('create product');
$I->amOnPage('/admin/products');
$I->see('Products Admin Panel');
$I->selectOption('category_id','Laptops');
$I->fillField('title', 'iPad');
$I->fillField('description','Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,
when an unknown printer took a galley of type and scrambled it to make a type specimen book.
It has survived not only five centuries');
$I->fillField('price',233);
$I->attachFile('input[name="image"]', 'product.gif');
$I->click('Create product');
$I->amOnPage('/admin/products');
$I->dontSee('Something went wrong');
$I->canSee('Product created');
$I->canSee('iPad','li');


