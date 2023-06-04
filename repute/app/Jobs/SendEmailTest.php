<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\SendEmailTest as SendEmailTestMail;
use Mail;
class SendEmailTest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    /**
     * Create a new job instance.
     */
    public function __construct($details)
    {
        $this->details = $details;
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // $email = new SendEmailTestMail();
        // $data=[
        //     'name'=>'pankaj'
        // ];
        // Mail::send($this->details['email'], $data, function($message) use ($email) {
        //     $message->to($email);
        //     $message->subject('Welcome to My Site');
        // });
        
        // Mail::send($this->details['email'])->send($email);

        $email = new SendEmailTestMail();
        $data=[
            'name'=>'pankaj'
        ];
        Mail::send('welcome', $data, function ($message) use ($email) {
            $message->to(['pankaj.singh910025@gmail.com','rp8333282@gmail.com']);
            $message->subject('Welcome to My Site');
        });
        
        // Mail::send($this->details['email'])->send($email);

    }
}
