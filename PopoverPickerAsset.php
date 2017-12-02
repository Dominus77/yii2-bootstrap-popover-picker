<?php

namespace dominus77\popoverpicker;

use yii\web\AssetBundle;

/**
 * Class PopoverPickerAsset
 * @package dominus77\popoverpicker
 */
class PopoverPickerAsset extends AssetBundle
{
    public $sourcePath;

    public $css = [];

    public $js = [];

    public function init()
    {
        $this->sourcePath = '@bower/bootstrap-popover-picker/dist';
        $min = YII_ENV_DEV ? '' : '.min';
        $this->css[] = 'css/bootstrap-picker' . $min . '.css';
        $this->js[] = 'js/bootstrap-picker' . $min . '.js';
    }

    public $depends = [
        'yii\web\JqueryAsset',
        'dominus77\popoverpicker\jQueryMigrateAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}