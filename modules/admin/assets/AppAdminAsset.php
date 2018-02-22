<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\modules\admin\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'libs/bootstrap/css/bootstrap.min.css',
//        'libs/slick/css/slick.css',
//        'css/comments.css',
//        'css/main.css',
//        'css/media.css'

    ];
    public $js = [
//        'libs/jquery/jquery-3.3.1.min.js',
//        'libs/jquery/jquery.pjax.js',
//        'libs/yii/yii.js',
//        'libs/yii/yii2.js',
//        'libs/bootstrap/js/bootstrap.min.js',
//        'libs/slick/js/slick.min.js',
//        'js/main.js',
//        'js/init.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
