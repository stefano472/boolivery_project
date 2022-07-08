<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $newOrder;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($_order)
    {
        //
        $this->newOrder  =  $_order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this->from('noreply@boolivery.com')

            ->view('mail.sendMail') // this is your email template in "view" directory

            ->with([

            'data1'  =>  $this->newOrder,

            ]);
        // return $this->view('view.name');
    }
}
