<?php

namespace MCDev\ProspectUsers\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProspectUser extends Model
{
    use Notifiable;

    public $timestamps = false,
        $fillable = ['name', 'email', 'token', 'expire'];

    public function sendEmailNotification()
    {
        $class = config('prospect.notification_class');

        $this->notify(new $class($this->token));
    }
}
