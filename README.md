README
======
Renders a [Bootstrap Popover Picker](https://farbelous.github.io/bootstrap-popover-picker/) widget for Yii2.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require dominus77/yii2-bootstrap-popover-picker "*"
```

or add

```
"dominus77/yii2-bootstrap-popover-picker": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
...
use dominus77\popoverpicker\PopoverPicker;
...
?>

<?= $form->field($model, 'popover')->widget(PopoverPicker::className(), []); ?>

```

Client Options:

```php
<?= $form->field($model, 'popover')->widget(PopoverPicker::className(), [
    'clientOptions' => [
        'title' => 'Bootstrap Popover Picker', // Popover title (optional) only if specified in the template
        'items' => [
            "Sunday", "Monday", "Tuesday",
            "Wednesday", "Thursday",
            "Friday", "Saturday"
        ],
        'placement' => 'bottomRight',
        'updateComponentOnChange' => false,
        'selectedCustomClass' => 'btn-success demo-selected',
        'pickerItemClass' => 'demo-item-class',
        'component' => '.input-group-btn',
        'itemValueSelector' => 'span',
        'templates' => [
            'pickerItem' => '<div class="demo-item-class"><span></span></div>',
            'search' => '<input type="search" class="form-control picker-search" placeholder="Type to filter" />'
        ]
        ...
        // more see https://itsjavi.com/bootstrap-popover-picker/
    ],
]); ?>
```

Further Information
-----
Please, check the [Bootstrap Popover Picker](https://farbelous.github.io/bootstrap-popover-picker/)

Other questions
-----
To see what has changed in recent versions, see the [CHANGELOG.md](https://github.com/Dominus77/yii2-bootstrap-popover-picker/blob/master/CHANGELOG.md)

License
-----
The BSD License (BSD). Please see [License File](https://github.com/Dominus77/yii2-bootstrap-popover-picker/blob/master/LICENSE.md) for more information.