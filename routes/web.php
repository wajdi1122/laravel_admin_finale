<?php

use Illuminate\Support\Facades\Route;
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

//tweets
Route::get('/tweets',[App\Http\Controllers\TweetContoller::class , 'index']);
Route::put('/updatetweet/{id}',[App\Http\Controllers\TweetContoller::class , 'update']);
Route::post('/ajoutertweet',[App\Http\Controllers\TweetContoller::class , 'store']);
Route::delete('/deletetweet/{id}',[App\Http\Controllers\TweetContoller::class , 'destroy']);

//organizers
Route::get('/organizers',[App\Http\Controllers\OrganizerContoller::class , 'index']);
Route::put('/updatetorganizer/{id}',[App\Http\Controllers\OrganizerContoller::class , 'update']);
Route::post('/ajouterorganizer',[App\Http\Controllers\OrganizerContoller::class , 'store']);
Route::delete('/deleteorganizer/{id}',[App\Http\Controllers\OrganizerContoller::class , 'destroy']);

//spnsors
Route::get('/sponsors',[App\Http\Controllers\SponsorContoller::class , 'index']);
Route::put('/updatetsponsors/{id}',[App\Http\Controllers\SponsorContoller::class , 'update']);
Route::post('/ajoutersponsors',[App\Http\Controllers\SponsorContoller::class , 'store']);
Route::delete('/deletesponsors/{id}',[App\Http\Controllers\SponsorContoller::class , 'destroy']);

//keynote
Route::get('/keyNote',[App\Http\Controllers\KeynoteContoller::class , 'index']);
Route::put('/updatetkeyNote/{id}',[App\Http\Controllers\KeynoteContoller::class , 'update']);
Route::post('/ajouterkeyNote',[App\Http\Controllers\KeynoteContoller::class , 'store']);
Route::delete('/deletekeyNote/{id}',[App\Http\Controllers\KeynoteContoller::class , 'destroy']);

//specialsession
Route::get('/session',[App\Http\Controllers\SpecialSessionContoller::class , 'index']);
Route::put('/updatetsession/{id}',[App\Http\Controllers\SpecialSessionContoller::class , 'update']);
Route::post('/ajoutersession',[App\Http\Controllers\SpecialSessionContoller::class , 'store']);
Route::delete('/deletesession/{id}',[App\Http\Controllers\SpecialSessionContoller::class , 'destroy']);

//author
Route::get('/authors',[App\Http\Controllers\AuthorContoller::class , 'index']);
Route::put('/updatetauthors/{id}',[App\Http\Controllers\AuthorContoller::class , 'update']);
Route::post('/ajouterauthors',[App\Http\Controllers\AuthorContoller::class , 'store']);
Route::delete('/deleteauthors/{id}',[App\Http\Controllers\AuthorContoller::class , 'destroy']);

Route::get('/', function () {
    return view('auth/login');
});



Route::get('/countries', function () {
    return view('admin/countries');
});
Route::get('/photos', function () {
    return view('admin/photo');
});
Route::get('/videos', function () {
    return view('admin/video');
});