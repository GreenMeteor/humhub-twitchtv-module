<?php


namespace humhub\modules\twitchtv;

use Yii;
use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $publishOptions = [
        'forceCopy' => true
    ];

   /* public $js = [
    *    'v1.js'
    * ]; 
    */

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets';
        parent::init();
    }
}
