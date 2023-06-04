<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Services\Regservice;
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

Route::get('/{id}', function ($id) {
    // $redis = Redis::connection();
    $blog = User::find($id);
    Redis::set('blog_' . $id, $blog);
    return response()->json([
        'status_code' => 200,
        'message' => 'Fetched from database',
        'data' => $blog,
    ]);
});
Route::get('/service/step1', function () {
    // Step 1 route
    $registrationService = new Regservice();
    return $registrationService->step1();
});

Route::get('show/{id}',[UserController::class,'show']);
Route::get('delete/{id}',[UserController::class,'delete']);
Route::post('create',[UserController::class,'store']);

Route::post('/notifications', [UserController::class,'send']);
