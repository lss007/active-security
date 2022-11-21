<?php

use App\Http\Controllers\UserLogoutController;
use App\Http\Livewire\Backend\Dashboard;
use App\Http\Livewire\Backend\Pages\Agb\AddAgbPage;
use App\Http\Livewire\Backend\Pages\Agb\EditAgbPage;
use App\Http\Livewire\Backend\Pages\Agb\ViewAgbPage;
use App\Http\Livewire\Backend\Pages\AllBanners\AddAllBanners;
use App\Http\Livewire\Backend\Pages\AllBanners\EditAllBanners;
use App\Http\Livewire\Backend\Pages\AllBanners\ViewAllBanners;
use App\Http\Livewire\Backend\Pages\Banner\AddHomeBanner;
use App\Http\Livewire\Backend\Pages\Banner\EditHomeBanner;
use App\Http\Livewire\Backend\Pages\Banner\HomeBanner;
use App\Http\Livewire\Backend\Pages\Company\AddSectionOne;
use App\Http\Livewire\Backend\Pages\Company\AddSectionTwo;
use App\Http\Livewire\Backend\Pages\Company\EditSectionOne;
use App\Http\Livewire\Backend\Pages\Company\EditSectionTwo;
use App\Http\Livewire\Backend\Pages\Company\ViewSectionOne;
use App\Http\Livewire\Backend\Pages\Company\ViewSectionTwo;
use App\Http\Livewire\Backend\Pages\Contacts\AddContactSection;
use App\Http\Livewire\Backend\Pages\Contacts\EditContactSection;
use App\Http\Livewire\Backend\Pages\Contacts\ViewContacts;
use App\Http\Livewire\Backend\Pages\Contacts\ViewContactSection;
use App\Http\Livewire\Backend\Pages\Footer\AddFooterAddress;
use App\Http\Livewire\Backend\Pages\Footer\EditFooterAddress;
use App\Http\Livewire\Backend\Pages\Footer\FooterAddress;
use App\Http\Livewire\Backend\Pages\Footer\Logos\EditFooterLogo;
use App\Http\Livewire\Backend\Pages\Footer\Logos\ViewFooterLogo;
use App\Http\Livewire\Backend\Pages\Footer\Privacy\AddPrivacySettings;
use App\Http\Livewire\Backend\Pages\Footer\Privacy\EditPrivacySettings;
use App\Http\Livewire\Backend\Pages\Footer\Privacy\Tabs\AddPrivacySettingsTab;
use App\Http\Livewire\Backend\Pages\Footer\Privacy\Tabs\EditPrivacySettingsTab;
use App\Http\Livewire\Backend\Pages\Footer\Privacy\Tabs\ViewPrivacySettingsTab;
use App\Http\Livewire\Backend\Pages\Footer\Privacy\ViewPrivacySettings;
use App\Http\Livewire\Backend\Pages\Footer\Social\AddSocialCategory;
use App\Http\Livewire\Backend\Pages\Footer\Social\AddSocialMedia;
use App\Http\Livewire\Backend\Pages\Footer\Social\EditSocialCategory;
use App\Http\Livewire\Backend\Pages\Footer\Social\EditSocialMedia;
use App\Http\Livewire\Backend\Pages\Footer\Social\ViewSocialCategory;
use App\Http\Livewire\Backend\Pages\Footer\Social\ViewSocialMedia;
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
use App\Http\Livewire\Backend\Pages\Job\AddJobSection;
use App\Http\Livewire\Backend\Pages\Job\EditJobSection;
use App\Http\Livewire\Backend\Pages\Job\ViewJobSection;
use App\Http\Livewire\Backend\Pages\Privacy\AddFooterPrivacy;
use App\Http\Livewire\Backend\Pages\Privacy\EditFooterPrivacy;
use App\Http\Livewire\Backend\Pages\Privacy\ViewFooterPrivacy;
use App\Http\Livewire\Backend\Pages\Services\AddServices;
use App\Http\Livewire\Backend\Pages\Services\Banner\EditBanners;
use App\Http\Livewire\Backend\Pages\Services\Banner\ViewBanners;
use App\Http\Livewire\Backend\Pages\Services\EditServices;
use App\Http\Livewire\Backend\Pages\Services\Section\AddLastSection;
use App\Http\Livewire\Backend\Pages\Services\Section\EditLastSection;
use App\Http\Livewire\Backend\Pages\Services\Section\ViewLastSection;
use App\Http\Livewire\Backend\Pages\Services\ViewServices;
use App\Http\Livewire\Frontend\Agb;
use App\Http\Livewire\Frontend\BaustellenbewacHung;
use App\Http\Livewire\Frontend\Centerbewachung;
use App\Http\Livewire\Frontend\Contact;
use App\Http\Livewire\Frontend\Datenschutz;
use App\Http\Livewire\Frontend\Empfangsdienst;
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
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//================ start Frontend routes ================
// homepage 


Route::get('Userlogout', [UserLogoutController::class, 'user_logout'])->name('user.logout');
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

// Empfangsdienst
Route::get('/empfangsdienst', Empfangsdienst::class)->name('empfangsdienst');

