<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RepoController;
use Stevebauman\Location\Facades\Location;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   if ($position = Location::get()) {
    // Successfully retrieved position.
    echo $position->countryName;
} else {
    // Failed retrieving position.
}
});
Route::get('mail',[UserController::class,'register']);
// Route::get('send-test-email',[UserController::class,'sendEmail']);
// Route::get(‘send-test-email’, ‘EmailController@sendEmail’);

// Route::get('email-test', function(){
// 	$details['email'] = 'pankaj.singh910025@gmail.com';
//     dispatch(new App\Jobs\SendEmailTest($details));


//     dd('done');
// });
Route::get('send-email-queue', function(){
    $details['email'] = "view";
    dispatch(new App\Jobs\SendEmailTest($details));
    return response()->json(['message'=>'Mail Send Successfully!!']);
});

Route::get('getallusers',[RepoController::class,'getallusers']);
Route::get('getUserById/{id}',[RepoController::class,'getUserById']);
Route::any('delete/{id}',[RepoController::class,'delete']);
Route::any('createUser',[RepoController::class,'createUser']);
Route::any('update/{id}',[RepoController::class,'update']);

require_once __DIR__.'/customRoutes.php';