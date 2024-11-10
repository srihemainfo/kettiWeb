<?php

use App\Http\Controllers\PDFController;
use Barryvdh\DomPDF\Facade\Pdf as DOMPDF;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/view-pdf', [PDFController::class, 'viewPDF'])->name('view.pdf');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/after-login', function () {
    return view('editprofile/after-login');
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

/////////     Edit Profile Starts here //////////////
Route::group(['middleware' => ['verifyCookie']], function () {

    //Logout
    Route::get('/logout','UserController@logout')->name('logout');

    Route::get('/bride-groom', 'MyProfileController@brideGroomIndex')->name('bride-groom');

    Route::get('/family-details', function () {
        return view('editprofile/family-details');
    })->name('family-details');

    Route::get('/my-profile-side', function () {
        return view('editprofile/myprof-side');
    })->name('myprof-side');

    Route::get('/horoscope-details', function () {
        return view('editprofile/horoscope-details');
    })->name('horoscope-details');

    Route::get('/hobbies-interest', function () {
        return view('editprofile/hobbies-interest');
    })->name('hobbies-interest');

    Route::get('/education-occupation', function () {
        return view('editprofile/education-occupation');
    })->name('education-occupation');

    Route::get('/location-detail', function () {
        return view('location-detail');
    })->name('location-detail');

    Route::get('/physical-attribute', function () {
        return view('editprofile/physical-attributee');
    })->name('physical-attributee');

    Route::get('/intercaste-parents', function () {
        return view('editprofile/intercaste-parents');
    })->name('intercaste-parents');

    Route::get('/others', function () {
        return view('editprofile/others');
    })->name('others');

    Route::get('/habits', function () {
        return view('editprofile/habits');
    })->name('habits');

    Route::get('/partner-preference', function () {
        return view('editprofile/partner-preference');
    })->name('partner-preference');

    Route::get('/address-details', function () {
        return view('editprofile/address-details');
    })->name('address-details');
});
/////////     Edit Profile Ends here //////////////

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
    return view('editprofile/my-profile');
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
