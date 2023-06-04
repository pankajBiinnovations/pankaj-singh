<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;

class EmailController extends Controller
{
    public function sendWelcomeEmail(Request $request)
    {
        $body = "sending mail using queue";
       
        
        $job = (new \App\Jobs\SendEmailJob($body));
                // ->delay(now()->addSeconds(2)); 

        dispatch($job);
    }
}
