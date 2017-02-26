<?php

namespace app\assets;

use yii\web\AssetBundle;

class VideoPlayerAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/web/assets/';
    public $css = [
        'css/video-js.css',
        'css/videojs.caption.css',
        'css/video-player.css',
    ];
    public $js = [
        'js/video.min.js',
        'js/video-player-plugins/videojs.caption.js',
        'js/video-player-plugins/videojs.hotkey.js',
        'js/video-player.js',
    ];
    public $depends = [
        'app\assets\AppAsset'
    ];
}
