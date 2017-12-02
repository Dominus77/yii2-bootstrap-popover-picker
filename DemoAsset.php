<?php

namespace dominus77\popoverpicker;

use yii\web\AssetBundle;

/**
 * Class DemoAsset
 * @package dominus77\popoverpicker
 */
class DemoAsset extends AssetBundle
{
    public $sourcePath;
    public $css = [];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/src';
        $this->css[] = 'css/style.css';
    }

    public $depends = [
        'dominus77\popoverpicker\PopoverPickerAsset',
    ];
}