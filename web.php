<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ImageUploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Mail\MyTestMail;
use App\Models\Member;
use Illuminate\Support\Facades\Mail;

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


Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('dashboard');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@create')->name('register.show');

        Route::post('/register', 'RegisterController@store')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
Route::get('/image-upload', [ImageUploadController::class, 'imageupload'])->name('image');
Route::post('/image-upload', [ImageUploadController::class, 'images'])->name('image.submit');
Route::view('add', 'profile-static');
Route::post('add', [MemberController::class, 'addData']);

Route::get('tables', [MemberController::class, 'show']);
Route::get('delete/{id}', [MemberController::class, 'delete']);
Route::get('edit/{id}', [MemberController::class, 'showData']);
Route::post('edit/', [MemberController::class, 'updates']);
Route::get("data",[MemberController::class,'indexes']);
Route::get('members', [MemberController::class, 'index'])->name('members.index');
Route::resource('members', MemberController::class);
Route::get('/member', [MemberController::class, 'index'])->name('members.index');
Route::post('/member', [MemberController::class, 'store'])->name('members.store');





