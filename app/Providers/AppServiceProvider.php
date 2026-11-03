<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ResetPassword::toMailUsing(function ($notifiable, $token) {
        $url = url(route('password.reset', [
        'token' => $token,
        'email' => $notifiable->getEmailForPasswordReset(),
    ], false));

    return (new MailMessage)
        ->subject('Reset your MathMaster password')
        ->greeting('Hi ' . $notifiable->name . ',')
        ->line('We received a request to reset your MathMaster password.')
        ->action('Reset Password', $url)
        ->line('This link will expire in 60 minutes.')
        ->line('If you did not ask for this, you can ignore this email.')
        ->salutation('MathMaster Team');
    });
    }
}
