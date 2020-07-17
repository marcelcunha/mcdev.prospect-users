<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use MCDev\ProspectUsers\Notifications\ProspectUserNotification;

class ProspectUser extends Model
{
    public $timestamps = false;

    public function sendEmailNotification(){
        $this->notify(new ProspectUserNotification($this->token));
    }
}
