<?php
/**
 * @link https://github.com/MadAnd/yii2-knockoutjs
 * @copyright Copyright (c) 2015 Andriy Kmit' <dev@madand.net>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace madand\knockoutjs;

use yii\web\AssetBundle;

class KnockoutAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/knockout/dist';
    public $js = [
        'knockout.js',
    ];
}
