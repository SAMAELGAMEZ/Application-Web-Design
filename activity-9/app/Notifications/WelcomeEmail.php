<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeEmail extends Notification
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
            ->subject('Bienvenido a Activity 9')
            ->greeting('¡Hola ' . $notifiable->name . '!')
            ->line('Gracias por registrarte en Activity 9.')
            ->line('Esperamos que disfrutes la experiencia.')
            ->action('Ir al Dashboard', url('/dashboard'))
            ->line('Gracias por unirte a nuestra comunidad.');
    }
}