<?php

namespace humhub\modules\twitchtv\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class TwitchtvFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
   public function run()
    {
        $url = Yii::$app->getModule('twitchtv')->getServerUrl() . '/';
        return $this->render('twitchtvframe', ['twitchtvUrl' => $url]);
    }
}
