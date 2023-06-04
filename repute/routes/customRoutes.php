<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\SoftDeletes;
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

Route::get('pankaj', function () {
    $activeRecords = User::Oogmailcom()->get();
    foreach ($activeRecords as $record) {
        echo $record->name.'<br/>';
        echo $record->email.'<br/>';
        echo $record->password.'<br/>';
    }
});
Route::get('pan',function(){
    $data=User::find(3);
    dd($data);
    // File::delete('C:/Users/dell/Desktop/a.png');
});
Route::get('pan',function(){
    
        User::withTrashed()->find(3)->restore();
  
        return back();
    
});
Route::get('getData',[UserController::class,'getData']);