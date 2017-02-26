<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\controllers\CommonController;

class MoviesController extends CommonController
{
    public function actionViewMovie()
    {
        return $this->render('view_movie');
    }

    public function actionViewSeries()
    {
        return $this->render('view_series');
    }
}
