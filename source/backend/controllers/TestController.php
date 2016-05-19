<?php
namespace source\backend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Test controller
 */
class TestController extends Controller{

    public function actionIndex() {
        return $this->render('index');
    }

}