<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\WelcomeMail;
use Mail;
use DB;
class SendWelcomeEmail implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(UserRegistered $event)
    {
        print_r($event->name);
  //We can send a mail from here
  $user=[
    'name'=>'pankaj'
  ];
//   $email=DB::table('emails')->pluck('email')->get();
//   $s=DB::table('emails')->get()->pluck('email');
// $s=['pankaj.singh91002@gmail.com','rp8333282@gmail.com'];
 
  
  Mail::send('welcome', $user, function($message) use ($user) {
    $message->to(['pankaj.singh910025@gmail.com','rp8333282@gmail.com']);
    $message->subject('Event Testing');
});

        echo ".. From Listeners";
        exit;
        // $user = $event->user;

        // send welcome email to new user
        // Mail::to($user->email)->send(new WelcomeEmail($user));
    }
}
