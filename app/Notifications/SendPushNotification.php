<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Kutia\Larafirebase\Messages\FirebaseMessage;

class SendPushNotification extends Notification
{
    use Queueable;

    protected $title;
    protected $message;
    protected $token;

    /**
     * Create a new notification instance.
     */
    public function __construct($title, $message, $token)
    {
        $this->title = $title;
        $this->message = $message;
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['firebase'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toFirebase(object $notifiable): MailMessage
    {
        return (new FirebaseMessage)
                    ->withTitle($this->title)
                    ->withBody($this->message)
                    ->withPriority('high')
                    ->asMessage($this->token);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
