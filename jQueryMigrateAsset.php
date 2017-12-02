<?php

namespace dominus77\popoverpicker;

use yii\web\AssetBundle;

/**
 * Class jQueryMigrateAsset
 * @package dominus77\popoverpicker
 */
class jQueryMigrateAsset extends AssetBundle
{
    public $sourcePath;
    public $js = [];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/src';
        $this->js[] = 'js/jquery-migrate-3.0.0.js';
    }

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}