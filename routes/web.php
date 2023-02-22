<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\frontend\WebController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ApplyFromController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\Install\InstallController;
use App\Http\Controllers\backend\home\FeaturedController;
use App\Http\Controllers\backend\Contact\Contactcontroller;
use App\Http\Controllers\backend\job\JobePositionController;
use App\Http\Controllers\backend\home\ClientReviewControlller;
use App\Http\Controllers\frontend\SocialShareButtonsController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/case-study', [WebController::class, 'case_study'])->name('case_study');
Route::get('/case-study-view', [WebController::class, 'case_study_view'])->name('case_study_view');
Route::get('/how-we-work', [WebController::class, 'how_we_work'])->name('how_we_work');
Route::get('/project-base-solution', [WebController::class, 'project_base'])->name('project_base');
Route::get('/dedicated-team', [WebController::class, 'dedicated_team'])->name('dedicated_team');
Route::get('/contact', [WebController::class, 'contact'])->name('contact_us');
Route::post('contact-stor', [WebController::class, 'contact_stor'])->name('contact_stor');
Route::get('/career', [WebController::class, 'career'])->name('career');
Route::get('/basicInformation/{id}', [WebController::class, 'basicInformation'])->name('basicInformation');
Route::post('/apply-now', [WebController::class, 'apply_now'])->name('apply_now');
Route::get('/job-details/{id}', [WebController::class, 'job_details'])->name('job_details');
Route::get('/fileup', [WebController::class, 'fileup']);
Route::post('/upload-doc-file', [WebController::class, 'uploadToServer'])->name('file.store');

Route::middleware(['install'])->group(function () {

    Auth::routes(['register' => false]);

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/sign-up', function () {
        return view('backend.pages.sign-up');
    });
    Route::get('/social-media-share', [SocialShareButtonsController::class, 'ShareWidget']);

    Route::group(['prefix' => 'root'], function () {
        Route::get('/emroot', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
        Route::post('/emroot', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
    });

    Route::middleware(['auth', 'active'])->group(function () {
        Route::group(['prefix' => 'root'], function () {
            Route::get('home', [PageController::class, 'home'])->name('home');

            Route::resource('client-review', ClientReviewControlller::class);
            Route::resource('featured', FeaturedController::class);
            Route::resource('admin', AdminController::class);
            Route::resource('contact-us', Contactcontroller::class);
            Route::get('/download/{image}', [Contactcontroller::class, 'download']);
            Route::get('/chack', [Contactcontroller::class, 'chack']);

            Route::resource('job-post', JobePositionController::class);
            Route::resource('apply-form', ApplyFromController::class);
            Route::get('apply-form/download/{file}', [ApplyFromController::class, 'pdf_download'])->name('pdf_download');

            Route::any('general_settings', [SettingController::class, 'general'])->name('general_settings');
            Route::post('general_settings', [SettingController::class, 'store_settings'])->name('general_settings');
            Route::post('general_settings_phone', [SettingController::class, 'general_settings_phone'])->name('general_settings_phone');


            Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
            Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        });
    });
});


Route::get('/cache', function () {
    cache()->flush();
    return redirect()->back()->with('success', _lang('Cache Clear successfully.'));
});

// Installtion Process
Route::get('/installation', [InstallController::class, 'index']);
Route::get('/install/database', [InstallController::class, 'database']);
Route::post('/install/process_install', [InstallController::class, 'process_install']);
Route::get('/install/create_user', [InstallController::class, 'create_user']);
Route::post('/install/store_user', [InstallController::class, 'store_user']);
Route::get('/install/system_settings', [InstallController::class, 'system_settings']);
Route::post('/install/finish', [InstallController::class, 'final_touch']);
