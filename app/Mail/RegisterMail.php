<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterMail extends Mailable
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
        $path = '';

        if (strtolower($this->data->study_code) == "feline123") {
            $path = 'uploads/privacy_cat.pdf';
        }elseif(strtolower($this->data->study_code) == "canine123"){
            $path = 'uploads/privacy_dog.pdf';
        }

        return $this->markdown('mails.register')->subject('Terms of Use and Privacy')
        ->with('data',$this->data)
        ->attach(public_path($path), [
                         'as' => 'privacy.pdf',
                         'mime' => 'application/pdf',
        ]);
    }
}
