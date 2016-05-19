<?php

use tests\codeception\frontend\AcceptanceTester;

$I = new AcceptanceTester($scenario);
$I->wantTo('测试从大洋网首页,点击跳转到数字报首页');
$I->amOnPage('/');
$I->see('广州日报大洋网·新闻资讯服务南大门','title');

$link = $I->grabTextFrom('//ul[@class="top-nav-links pull-left sidenavHid"]/li[3]/a/@href');
$I->amOnUrl($link);
$I->seeLink('广州日报大洋网','http://dayoo.com');