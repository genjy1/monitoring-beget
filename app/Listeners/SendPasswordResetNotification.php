<?php

namespace App\Listeners;

use App\Events\PasswordReset;
use App\Notifications\PasswordResetNotification; // Уведомление, отправляемое при сбросе пароля

class SendPasswordResetNotification
{
    /**
     * Обработка события PasswordReset.
     *
     * @param  \App\Events\PasswordReset  $event
     * @return void
     */
    public function handle(PasswordReset $event)
    {
        // Отправляем уведомление пользователю
        $event->user->notify(new PasswordResetNotification());
    }
}
