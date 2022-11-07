<?php

use App\Http\Livewire\Backend\Dashboard;
use App\Http\Livewire\Backend\Pages\Banner\AddHomeBanner;
use App\Http\Livewire\Backend\Pages\Banner\EditHomeBanner;
use App\Http\Livewire\Backend\Pages\Banner\HomeBanner;
use App\Http\Livewire\Backend\Pages\Footer\AddFooterAddress;
use App\Http\Livewire\Backend\Pages\Footer\EditFooterAddress;
use App\Http\Livewire\Backend\Pages\Footer\FooterAddress;
use App\Http\Livewire\Backend\Pages\Home\Clients\AddHomeClients;
use App\Http\Livewire\Backend\Pages\Home\Clients\EditHomeClients;
use App\Http\Livewire\Backend\Pages\Home\Clients\ViewHomeClients;
use App\Http\Livewire\Backend\Pages\Home\Sections\AddHomeSection1;
use App\Http\Livewire\Backend\Pages\Home\Sections\AddHomeSection2;
use App\Http\Livewire\Backend\Pages\Home\Sections\AddHomeSection5;
use App\Http\Livewire\Backend\Pages\Home\Sections\EditHomeSection1;
use App\Http\Livewire\Backend\Pages\Home\Sections\EditHomeSection2;
use App\Http\Livewire\Backend\Pages\Home\Sections\EditHomeSection5;
use App\Http\Livewire\Backend\Pages\Home\Sections\ViewHomeSection1;
use App\Http\Livewire\Backend\Pages\Home\Sections\ViewHomeSection2;
use App\Http\Livewire\Backend\Pages\Home\Sections\ViewHomeSection5;
use App\Http\Livewire\Backend\Pages\Home\Slider\AddHomeSliders;
use App\Http\Livewire\Backend\Pages\Home\Slider\EditHomeSliders;
use App\Http\Livewire\Backend\Pages\Home\Slider\ViewHomeSliders;
use App\Http\Livewire\Frontend\Agb;
use App\Http\Livewire\Frontend\BaustellenbewacHung;
use App\Http\Livewire\Frontend\Centerbewachung;
use App\Http\Livewire\Frontend\Contact;
use App\Http\Livewire\Frontend\Datenschutz;
use App\Http\Livewire\Frontend\HomePage;
use App\Http\Livewire\Frontend\Impressum;
use App\Http\Livewire\Frontend\Jobs;
use App\Http\Livewire\Frontend\Kaufhausdetektive;
use App\Http\Livewire\Frontend\ObjektUndWerkschutz;
use App\Http\Livewire\Frontend\OpeningAndClosingService;
use App\Http\Livewire\Frontend\RevierFahrten;
use App\Http\Livewire\Frontend\ShopGuard;
use App\Http\Livewire\Frontend\Unternehmen;
use App\Http\Livewire\Frontend\VeranstaltungsSchutz;
use Illuminate\Support\Facades\Route;

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

//================ start Frontend routes ================
// homepage 
Route::get('/', HomePage::class)->name('homePage');
// ObjektPage 
Route::get('/objekt-und-werkschutz', ObjektUndWerkschutz::class)->name('ObjektPage');
// Centerbewachung
Route::get('/centerbewachung', Centerbewachung::class)->name('CenterbewachungPage');
// Kaufhausdetektive
Route::get('/kaufhausdetektive', Kaufhausdetektive::class)->name('KaufhausdetektivePage');
// BaustellenbewacHung
Route::get('/baustellenbewachung', BaustellenbewacHung::class)->name('baustellenbewachungPage');
// OpeningAndClosingService
Route::get('/opening-and-closing-service', OpeningAndClosingService::class)->name('openingAndclosingPage');
// RevierFahrten
Route::get('/revierfahrten', RevierFahrten::class)->name('revierfahrtenPage');
// ShopGuard
Route::get('/shop-guard', ShopGuard::class)->name('ShopGuardPage');
// VeranstaltungsSchutz
Route::get('/veranstaltungsschutz', VeranstaltungsSchutz::class)->name('VeranstaltungsSchutzPage');
// Unternehmen
Route::get('/unternehmen', Unternehmen::class)->name('UnternehmenPage');
// Jobs
Route::get('/jobs', Jobs::class)->name('JobsPage');
// Contact
Route::get('/contact', Contact::class)->name('ContactPage');
// Impressum
Route::get('/impressum', Impressum::class)->name('ImpressumPage');
// Datenschutz
Route::get('/datenschutz', Datenschutz::class)->name('DatenschutzPage');
// Agb
Route::get('/agb', Agb::class)->name('AgbPage');
//================ end Frontend routes ================
//================ start Admin routes ================

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
Route::group(['middleware' => ['adminlogin']], function () {
  Route::get('/dashboard', Dashboard::class)->name('dashboard');
// Manage home page 
    Route::group(['prefix' =>'mange-banner'], function () {
        Route::get('/view-banner', HomeBanner::class)->name('viewHomebanner');
        Route::get('/add-banner', AddHomeBanner::class)->name('addHomebanner');
        Route::get('/edit-banner/{id}', EditHomeBanner::class)->name('editHomebanner');
});
    //============== home page Section1 ==============
    Route::group(['prefix' =>'manage-home'], function () {
        // Home Section1    
        Route::get('/view-section/one', ViewHomeSection1::class)->name('manageHomeSection1');
        Route::get('/add-section/one', AddHomeSection1::class)->name('addHomesection1');
        Route::get('/edit-section/one/{id}', EditHomeSection1::class)->name('editHomesection1');
        // Home Section2
        Route::get('/view-section/two', ViewHomeSection2::class)->name('viewHomeSection2');
        Route::get('/add-section/two', AddHomeSection2::class)->name('add_HomeSection2');
        Route::get('/edit-section/two/{id}', EditHomeSection2::class)->name('edit_HomeSection2');
        // View Home Clients
        Route::get('/view-client/logo', ViewHomeClients::class)->name('viewHomeclients');
        Route::get('/add-client/logo', AddHomeClients::class)->name('addHomeclients');
        Route::get('/edit-client/logo/{id}', EditHomeClients::class)->name('editHomeclients');
        // View Home Sliders
        Route::get('/view-home/slider', ViewHomeSliders::class)->name('viewHomesliders');
        Route::get('/add-home/slider', AddHomeSliders::class)->name('addHomesliders');
        Route::get('/edit-home/slider/{id}', EditHomeSliders::class)->name('editHomesliders');
        // ViewHomeSection5
        Route::get('/view-home/section/five', ViewHomeSection5::class)->name('ViewHomeSection5');
        Route::get('/add-home/section/five', AddHomeSection5::class)->name('Add_Home_Section5'); 
        Route::get('/edit-home/section/five/{id}', EditHomeSection5::class)->name('edit_Home_Section5');
   
});   
    Route::group(['prefix' =>'manage-footer'], function () {
        // FooterAddress
        Route::get('/view', FooterAddress::class)->name('footer_address');
        Route::get('/add', AddFooterAddress::class)->name('Add_footer_address');
        Route::get('/edit/{id}', EditFooterAddress::class)->name('edit_footer_address');

        

        
        
    });

    });
    //============== home page Section1 ==============
    
// Manage home page 


});
//================ end admin routes ================
