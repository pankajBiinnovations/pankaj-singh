<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
Route::get('pa',function(){
    dd("pa");
});
