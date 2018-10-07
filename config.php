<?php

namespace humhub\modules\twitchtv;

return [
    'id' => 'twitchtv',
    'class' => 'humhub\modules\twitchtv\Module',
    'namespace' => 'humhub\modules\twitchtv',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\twitchtv\Events',
                'addTwitchtvFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\twitchtv\Events',
                'addTwitchtvFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\twitchtv\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
