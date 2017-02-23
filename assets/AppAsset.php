<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/web/assets/';
    public $css = [
        'css/font-awesome.min.css',
        'css/primer.css',
        'css/owl.carousel.min.css',
        'css/app.min.css',
    ];
    public $js = [
        'js/jquery-3.1.1.min.js',
        'js/tilt.jquery.min.js',
        'js/owl.carousel.min.js',
        'js/app.js',
    ];
    public $depends = [];
}
