<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendBulkEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $details;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data,array $details)
    {
        $this->data = $data;
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->details['subject'])
            ->from('noreply@sprowttlaunchpad.com','Sprowtt Launch Pad')
            ->view('emails.mail')
            ->with($this->data);
    }
}
