<?php 
$I = new FunctionalTester($scenario);
$I->am('admin');
$I->amOnPage('/admin/category');
$I->see('Categories Admin Panel');
$I->fillField('name', 'Laptop new');
$I->click('Create category');
$I->amOnPage('/admin/category');
$I->dontSee('Something went wrong');
$I->canSee('Laptop new');
$I->canSee('Category created');
