<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Notifications\Messages\MailMessage;

class PasswordResetNotification extends ResetPasswordNotification
{
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Уведомление о сбросе пароля')
            ->line('Вы получили это письмо, так как мы получили запрос на сброс пароля для вашей учетной записи.')
            ->action('Сбросить пароль', url(route('password.reset', $this->token, false)))
            ->line('Если вы не запрашивали сброс пароля, никаких дальнейших действий не требуется.');
    }
}
