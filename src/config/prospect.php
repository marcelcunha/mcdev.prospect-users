<?php

return [
    'resource' => 'prospect',

    'model' => [
        'user-model' => App\Models\User::class,
        'create-route' => 'user.create',
        'notification_class' => \MCDev\ProspectUsers\Notifications\ProspectUserNotification::class
    ]
];
