<?php

namespace native\modules\core\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return 'Hello World!';
    }
}