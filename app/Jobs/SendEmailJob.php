<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Mail\SendBulkEmail;
use Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $details;
    protected $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details,$data)
    {
        $this->details = $details;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        sleep(1);

        $mail_details = $this->details;
        $data = $this->data;

        Mail::to($mail_details['toMail'])->send(new SendBulkEmail($data,$mail_details));
    }
}
