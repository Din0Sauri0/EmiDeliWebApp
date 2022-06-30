<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TestNotification extends Notification
{
    use Queueable;
    protected $title;
    protected $start;
    public $id;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(String $title, String $start, Int $id)
    {
        $this->title = $title;
        $this->start = $start;
        $this->id = $id;
        //
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
                    ->line('El pedido del siguiente cliente está cerca de su fecha de entrega: '.$this->title)
                    ->line('Debes entregarlo antes del '.$this->start)
                    ->action('Ir al pedido', url('/pedido/'.$this->id));
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
