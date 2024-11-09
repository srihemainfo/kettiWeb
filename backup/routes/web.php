<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf as DOMPDF;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});


Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/after-login', function () {
    return view('after-login');
});

Route::get('/compatibility-view', function () {
    return view('compatibility-view');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});

Route::get('/safety-tips', function () {
    return view('safety-tips');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/view-own-profile', function () {
    return view('view-own-profile');
});

Route::get('/view-own-profile-pink', function () {
    return view('view-own-profile-pink');
});

Route::get('/view-profile', function () {
    return view('view-profile');
});

Route::get('/my-profile', function () {
    return view('my-profile');
});

Route::get('/photo-upload', function () {
    return view('photo-upload');
});

Route::get('/refine-search', function () {
    return view('refine-search');
});

Route::get('/success-story', function () {
    return view('success-story');
});

Route::get('/package', function () {
    return view('package');
});

Route::get('/thanks-email', function () {
    return view('thanks-email');
});

Route::get('/forget-password-email', function () {
    return view('forget-password-email');
});

Route::get('/register-otp-email', function () {
    return view('register-otp-email');
});

Route::get('/new-matches-email', function () {
    return view('new-matches-email');
});

Route::get('/document-upload', function () {
    return view('document-upload');
});

Route::get('/compare-profiles', function () {
    return view('compare-profiles');
});

Route::get('/wish-list', function () {
    return view('wish-list');
});

Route::get('/blocked-list', function () {
    return view('blocked-list');
});

Route::get('/watch-list', function () {
    return view('watch-list');
});

Route::get('/payment-success', function () {
    return view('payment-success');
});

Route::get('/payment-failed', function () {
    return view('payment-failed');
});

Route::get('/payment-confirmation', function () {
    return view('payment-confirmation');
});

Route::get('/buy-screen', function () {
    return view('buy-screen');
});

Route::get('/used-credit', function () {
    return view('used-credit');
});

Route::get('/unused-credit', function () {
    return view('unused-credit');
});

Route::get('/view-tamil', function () {
    return view('view-tamil');
});

Route::get('/view-tamil-fill', function () {
    return view('view-tamil-fill');
});

Route::get('/view-english', function () {
    return view('view-english');
});

Route::get('/view-english-fill', function () {
    return view('view-english-fill');
});

Route::get('/pdf_english', function () {
    
    $file_name = 'pdf_en.pdf';
    $pdf = DOMPDF::loadView('pdf_en')->setPaper('a4', 'portrait');
    
    return view('view-english-fill');
});

