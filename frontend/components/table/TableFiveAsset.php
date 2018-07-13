<?php
/**
 * Created by PhpStorm.
 * User: Lex
 * Date: 29.06.2018
 * Time: 19:36
 */

namespace frontend\components\table;
use yii\web\AssetBundle;

class TableFiveAsset extends AssetBundle
{
    public $sourcePath = '@frontend/components/table/assets';
    public $css = [
        'css/table.five.css'
    ];

    public $js = [
        ''
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}