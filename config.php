<?php

namespace humhub\modules\twitchtv;

return [
    'id' => 'twitchtv',
    'class' => 'humhub\modules\twitchtv\Module',
    'namespace' => 'humhub\modules\twitchtv',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::className(),
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\twitchtv\Events',
                'addTwitchtvFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::className(),
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\twitchtv\Events',
                'addTwitchtvFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\twitchtv\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
