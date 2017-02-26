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

        /*
         * {
           "sentences":[
              {
                 "trans":"интересно",
                 "orig":"interesting",
                 "backend":1
              }
           ],
           "dict":[
              {
                 "pos":"adjective",
                 "terms":[
                    "интересный",
                    "занятный"
                 ],
                 "entry":[
                    {
                       "word":"интересный",
                       "reverse_translation":[
                          "interesting",
                          "sapid",
                          "readable",
                          "cunning",
                          "nutty",
                          "sipid"
                       ],
                       "score":0.16842748
                    },
                    {
                       "word":"занятный",
                       "reverse_translation":[
                          "amusing",
                          "interesting"
                       ],
                       "score":0.00010722029
                    }
                 ],
                 "base_form":"interesting",
                 "pos_enum":3
              }
           ],
           "src":"en",
           "confidence":1,
           "ld_result":{
              "srclangs":[
                 "en"
              ],
              "srclangs_confidences":[
                 1
              ],
              "extended_srclangs":[
                 "en"
              ]
           }
        }
         * */

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
