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
class ChartJsLocalAsset extends AssetBundle
{
    public $sourcePath = '@npm/chart.js/dist';

    public $js = [
        'chart.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
