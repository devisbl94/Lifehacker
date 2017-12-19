<?php

namespace App\Listeners;

use App\Events\MessageReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class NotifyOwner
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MessageReceived  $event
     * @return void
     */
    public function handle(MessageReceived $event)
    {
        $message = $event->message;
        
        Mail::send('emails.received', ['msg' => $message], function ($email) use ($message) {
            $email->to(config('mail.from.address'), config('mail.from.name'))
                ->from($message->email, $message->name)
                ->subject('Someone has sended a message!');
        });
    }
}
