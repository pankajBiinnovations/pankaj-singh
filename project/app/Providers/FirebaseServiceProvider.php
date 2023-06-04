<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Firebase\JWT\JWT;

class FirebaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('firebase', function () {
            $firebaseConfig = config('firebase');

            $jwt = new JWT();
            $jwt->setKey($firebaseConfig['secret']);

            return new \Firebase\FirebaseLib($firebaseConfig['url'], $jwt);
        });
    }
}
