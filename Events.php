<?php

namespace humhub\modules\twitchtv;

use Yii;
use yii\helpers\Url;
use humhub\modules\twitchtv\widgets\TwitchtvFrame;
use humhub\models\Setting;

class Events extends \yii\base\BaseObject
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('TwitchtvModule.base', 'Twitch Settings'),
            'url' => Url::toRoute('/twitchtv/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fab fa-twitch"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'twitchtv' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addTwitchtvFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::class);
        $event->sender->addWidget(TwitchtvFrame::class, [], [
            'sortOrder' => Setting::Get('timeout', 'twitchtv')
        ]);
    }
}
