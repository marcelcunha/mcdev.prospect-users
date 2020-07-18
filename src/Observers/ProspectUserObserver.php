<?php

namespace MCdev\Observers\Observers;

use App\Models\ProspectUser;

class ProspectUserObserver
{
    public function created(ProspectUser $prospectUser)
    {
        $prospectUser->sendEmailNotification();
    }
}
