<?php

namespace dominus77\popoverpicker\assets;

use yii\web\AssetBundle;

/**
 * Class PopoverPickerAsset
 * @package dominus77\popoverpicker\assets
 */
class PopoverPickerAsset extends AssetBundle
{
    public $sourcePath;

    public $css = [];

    public $js = [];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/src';
        $min = YII_ENV_DEV ? '' : '.min';
        $this->css[] = 'css/bootstrap-picker' . $min . '.css';
        $this->css[] = 'style.css';
        $this->js[] = 'js/jquery-migrate-3.0.0.js';
        $this->js[] = 'js/bootstrap-picker' . $min . '.js';
    }

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}