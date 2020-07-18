<?php

namespace MCDev\ProspectUsers\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use MCDev\ProspectUsers\Notifications\ProspectUserNotification;

class ProspectUser extends Model
{
    use Notifiable;
    
    public $timestamps = false,
        $fillable = ['name', 'email', 'token', 'expire'];

    public function sendEmailNotification()
    {
        $this->notify(new ProspectUserNotification($this->token));
    }
}
