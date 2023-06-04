<?php
// File: app/Traits/Loggable.php
namespace App\Traits;

use Illuminate\Support\Facades\Log;
use DB;
trait Loggable
{
    public function logMessage()
    {
        DB::table('users')->insert(['name'=>'pap']);
    }
}
