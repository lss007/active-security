<div class="sl-logo">
    <a href="">
    <i class="icon ion-android-star-outline"></i> 
    Active Secuirty </a>
  </div>
  <div class="sl-sideleft">
    @php
    $prefix = Request::route()->getPrefix();

    @endphp

    <label class="sidebar-label">Navigation</label>
    <div class="sl-sideleft-menu">
      <a href="{{route('dashboard')}}" class="sl-menu-link active">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
          <span class="menu-item-label">Dashboard</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <a href="{{url('/')}}" class="sl-menu-link " target="_blank">
        <div class="sl-menu-item">
          <i class="fa fa-globe"></i>
          <span class="menu-item-label">Website </span>
      
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <a href="javascript:void(0)" class="sl-menu-link ">
        <div class="sl-menu-item">
          <i class="fa fa-home"></i>
          <span class="menu-item-label">Manage Home </span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column  ">
        <li class="nav-item"><a href="{{route('viewHomebanner')}}" class="nav-link @if(Route::is('viewHomebanner') ) active @else '' @endif">Home Banner </a></li>
        <li class="nav-item"><a href="{{route('manageHomeSection1')}}" class="nav-link @if(Route::is('manageHomeSection1') ) active @else '' @endif">Home Section 1 </a></li>
        <li class="nav-item"><a href="{{route('viewHomeSection2')}}" class="nav-link @if(Route::is('viewHomeSection2') ) active @else '' @endif">Home Section 2 </a></li>
        <li class="nav-item"><a href="{{route('viewHomeclients')}}" class="nav-link @if(Route::is('viewHomeclients') ) active @else '' @endif"> Client logo </a></li>
        <li class="nav-item"><a href="{{route('viewHomesliders')}}" class="nav-link @if(Route::is('viewHomesliders') ) active @else '' @endif" >Home Sliders </a></li>
        <li class="nav-item"><a href="{{route('ViewHomeSection5')}}" class="nav-link @if(Route::is('ViewHomeSection5') ) active @else '' @endif">Home Section 5 </a></li>




      </ul>

      <a href="{{route('view_all_banner')}}" class="sl-menu-link ">
        <div class="sl-menu-item">
          <i class="fa fa-image"></i>
          <span class="menu-item-label">Manage All Banners </span>
       
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <a href="javascript:void(0)" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="fa fa-navicon"></i>
          <span class="menu-item-label">Manage Footer </span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item">
          <a href="{{route('footer_address')}}" class="nav-link 
          @if(Route::is('footer_address') ) active @else '' @endif">
           Contact Address</a></li>

       

             <li class="nav-item">
              <a href="{{route('view_footer_logos')}}" class="nav-link 
              @if(Route::is('view_footer_logos') ) active @else '' @endif">
               Manage Footer Logos  </a></li>
             
               <li class="nav-item"><a href="{{route('view_last_section')}}" class="nav-link   @if(Route::is('view_last_section') ) active @else '' @endif"> Manage Footer Section</a></li>
               
               <li class="nav-item"><a href="{{route('view_privacy_settings')}}" class="nav-link   @if(Route::is('view_privacy_settings') ) active @else '' @endif"> Manage Privacy Settings </a></li>

               <li class="nav-item"><a href="{{route('view_privacy_Tabs')}}" class="nav-link   @if(Route::is('view_privacy_Tabs') ) active @else '' @endif"> Manage Privacy Tabs </a></li>

               <li class="nav-item"><a href="{{route('footer_Privacy_pageView')}}" class="nav-link   @if(Route::is('footer_Privacy_pageView') ) active @else '' @endif"> Manage Privacy Page </a></li>
               <li class="nav-item"><a href="{{route('Agb_page_View')}}" class="nav-link   @if(Route::is('Agb_page_View') ) active @else '' @endif"> Manage AGB Page </a></li>

               

               

      </ul>
      <a href="javascript:void(0)" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="fa fa-navicon"></i>
          <span class="menu-item-label">Dienstleistungen</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{route('view_services')}}" class="nav-link   @if(Route::is('view_services') ) active @else '' @endif"> Manage pages Section</a></li>
        <li class="nav-item"><a href="{{route('view_services_banner')}}" class="nav-link   @if(Route::is('view_services_banner') ) active @else '' @endif"> Manage Bottom Banner</a></li>
     
     
      </ul>


      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="fa fa-navicon"></i>
          <span class="menu-item-label">Unternehmen</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">

        <li class="nav-item"><a href="{{route('view_company_sections')}}" class="nav-link  
           @if(Route::is('view_company_sections') ) active @else '' @endif"> Manage Section 1</a></li>
           <li class="nav-item"><a href="{{route('viewCompanySections2')}}" class="nav-link  
            @if(Route::is('viewCompanySections2') ) active @else '' @endif"> Manage Profile Sections</a></li>
        
      </ul>

      <a href="{{route('view_job_section')}}" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="fa fa-suitcase"></i>
          <span class="menu-item-label">Jobs</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
   
      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="fa fa-phone"></i>
          <span class="menu-item-label"> Contact us </span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{route('Manage_Contacts_section')}}" class="nav-link  
          @if(Route::is('Manage_Contacts_section') ) active @else '' @endif"> View Image</a></li>

        <li class="nav-item"><a href="{{route('view_Contacts')}}" class="nav-link">View Messages</a></li>
 
      </ul>
      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="fa fa-sitemap"></i>
          <span class="menu-item-label">Social Media</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item">
          <a href="{{route('view_socialMediaCat')}}" class="nav-link 
          @if(Route::is('view_socialMediaCat') ) active @else '' @endif">
           Manage Social Category </a></li>
        <li class="nav-item">
          <a href="{{route('view_social_media')}}" class="nav-link 
          @if(Route::is('view_social_media') ) active @else '' @endif">
           Manage Social Media </a></li>

           

           
           
      </ul>



      
    </div><!-- sl-sideleft-menu -->

    <br>
  </div>


