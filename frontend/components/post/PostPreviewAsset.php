<?php

namespace frontend\components\post;
use yii\web\AssetBundle;

class PostPreviewAsset extends AssetBundle
{
    public $sourcePath = '@frontend/components/post/assets';
    public $css = [
        'css/post.preview.css'
    ];

    public $js = [
        ''
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}