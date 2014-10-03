<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('visit Home page');
$I->amOnPage('/');
$I->seeElement('div',['class'=>'product']);

