<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;


class SaleSuccessful extends Notification implements ShouldBroadcast
{
    // use Queueable;
    public string $message;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $product_name;
    //add sales sucessful notification
    public function __construct($product_name)
    {
        //with product name and product price
        $this->product_name = $product_name;
    
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['broadcast', 'database',]; //add database and broadcast to the notification
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    //real time notification and database notification
    public function toArray($notifiable)
    {
        return [
            //
            'data' => 'Your product '.$this->product_name.' has been sold successfully'
        ];
    }
    // public function toBroadcast($notifiable): BroadcastMessage
    // {
    //     return new BroadcastMessage([
    //         'data' => 'Your product '.$this->product_name.' has been sold successfully'
    //     ]);
    // }
}
