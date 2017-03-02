<?php

namespace dominus77\popoverpicker\assets;

use yii\web\AssetBundle;

/**
 * Class PopoverPickerAsset
 * @package dominus77\popoverpicker\assets
 */
class PopoverPickerAsset extends AssetBundle
{
    public static $tinyPublishPath = '@dominus77/popoverpicker/assets/src';

    public $sourcePath;

    public $css = [];

    public $js = [];

    public function init()
    {
        $this->sourcePath = self::$tinyPublishPath;
        $min = YII_ENV_DEV ? '' : '.min';
        $this->css[] = 'css/bootstrap-picker' . $min . '.css';
        $this->css[] = 'style.css';
        $this->js[] = 'js/bootstrap-picker' . $min . '.js';
    }

    public $depends = [
        'yii\web\YiiAsset',
    ];
}