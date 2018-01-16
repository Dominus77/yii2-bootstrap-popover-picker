<?php

namespace dominus77\popoverpicker;

use yii\web\AssetBundle;

/**
 * Class DemoAsset
 * @package dominus77\popoverpicker
 */
class DemoAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var array
     */
    public $css = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/src';
        $this->css[] = 'css/style.css';
    }

    /**
     * @var array
     */
    public $depends = [
        'dominus77\popoverpicker\PopoverPickerAsset',
    ];
}
