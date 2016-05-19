<?php
use tests\codeception\frontend\FunctionalTester;
use tests\codeception\frontend\_pages\DemoPage;

/* @var $scenario Codeception\Scenario */

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that test/index page works');
DemoPage::openBy($I);
$I->see('test-index', 'h1');
