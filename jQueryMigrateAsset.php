<?php

namespace dominus77\popoverpicker;

use yii\web\AssetBundle;

/**
 * Class jQueryMigrateAsset
 * @package dominus77\popoverpicker
 */
class jQueryMigrateAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var array
     */
    public $js = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/src';
        $this->js[] = 'js/jquery-migrate-3.0.0.js';
    }

    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
