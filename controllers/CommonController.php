<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class CommonController extends Controller
{
    function beforeAction($action)
    {
        if (Yii::$app->devicedetect->isMobile()) {
            Yii::$app->setViewPath(Yii::getAlias('@mobile_view_path'));
        } else {
            Yii::$app->setViewPath(Yii::getAlias('@desktop_view_path'));
        }

        return parent::beforeAction($action);
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}
