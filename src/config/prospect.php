<?php

return [
    'resource' => 'prospect',
    'notification_class' => \MCDev\ProspectUsers\Notifications\ProspectUserNotification::class,

    'model' => [
        'user-model' => App\Models\User::class,
        'create-route' => 'user.create',
    ],

    'route-file-path' => 'routes/web.php',
];
