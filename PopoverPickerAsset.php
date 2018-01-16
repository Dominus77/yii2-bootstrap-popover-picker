<?php

namespace dominus77\popoverpicker;

use yii\web\AssetBundle;

/**
 * Class PopoverPickerAsset
 * @package dominus77\popoverpicker
 */
class PopoverPickerAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/bootstrap-popover-picker/dist';

    /**
     * @var array
     */
    public $css = [];

    /**
     * @var array
     */
    public $js = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $min = YII_ENV_DEV ? '' : '.min';
        $this->css[] = 'css/bootstrap-picker' . $min . '.css';
        $this->js[] = 'js/bootstrap-picker' . $min . '.js';
    }

    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'dominus77\popoverpicker\jQueryMigrateAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
