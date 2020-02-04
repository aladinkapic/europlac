<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable{
    use Queueable, SerializesModels;
    public $data;

    public function __construct($data){
        $this->data = $data;
    }

    public function build(){
        return $this->from('info@europlac-nekretnine.com')
            ->subject($this->data['purpose'])
            ->view('layout.emails.estate-email')
            ->with('data', $this->data); // Accessing variable data at view
    }
}
