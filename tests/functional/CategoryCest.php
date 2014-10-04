<?php
use \FunctionalTester;

class CategoryCest
{
    public function _before(FunctionalTester $I)
    {
        $I->am('admin');
        $I->amOnPage('/admin/category');
        $I->see('Categories Admin Panel');
        $I->fillField('name', 'Laptop new');
        $I->click('Create category');
        $I->amOnPage('/admin/category');
        $I->dontSee('Something went wrong');
        $I->canSee('Laptop new');
        $I->canSee('Category created');

    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
//        $c = new Category;
//        $c->name = 'Telefon';
//        $c->save();
    }
}