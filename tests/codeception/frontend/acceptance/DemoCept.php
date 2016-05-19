<?php

use tests\codeception\frontend\AcceptanceTester;
use tests\codeception\frontend\_pages\DemoPage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure login page works');
$demoPage = DemoPage::openBy($I);

$I->see('test-index', 'h1');
$I->dontSeeLink('Login');

/** Uncomment if using WebDriver
 * $I->click('Logout (erau)');
 * $I->dontSeeLink('Logout (erau)');
 * $I->seeLink('Login');
 */