// ShopGuard
Route::get('/shop-guard', ShopGuard::class)->name('ShopGuardPage');
// VeranstaltungsSchutz
Route::get('/veranstaltungsschutz', VeranstaltungsSchutz::class)->name('VeranstaltungsSchutzPage');
// Unternehmen
Route::get('/unternehmen', Unternehmen::class)->name('UnternehmenPage');
// Jobs
Route::get('/jobs', Jobs::class)->name('JobsPage');
// Contact
Route::get('/Kontakt', Contact::class)->name('ContactPage');
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
// Manage other pages banner 
Route::group(['prefix' =>'mange-All-banner'], function () {
    Route::get('/view', ViewAllBanners::class)->name('view_all_banner');
    Route::get('/add', AddAllBanners::class)->name('add_all_banners');
    Route::get('/edit/{id}', EditAllBanners::class)->name('edit_all_banner');
 
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
         Route::get('/contact-view', FooterAddress::class)->name('footer_address');
         Route::get('/contact-add', AddFooterAddress::class)->name('Add_footer_address');
         Route::get('/contact-edit/{id}', EditFooterAddress::class)->name('edit_footer_address');
Route::group(['prefix' =>'social'], function () {
        // ViewSocialMedia
         Route::get('/view', ViewSocialMedia::class)->name('view_social_media');
         Route::get('/add', AddSocialMedia::class)->name('add_social_media');
         Route::get('/edit/{id}', EditSocialMedia::class)->name('edit_social_media');
        
         Route::get('/view-category', ViewSocialCategory::class)->name('view_socialMediaCat');
         Route::get('/add-category', AddSocialCategory::class)->name('Add_socialMediaCat');
         Route::get('/edit-category/{id}', EditSocialCategory::class)->name('edit_socialMediaCat');
        
     }); 

    //  ViewFooterLogo
Route::group(['prefix' =>'logos'], function () {
         Route::get('/view', ViewFooterLogo::class)->name('view_footer_logos');
         Route::get('/edit/{id}', EditFooterLogo::class)->name('edit_footer_logos');
     }); 

    //  
Route::group(['prefix' =>'privacy'],function(){
         Route::get('/view', ViewPrivacySettings::class)->name('view_privacy_settings');
         Route::get('/add', AddPrivacySettings::class)->name('add_privacy_settings');
         Route::get('/edit/{id}', EditPrivacySettings::class)->name('edit_privacy_settings');
         }); 
         Route::get('/view-tab', ViewPrivacySettingsTab::class)->name('view_privacy_Tabs');
         Route::get('/add-tab', AddPrivacySettingsTab::class)->name('add_privacy_Tabs');
         Route::get('/edit-tab/{id}', EditPrivacySettingsTab::class)->name('edit_privacy_Tabs');

         Route::get('/page-view', ViewFooterPrivacy::class)->name('footer_Privacy_pageView');
         Route::get('/page-add', AddFooterPrivacy::class)->name('addfooter_Privacytext');
         Route::get('/page-edit/{id}', EditFooterPrivacy::class)->name('editfooter_Privacytext');
    });

Route::group(['prefix' =>'agb-page'], function () {
        Route::get('/view', ViewAgbPage::class)->name('agb_page_view');
        Route::get('/add', AddAgbPage::class)->name('agb_page_add');
        Route::get('/edit/{id}', EditAgbPage::class)->name('agb_page_edit');
});
Route::group(['prefix' =>'services'], function () {
        Route::get('/view', ViewServices::class)->name('view_services');
        Route::get('/add', AddServices::class)->name('add_services');
        Route::get('/edit/{id}', EditServices::class)->name('edit_services');
       
Route::group(['prefix' =>'banner'], function () {
        Route::get('/view', ViewBanners::class)->name('view_services_banner');
        Route::get('/edit/{id}', EditBanners::class)->name('edit_services_banner');

    });
Route::group(['prefix' =>'section'], function () {
        Route::get('/view', ViewLastSection::class)->name('view_last_section');
        Route::get('/add', AddLastSection::class)->name('add_last_footer_section');
        Route::get('/edit/{id}', EditLastSection::class)->name('edit_last_section');


    });
    });
                                    // home section  end 
Route::group(['prefix' =>'Company'], function () {
        Route::get('/sections/view', ViewSectionOne::class)->name('view_company_sections');
        Route::get('/sections/add', AddSectionOne::class)->name('add_company_section1');
        Route::get('/sections/edit/{id}', EditSectionOne::class)->name('edit_company_section1');

        // ViewSectionTwo
        Route::get('/section2/view', ViewSectionTwo::class)->name('viewCompanySections2');
        Route::get('/section2/add', AddSectionTwo::class)->name('addCompanySections2');
        Route::get('/section2/edit/{id}', EditSectionTwo::class)->name('editCompanySections2');
    
    });
Route::group(['prefix' =>'job-section'], function () {
        Route::get('/view', ViewJobSection::class)->name('view_job_section');
        Route::get('/edit/{id}', EditJobSection::class)->name('edit_job_section');
        Route::get('/add', AddJobSection::class)->name('add_last_section');
});
Route::group(['prefix' =>'Contacts'], function () {
    Route::get('/view', ViewContacts::class)->name('view_Contacts');


    Route::get('/view-section', ViewContactSection::class)->name('Manage_Contacts_section');
    Route::get('/add-section', AddContactSection::class)->name('Add_Contacts_section');
    Route::get('/edit-section/{id}', EditContactSection::class)->name('edit_Contacts_section');

    

});


    // middle ware end 
    });
       // middle ware end

    
// Manage home page 


});
//================ end admin routes ================
