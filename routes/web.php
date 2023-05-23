<?php

use App\Http\Controllers\admin\AdminFAQController;
use App\Http\Controllers\admin\BannerImageController;
use App\Http\Controllers\admin\ChangePasswordController;
use App\Http\Controllers\admin\CommonController;
use App\Http\Controllers\admin\ContactUsController;
use App\Http\Controllers\admin\ContentPageController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DbBackupController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\StaffController;
use App\Http\Controllers\admin\UserController;
use App\Models\Permission;
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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'doLogin'])->name('dologin');

    Route::group(['middleware' => 'isLogin'], function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        Route::controller(ProfileController::class)->group(function () {
            Route::get('profile', 'profile')->name('profile');
            Route::post('profile', 'updateProfile')->name('update.profile');
        });

        Route::controller(ChangePasswordController::class)->group(function () {
            Route::get('change-password', 'changePasswordForm')->name('change.password.form');
            Route::post('change-password', 'changePassword')->name('change.password');
        });

        Route::controller(UserController::class)->group(function () {
            Route::post('user/block', 'userBlock')->name('user.block');
            Route::post('user/dective', 'userDective')->name('user.dective');
        });

        Route::post('product-visibility', [ProductController::class, 'visibility'])->name('product.visibility');

        Route::resources([
            'user' => UserController::class,
            'product' => ProductController::class,
        ]);
            //Staff

        // Staff Module
        Route::get('staff', [StaffController::class,'index'])->name('staff_listing');
        Route::get('staff/add', [StaffController::class,'create'])->name('staff_add_form');;
        Route::post('staff/add', [StaffController::class,'store'])->name('staff_store');;
        Route::get('staff/view/{id}',  [StaffController::class,'show'])->name('staff_show');
        Route::get('staff/view/{id}',  [StaffController::class,'show'])->name('staff_show');
        Route::get('staff/edit/{id}', [StaffController::class,'edit'])->name('staff_edit');
        Route::post('staff/edit', [StaffController::class,'update'])->name('staff_update');
        Route::get('staff/block-unblock/{id}', [StaffController::class,'block_unblock'])->name('staff_block_unblock');

        Route::get('staff/delete/{id}', [StaffController::class,'destroy'])->name('staff_destroy');


        Route::middleware("ensure_permission:".Permission::Faqs)->controller(AdminFAQController::class)->group(function() {
             // FAQ Module
            Route::get('faq', 'index')->name('Faqlisting');
            Route::get('faq/add', 'create')->name('faqadd');
            Route::post('faq/add', 'store')->name('faqstore');
            Route::get('faq/edit/{id}', 'edit')->name('faqedit');
            Route::put('faq/edit/{id}', 'update')->name('faqupdate');
            Route::get('faq/delete/{id}', 'destroy')->name('faqdelete');;
        });

        Route::middleware("ensure_permission:".Permission::Contents)->controller(ContentPageController::class)->group(function() {
            Route::get('/content/{page}', 'index')->name('content_show');
            Route::get('/content/{page}/edit', 'edit')->name('content_edit');
            Route::post('/content/{page}', 'store')->name('content_store_update');
        });

        Route::get('homepage', [BannerImageController::class,'index'])->name('homepage_listing');

        Route::get('homepage/add', [BannerImageController::class,'create'])->name('homepage_banner_add');
        Route::post('homepage/add', [BannerImageController::class,'store'])->name('homepage_banner_store');
        Route::get('homepage/edit/{id}', [BannerImageController::class,'edit'])->name('homepage_banner_edit');

        Route::post('homepage/edit/{id}', [BannerImageController::class,'update'])->name('homepage_banner_update');
        Route::get('homepage/delete/{id}', [BannerImageController::class,'destroy'])->name('homepage_banner_delete');

        Route::middleware("ensure_permission:".Permission::Contact)->controller( ContactUsController::class)->group(function() {
            Route::get('/contact-us', 'index')->name('contactus');
            Route::get('/contact-us/{id}/delete', 'destroy')->name('contactus_delete');
        });


        Route::middleware("ensure_permission:".Permission::DBBackup)->controller(DbBackupController::class)->group(function() {
            Route::get('database', 'index')->name('db.backup.form');
            Route::get('database-download', 'createDownload')->name('db.backup.download');

        });
    });
});
Route::get('/access-denied', function (){
    echo "access denied";
});

Route::get('/', function (){
   return redirect('/admin/login');
});

// Notification Module
Route::view('notification', 'admin/notification');
// Content List Module
Route::view('commission', 'admin/content-list/commission');

Route::get('images/{filename}', [CommonController::class,'show_image'])->name('image.displayImage');
