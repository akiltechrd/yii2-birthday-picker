<?php

namespace akiltech\birthdaypicker;

use yii\web\AssetBundle;

class BirthdayPickerAsset extends AssetBundle
{
    public $sourcePath = '@akiltech/birthdaypicker/assets/';

    public $js = [
        'jquery.birthdaypicker.min.js'
    ];

    public $css = [
        'jquery.birthdaypicker.min.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init() {
        parent::init();
    }
}
