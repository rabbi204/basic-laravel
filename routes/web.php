<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePass;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Models\Brand;
use App\Models\HomeAbout;
use App\Models\Multipic;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/', function () {
    $brands= Brand::all();
    $abouts= HomeAbout::first();
    $multipics = Multipic::all();
    return view('home',compact('brands','abouts','multipics'));
});

Route::get('/home', function () {
    echo "This is home page";
}) ;

// category route
Route::get('category/all', [CategoryController::class, 'allCategory']) -> name('all.category');
Route::post('category/add', [CategoryController::class, 'addCategory']) -> name('store.category');
Route::get('category/edit/{id}', [CategoryController::class, 'editCategory']) -> name('category.edit');
Route::post('category/update/{id}', [CategoryController::class, 'updateCategory']) -> name('category.update');
Route::get('softDelete/category/{id}', [CategoryController::class, 'softDelete']) -> name('softDelete.category');
Route::get('category/restore/{id}', [CategoryController::class, 'restoreCategory']) -> name('category.restore');
Route::get('category/permanently-delete/{id}', [CategoryController::class, 'permanentlyDeleteCategory']) -> name('category.permanentlyDelete');

// brand route
Route::get('brand/all', [BrandController::class, 'allBrand']) -> name('all.brand');
Route::post('brand/add', [BrandController::class, 'storeBrand']) -> name('brand.store');
Route::get('brand/edit/{id}', [BrandController::class, 'editBrand']) -> name('brand.edit');
Route::post('brand/update/{id}', [BrandController::class, 'updateBrand']) -> name('brand.update');
Route::get('brand/delete/{id}', [BrandController::class, 'deleteBrand']) -> name('brand.delete');


// Multi image route
Route::get('multi/image', [BrandController::class, 'multiPicture']) -> name('multi.image');
Route::post('multi/add', [BrandController::class, 'storeImage']) -> name('store.image');

// user logout route from admin dashborad
Route::get('user/logout', [AdminController::class, 'userLogout']) -> name('user.logout');

//admin all route
Route::get('home/slider', [HomeController::class, 'homeSlider']) -> name('home.slider');
Route::get('add/slider', [HomeController::class, 'addSlider']) -> name('add.slider');
Route::post('store/slider', [HomeController::class, 'storeSlider']) -> name('store.slider');
Route::get('slider/edit/{id}', [HomeController::class, 'editSlider']) -> name('slider.edit');
Route::post('slider/update/{id}', [HomeController::class, 'updateSlider']) -> name('slider.update');
Route::get('slider/delete/{id}', [HomeController::class, 'deleteSlider']) -> name('slider.delete');

// home about all route
Route::get('home/about', [AboutController::class, 'homeAbout']) -> name('home.about');
Route::get('add/about', [AboutController::class, 'addAbout']) -> name('add.about');
Route::post('about/store', [AboutController::class, 'storeAbout']) -> name('about.store');
Route::get('about/edit/{id}', [AboutController::class, 'editAbout']) -> name('about.edit');
Route::post('about/update/{id}', [AboutController::class, 'updateAbout']) -> name('about.update');
Route::get('about/delete/{id}', [AboutController::class, 'deleteAbout']) -> name('about.delete');

// portfolio page route
Route::get('portfolio', [AboutController::class, 'portfolio']) -> name('portfolio');

// Contact route
Route::get('admin/contact', [ContactController::class, 'contactAdmin']) -> name('admin.contact');
Route::get('admin/contact/add', [ContactController::class, 'adminAddContract']) -> name('admin.add.contact');
Route::post('admin/contact/store', [ContactController::class, 'adminContactStore']) -> name('store.contact');
Route::get('admin/contact/edit/{id}', [ContactController::class, 'adminContactEdit']) -> name('admin.contact.edit');
Route::post('admin/contact/update/{id}', [ContactController::class, 'adminContactUpdate']) -> name('admin.contact.update');
Route::get('admin/contact/delete/{id}', [ContactController::class, 'adminContactDelete']) -> name('admin.contact.delete');

// Home Contact page route
Route::get('contact', [ContactController::class, 'contact']) -> name('contact');
// home contact page send message
Route::post('contact/form', [ContactController::class, 'contactForm']) -> name('contact.form');
Route::get('admin/message', [ContactController::class, 'adminMessage']) -> name('admin.message');
Route::get('admin/message-delete/{id}', [ContactController::class, 'adminMessageDelete']) -> name('admin.message.delete');

// change password user route
Route::get('user/password', [ChangePass::class, 'changePassword']) -> name('change.password');
Route::post('password/update', [ChangePass::class, 'updatePassword']) -> name('password.update');

// profile update
Route::get('user/profile', [ChangePass::class, 'profileUpdate']) -> name('profile.update');
Route::post('user/profile/update', [ChangePass::class, 'updateUserProfile']) -> name('update.user.profile');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    // $users = User::all();

    // $users= DB::table('users') -> get();

    return view('admin.index');
})->name('dashboard');
