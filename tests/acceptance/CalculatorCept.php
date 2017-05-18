<?php
$I = new AcceptanceTester($scenario);

$I->amOnPage('/');
$I->fillField('a', 5);
$I->fillField('b', 5);
$I->click('+');
$I->seeInField('answer', '9');

