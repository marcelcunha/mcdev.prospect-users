<?php

return [
    'resource' => 'prospect',
    'notification_class' => \MCDev\ProspectUsers\Notifications\ProspectUserNotification::class,

    'model' => [
        'user_model' => App\Models\User::class,
        'create_route' => 'user.create',
    ],

    'route_file_path' => 'routes/web.php',
];
