<?php

/*
 * This file is part of the 2amigos/yii2-chartjs-widget project.
 * (c) 2amigOS! <http://2amigos.us/>
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace dosamigos\chartjs;

use yii\web\AssetBundle;

/**
 *
 * ChartPluginAsset
 */
class ChartJsAsset extends AssetBundle
{
    public $sourcePath = null;

    public $js = [
        'https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
