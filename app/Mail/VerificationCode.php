<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerificationCode extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from('mail@example.com', 'Mailtrap')
        //     ->subject('Mailtrap Confirmation')
        //     ->markdown('mails.exmpl')
        //     ->with([
        //         'name' => 'New Mailtrap User',
        //         'link' => 'https://mailtrap.io/inboxes'
        //     ]);
        return $this->markdown('mails.verfication')->subject('Forget Password')->with('data',$this->data);
    }
}
