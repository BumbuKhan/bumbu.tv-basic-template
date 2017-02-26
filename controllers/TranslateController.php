<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\controllers\CommonController;

class TranslateController extends CommonController
{
    protected $api_url = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=ru&hl=en-US&dt=t&dt=bd&dj=1&source=input&tk=983287.983287&q={query}";

    public function actionIndex()
    {
        $request = Yii::$app->request;
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $response_data = [
            'success' => false,
            'message' => 'Unknown error',
            'data' => []
        ];

        if (!$request->isAjax) {
            Yii::$app->end();
        }

        $query = $request->post('q');

        if (empty($query) || !is_string($query)) {
            $response_data['message'] = 'Incorrect param, query must be a string';

            return $response_data;
        }

        $url_to_request = str_replace('{query}', rawurlencode($query), $this->api_url);

        $translate = json_decode(file_get_contents($url_to_request));

        if (!empty($translate)) {
            $response_data['success'] = true;
            $response_data['message'] = 'Translated';
            $response_data['data'] = $translate;
        } else {
            $response_data['message'] = 'Ouuups, somethig went wrong, please try later';
        }

        return $response_data;
    }
}