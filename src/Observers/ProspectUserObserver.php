<?php

namespace MCDev\ProspectUsers\Observers;

use Exception;
use MCDev\ProspectUsers\Models\ProspectUser;

class ProspectUserObserver
{
    /**
     * Captura o evento de criação de um novo prospect e tenta enviar um email para o mesmo, caso algo dê errado, o prospect é removido e a exceção continua seu caminho.
     */
    public function created(ProspectUser $prospectUser)
    {
        try {
            $prospectUser->sendEmailNotification();
        } catch (Exception $e) {
            $prospectUser->delete();

            throw $e;
        }
    }
}
