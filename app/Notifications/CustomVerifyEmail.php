<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\VerifyEmail as BaseVerifyEmail;

class CustomVerifyEmail extends BaseVerifyEmail
{
    use Queueable;

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        $url = $this->verificationUrl($notifiable);

        return (new MailMessage)
                    ->subject('Verify Your Email Address')
                    ->line('Please click the button below to verify your email address.')
                    ->action('Verify Email Address', $url)
                    ->line('Thank you for using our application!');
    }

    public function toArray($notifiable): array
    {
        return [
            'verification_url' => $this->verificationUrl($notifiable),
            'user_name' => $notifiable->name,
            'email' => $notifiable->email,
        ];
    }
}
