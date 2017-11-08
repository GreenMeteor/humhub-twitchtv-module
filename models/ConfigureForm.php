<?php

namespace humhub\modules\twitchtv\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.

 */
class ConfigureForm extends \yii\base\Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('TwitchtvModule.base', 'Twitch URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('TwitchtvModule.base', 'e.g. https://www.twitch.tv/{id}/chat'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('twitchtv')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('twitchtv')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
