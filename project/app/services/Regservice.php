<?php
namespace App\services;
use DB;
use Hash;
class Regservice
{
    public function step1()
    {
      $data= DB::table('users')->insert([
        'name'=>'pp',
        'email'=>'pp@gmail.com',
        'password'=>Hash::make('12345678'),
       ]);
       return response()->json([
        'status_code' => 200,
        'message' => 'Fetched from database',
        'data' => $data,
    ]);
    }

    public function step2($data)
    {
        // Step 2 logic
    }

    public function step3($data)
    {
        // Step 3 logic
    }
}
