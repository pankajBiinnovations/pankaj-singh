<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\User;
use App\Events\UserRegistered;
use Illuminate\Http\Request;
use Mail;
class UserController extends Controller
{
    public function register(Request $request)
    {
        // create new user
        $user = new User([
            'name' => 'pankaj',
            'email' => 'rp8333282@gmail.com',
            'password' => bcrypt(12345),
        ]);
        $user->save();

        // fire UserRegistered event
        event(new UserRegistered("pankaj"));

        // redirect to home page
        // return back();
    }
    // public function sendEmail()
    // {
    //     // $emailJob = new SendEmailJob();
        // dispatch($emailJob);
        // $job = (new \App\Jobs\SendEmailJob($user));
        //         // ->delay(now()->addSeconds(2)); 

        // dispatch($job);

    //     $details['email'] = 'pankaj.singh910025@gmail.com';
    // dispatch(new SendEmailTest($details));
    // dd('done');
    // }
  public function getData()
  {
   $a=3;
   if($a){
    return 'ama';
   }else{
    return "bb";
   }
  }

}

