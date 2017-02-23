<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\controllers\CommonController;

class MoviesController extends CommonController
{
    public function actionShowMovie()
    {
        return $this->render('view_movie');
    }
}
