<?php

use App\Http\Controllers\Admin\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Admin\SiteIdentityController;
use App\Http\Controllers\Admin\HeaderContactController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\AboutInfosController;
use App\Http\Controllers\Admin\HomeServiceController;
use App\Http\Controllers\Admin\WhyChoosController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});
//=============== Admin Routes ==================//
Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');


//============ Frontend Slider Menegement ================//
Route::prefix('admin/sliders/')->group(function(){
    Route::get('all', [SliderController::class, 'sliders'])->name('all.sliders');
    Route::get('create/new-slider', [SliderController::class, 'createSlider'])->name('create.slider');
    Route::post('store/new-slider', [SliderController::class, 'storeSlider'])->name('store.slider');
    Route::get('edit/slider/{sl_id}', [SliderController::class, 'editSlider'])->name('edit.slider');
    Route::post('update/slider', [SliderController::class, 'updateSlider'])->name('update.slider');
    Route::get('trash/slider/{id}}', [SliderController::class, 'trashSlider'])->name('trash.slider');
    Route::get('trashed/sliders', [SliderController::class, 'trashedSliders'])->name('trashed.slider');
    Route::get('restore/slider/{id}', [SliderController::class, 'restoreSlider'])->name('restore.slider');
    Route::get('permanent/delete/slider/{id}', [SliderController::class, 'deleteSlider'])->name('delete.slider');
});

//================ Site Identity ==============//
Route::get('/admin/site/identity/settings', [SiteIdentityController::class, 'siteIdentitySettings'])->name('site.identity.settings');
Route::post('/admin/site/identity/update/{iden_id}', [SiteIdentityController::class, 'siteIdentityUpdate'])->name('site.identity.update');   

//==============Header Contacts ============//
Route::get('/admin/top/header/settings', [HeaderContactController::class, 'HeaderSettings'])->name('header.settings');
Route::post('/admin/top/header/update/{thead_id}', [HeaderContactController::class, 'HeaderUpdate'])->name('header.update'); 

//==============Footer Settings ============//
Route::get('/admin/footer/settings', [FooterController::class, 'footerSettings'])->name('footer.settings');
Route::post('/admin/footer/settings/update/{foot_id}', [FooterController::class, 'footerUpdate'])->name('footer.update');   

//======================= Pages ===================//
Route::get('/admin/all/pages', [PageController::class, 'index'])->name('all.pages');
Route::get('/admin/create/pages', [PageController::class, 'createPage'])->name('create.page');
Route::post('/admin/store/page', [PageController::class, 'storePage'])->name('store.page');
Route::get('/admin/edit/page/{page_id}', [PageController::class, 'editPage'])->name('edit.page');
Route::post('/admin/update/page', [PageController::class, 'updatePage'])->name('update.page');
Route::get('/admin/delete/page/{id}', [PageController::class, 'deletePage'])->name('delete.page');

//===================Home Page display==============//

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/admin/home/services', [HomeServiceController::class, 'hServices'])->name('home.services');
Route::post('/admin/update/home/services/{serv_id}', [HomeServiceController::class, 'hServiceUpdate'])->name('home.services.update'); 

Route::get('/admin/home/choose', [WhyChoosController::class, 'chooses'])->name('chooses');
Route::post('/admin/update/home/choose/{choos_id}', [WhyChoosController::class, 'chooseUpdate'])->name('home.chooses.update'); 



//===================Front About pages display==============//
Route::get('/about-us', [IndexController::class, 'about']);
Route::get('/admin/about/informations', [AboutInfosController::class, 'aboutSettings'])->name('about.settings');
Route::post('/admin/update/about/informations/{abt_id}', [AboutInfosController::class, 'aboutUpdate'])->name('about.update'); 

//===========Contact page information =============//
Route::get('/admin/settings/reach', [ContactController::class, 'reachUs'])->name('contact.settings');
Route::post('/admin/contact/update/{contact_id}', [ContactController::class, 'contactUpdadte'])->name('contact.update');
Route::post('/contact/form', [ContactController::class, 'userContactForm'])->name('contact.store');
Route::get('/admin/contact/message', [ContactController::class, 'adminMessage'])->name('admin.message');
Route::get('/admin/message/view/{msg_id}', [ContactController::class, 'viewMessage'])->name('view.message');
Route::get('/admin/message/delete/{id}', [ContactController::class, 'deleteMessage'])->name('delete.message');

Route::get('/contact-us', [IndexController::class, 'userContact'])->name('user.cform');

Route::get('/services', [IndexController::class, 'services']);

Route::get('/housing-management', [IndexController::class, 'HousingManage']);

Route::get('/construction-planning', [IndexController::class, 'consPlanning']);

Route::get('/architecture-design', [IndexController::class, 'archDesign']);

Route::get('/interior-planning', [IndexController::class, 'intDesign']);
