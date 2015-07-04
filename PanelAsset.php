<?php
/**
 * @package  yii2-bootstrap-panel-widget
 * @author WeArDe <wearde.studio@gmail.com>
 * @link http://wearde.pp.ua
 * @version   1.0.0
 */

namespace amass\panel;

use yii\web\AssetBundle;

/**
 * Asset bundle for Panel Widget
 *
 * @since 1.0
 */

class PanelAsset extends AssetBundle
{
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset'
    ];
}