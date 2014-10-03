<?php
use \FunctionalTester;

class CategoryCest
{
    public function _before(FunctionalTester $I)
    {

    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $c = new Category;
        $c->name = 'Telefon';
        $c->save();
    }
}