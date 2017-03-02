<?php

namespace dominus77\popoverpicker;

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;
use dominus77\popoverpicker\assets\PopoverPickerAsset;

/**
 * Class PopoverPicker
 * @package dominus77\popoverpicker
 */
class PopoverPicker extends InputWidget
{
    /**
     * Options plugin
     * @var array
     * @see https://itsjavi.com/bootstrap-popover-picker/
     */
    public $clientOptions = [];

    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }
        $this->registerClientScript();
    }

    /**
     * Publish resource
     */
    protected function registerClientScript()
    {
        $js = [];
        $view = $this->getView();
        PopoverPickerAsset::register($view);
        $id = $this->options['id'];
        $options = Json::encode($this->clientOptions);
        $js[] = "$('#{$id}').picker($options);";
        $view->registerJs(implode("\n", $js));
    }
}
