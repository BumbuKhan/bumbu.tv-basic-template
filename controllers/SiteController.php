<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\controllers\CommonController;

class SiteController extends CommonController
{
    public function actionIndex()
    {
        //var_dump(Yii::$app->devicedetect->isMobile());
        return $this->render('index');
    }
}
