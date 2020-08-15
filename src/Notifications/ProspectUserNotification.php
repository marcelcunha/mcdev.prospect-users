<?php

namespace MCDev\ProspectUsers\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ProspectUserNotification extends Notification
{
    use Queueable;

    private $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Ativação de Cadastro')
            ->greeting("Caro $notifiable->name,")
            ->line('Seu pré-cadastro no sistema  foi realizado, utilizando esta conta de e-mail.
        Para continuar, é necessário acessar o link abaixo para completar os dados de acesso.')
            ->action('COMPLETAR CADASTRO', route(config('prospect.model.create-route', 'user.create'), $this->token))
            ->line('Se o botão acima não funcionar, copie e cole o link abaixo no seu navegador para prosseguir:
        link completo')
            ->line('No caso de dúvidas, favor entrar em contato com o responsável pelo seu setor.
        ')
            ->salutation("Atenciosamente!!");
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
