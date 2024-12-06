<?php
namespace portalium\storage\bundles;

use yii\web\AssetBundle;

class FilePickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/portalium/yii2-storage/src/assets/'; 
    public $css = [
        'file-picker.css',  
    ];
    public $js = [
        'file-picker.js',  
    ];
    public $depends = [
        'yii\web\JqueryAsset',  
    ];
}
