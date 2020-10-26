<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScreenRecorder;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ScreenRecorder::class, 'BaseIndex'])->name('base');
Route::get('/media-tab', [ScreenRecorder::class, 'MediaTab'])->name('record-screen');
Route::post('/media-tab', [ScreenRecorder::class, 'MediaTabSave'])->name('screen');
// Route::get('/test', [ScreenRecorder::class, 'getYoutubeId'])->name('youtube-link');
Route::get('/video-preview', [ScreenRecorder::class, 'YoutubeVideoView'])->name('preview');
Route::get('/youtube_urls', [ScreenRecorder::class, 'youtubeVideoHandler'])->name('youtube_link');
Route::post('/youtube_urls', [ScreenRecorder::class, 'youtubeLinkHander'])->name('urls_link');