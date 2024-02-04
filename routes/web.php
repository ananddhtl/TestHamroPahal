<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicUserController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\RegisterEventAttendesController;
use App\Http\Controllers\RefrenceUserController;
use App\Http\Controllers\ParentPageController;
use App\Http\Controllers\ChildPageController;
use App\Http\Controllers\ParentContentController;
use App\Http\Controllers\ChildContentController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FAQController;
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
Route::get('/login', function () {
    return view('frontend.login');
});
Route::get('/register', function () {
    return view('frontend.register');
});

Route::get('/admin-dashboard', function () {
    return view('backend.dashboard');
});
Route::get('/admin-addeventdescription', function () {
    return view('backend.events.add');
});
Route::get('/admin-addevent', function () {
    return view('backend.events.addevent');
});

Route::get('/forget-password', function () {
    return view('frontend.forgetpassword');
});

Route::get('/changepassword', function () {
    return view('frontend.changepassword');
});

Route::get('/admin-register', function () {
    return view('backend.auth.register');
});

Route::get('/event-template', function () {
    return view('frontend.emailtemplate.eventregistered');
});

Route::post('/addUserData', [PublicUserController::class, 'store']);
Route::post('/userLogin', [PublicUserController::class, 'login']);
Route::get('/logout-user', function () {
    session()->forget('sessionUserId');
    return redirect('/')->with('message','You have been logged out');
});
Route::post('/updateuser-password', [PublicUserController::class, 'updatePassword']);
Route::post('/user-submitemail', [PublicUserController::class, 'forgetPassword']);
Route::POST('/user-updatepassword', [PublicUserController::class, 'updateForgetPassword']);
Route::post('/user-updateuserinformation', [PublicUserController::class, 'updateUserInformation']);
Route::get('/user-profile', [PublicUserController::class, 'userinformation']);

Route::get('/', [FrontendController::class, 'homepage']);
Route::get('/ourblog', [FrontendController::class, 'blogpage']);
Route::get('/ourblog-description/{id}', [FrontendController::class, 'blogdescription']);
Route::get('/event-description/{id}', [FrontendController::class, 'eventDescription']);
Route::get('/eventregister-checkout/{id}', [FrontendController::class, 'eventcheckout']);


Route::post('/event-register', [RegisterEventAttendesController::class, 'store']);
Route::post('/user-addrefrenceuser', [RefrenceUserController::class, 'store']);
Route::get('/deleterefrence-user/{id}', [RefrenceUserController::class, 'destroy']);

Route::get('/admin-login', [AdminController::class, 'adminloginpage'])->name('adminlogin');
Route::post('/store-adminlogin', [AdminController::class, 'userlogin']);
Route::post('/store-adminregister', [AdminController::class, 'userregister']);


Route::get('/', [FrontendController::class, 'homepage']);
Route::get('/event-description/{id}', [FrontendController::class, 'eventDescription']);
Route::get('/eventregister-checkout/{id}', [FrontendController::class, 'eventcheckout']);
Route::get('/contactus', [FrontendController::class, 'contactus']);
Route::get('/faqs', [FrontendController::class, 'faqs']);


Route::middleware(['auth'])->group(function () {


    Route::post('/store-eventsdata', [EventsController::class, 'store']);
    Route::get('/admin-eventdescription', [EventsController::class, 'index']);
    Route::get('/edit-eventsdata/{id}', [EventsController::class, 'edit']);
    Route::post('/destroy-eventsdata/{id}', [EventsController::class, 'destroy']);
    Route::post('/update-eventsdata/{id}', [EventsController::class, 'update']);
    Route::get('/logoutuser', [AdminController::class, 'logoutuser']);
    Route::get('/admin-report', [EventsController::class, 'geteventreport']);
    Route::get('/admin-eventattendes/{id}', [EventsController::class, 'geteventattendes']);

    Route::get('/admin-addparentpage', [ParentPageController::class, 'index']);
    Route::post('/parentpage-data', [ParentPageController::class, 'store']);


    Route::get('/admin-listparentcontent', [ParentContentController::class, 'index']);
    Route::get('/admin-addparentcontentpage', [ParentContentController::class, 'parentpage']);
    Route::post('/admin-addparentcontent', [ParentContentController::class, 'store']);

    Route::get('/admin-childpage', [ChildPageController::class, 'childpage']);
    Route::get('/admin-childpagelist', [ChildPageController::class, 'index']);
    Route::post('/admin-childpagedata', [ChildPageController::class, 'store']);


    Route::get('/admin-listchildcontent', [ChildContentController::class, 'index']);
    Route::get('/admin-addchildcontent', [ChildContentController::class, 'childcontent']);
    Route::get('/get/submenu/{parentpage_id}', [ChildContentController::class, 'getsubmenu']);
    Route::post('/admin-storechildcontent', [ChildContentController::class, 'store']);


    Route::get('/admin-listtestimonials', [TestimonialsController::class, 'index']);
    Route::get('/admin-addtestimonials', [TestimonialsController::class, 'addtestimonialpage']);
    Route::post('/admin-storetestimonials', [TestimonialsController::class, 'store']);


    Route::get('/admin-addblogs', [BlogController::class, 'addblogpage']);
    Route::get('/admin-listblogs', [BlogController::class, 'index']);
    Route::post('/admin-storeblogs', [BlogController::class, 'store']);
    
    Route::get('/admin-listfaqs', [FAQController::class, 'index']);
    Route::get('/admin-addfaqs', [FAQController::class, 'addfaqspage']);
    Route::post('/admin-storefaqs', [FAQController::class, 'store']);

    Route::get('/getrefrenceusers/{tCode}', [RefrenceUserController::class, 'getrefrenceusers']);


});
