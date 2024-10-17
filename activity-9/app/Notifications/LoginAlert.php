<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LoginAlert extends Notification
{
    use Queueable;

    public function __construct() {}

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Alerta de Inicio de Sesión')
            ->greeting('Hola ' . $notifiable->name)
            ->line('Hemos detectado que iniciaste sesión en Activity 9.')
            ->line('Si no fuiste tú, por favor contacta con soporte.')
            ->action('Ir al Dashboard', url('/dashboard'))
            ->line('Gracias por usar nuestra aplicación.');
    }
}