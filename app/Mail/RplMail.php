<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RplMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $filePath;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $filePath)
    {
        $this->data = $data;
        $this->filePath = $filePath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->subject("There is a new request to check eligibility for RPL")->view('mails.rpl');

        if (count($this->filePath) > 0) {
            foreach ($this->filePath as $path) {
                $email->attach($path);
            }
        }

        return $email;
    }
}
