<div class="sl-logo">
    <a href="{{route('dashboard')}}">
    <i class="icon ion-android-star-outline"></i> 
    Active Secuirty </a>
  </div>
  <div class="sl-sideleft">
      @php
          $prefix = Request::route()->getPrefix();
          $route = Route::current()->getName();
      @endphp

    <label class="sidebar-label">{{__('leftpane.Admin Panel')}}</label>
    <div class="sl-sideleft-menu">
      <a href="{{route('dashboard')}}" class="sl-menu-link  @if(Route::is('dashboard') ) active @else '' @endif">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
          <span class="menu-item-label">{{__('leftpane.dashboard')}}</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <a href="{{url('/')}}" class="sl-menu-link " target="_blank">
        <div class="sl-menu-item">
          <i class="fa fa-globe"></i>
          <span class="menu-item-label">  {{__('leftpane.website')}}</span>
      
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      
      <a href="javascript:void(0)" class="sl-menu-link @if ($prefix == 'en/manage-home' || $prefix == 'de/manage-home')  active show-sub @else @endif ">
        <div class="sl-menu-item">
          <i class="fa fa-home"></i>
          <span class="menu-item-label">  {{__('leftpane.Manage Home')}} </span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column  ">
        <li class="nav-item"><a href="{{route('viewHomebanner')}}" class="nav-link @if(Route::is('viewHomebanner') ) active @else '' @endif">{{__('leftpane.Home banner')}} </a></li>
        <li class="nav-item"><a href="{{route('manageHomeSection1')}}" class="nav-link @if(Route::is('manageHomeSection1') ) active @else '' @endif">{{__('leftpane.Home section1')}} </a></li>
        <li class="nav-item"><a href="{{route('viewHomeSection2')}}" class="nav-link @if(Route::is('viewHomeSection2') ) active @else '' @endif">{{__('leftpane.Home section2')}} </a></li>
        <li class="nav-item"><a href="{{route('viewHomeclients')}}" class="nav-link @if(Route::is('viewHomeclients') ) active @else '' @endif"> {{__('leftpane.Client logo')}}</a></li>
        <li class="nav-item"><a href="{{route('viewHomesliders')}}" class="nav-link @if(Route::is('viewHomesliders') ) active @else '' @endif" > {{__('leftpane.Home Sliders')}}</a></li>
        <li class="nav-item"><a href="{{route('ViewHomeSection5')}}" class="nav-link @if(Route::is('ViewHomeSection5') ) active @else '' @endif">  {{__('leftpane.Home section5')}} </a></li>
      </ul>

      <a href="{{route('view_all_banner')}}" class="sl-menu-link @if ($prefix == 'en/mange-All-banner' || $prefix == 'de/mange-All-banner')  active show-sub @else  @endif ">
        <div class="sl-menu-item">
          <i class="fa fa-image"></i>
          <span class="menu-item-label"> {{__('leftpane.Manage All Banners')}} </span>
       
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <a href="javascript:void(0)" class="sl-menu-link  @if ($prefix == 'en/manage-footer' || $prefix == 'de/manage-footer')  active show-sub @else  @endif ">
        <div class="sl-menu-item">
          <i class="fa fa-navicon"></i>
          <span class="menu-item-label">{{__('leftpane.Manage Footer')}} </span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item">
              <li class="nav-item"><a href="{{route('view_footer_logos')}}" class="nav-link  @if(Route::is('view_footer_logos') ) active @else '' @endif">{{__('leftpane.Manage Footer Logos')}}  </a></li>
               <li class="nav-item"><a href="{{route('view_last_section')}}" class="nav-link   @if(Route::is('view_last_section') ) active @else '' @endif"> {{__('leftpane.Manage Footer Section')}} </a></li>
               <li class="nav-item"><a href="{{route('view_privacy_settings')}}" class="nav-link   @if(Route::is('view_privacy_settings') ) active @else '' @endif">{{__('leftpane.privacy settings')}}   </a></li>
               <li class="nav-item"><a href="{{route('view_privacy_Tabs')}}" class="nav-link   @if(Route::is('view_privacy_Tabs') ) active @else '' @endif">  {{__('leftpane.Privacy tabs')}}  </a></li>
               <li class="nav-item"><a href="{{route('footer_Privacy_pageView')}}" class="nav-link   @if(Route::is('footer_Privacy_pageView') ) active @else '' @endif">  {{__('leftpane.Manage privacy page')}}   </a></li>
               <li class="nav-item"><a href="{{route('agb_page_view')}}" class="nav-link   @if(Route::is('agb_page_view') ) active @else '' @endif">{{__('leftpane.Manage Agb Page')}}  </a></li>
      </ul> 
      <a href="javascript:void(0)" class="sl-menu-link  @if ($prefix == 'en/services' || $prefix == 'de/services')  active show-sub @else  @endif
      ">
        <div class="sl-menu-item">
          <i class="fa fa-navicon"></i>
          <span class="menu-item-label">{{__('leftpane.services')}} </span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{route('view_services')}}" class="nav-link   @if(Route::is('view_services') ) active @else '' @endif"> {{__('leftpane.Manage Services Section')}}</a></li>
        <li class="nav-item"><a href="{{route('view_services_banner')}}" class="nav-link   @if(Route::is('view_services_banner') ) active @else '' @endif"> {{__('leftpane.Manage Bottom Banner')}}  </a></li>
      </ul>
      <a href="#" class="sl-menu-link  @if ($prefix == 'en/company' || $prefix == 'de/company')  active show-sub @else  @endif
      ">
        <div class="sl-menu-item">
          <i class="fa fa-navicon"></i>
          <span class="menu-item-label">{{__('leftpane.company')}} </span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{route('view_company_sections')}}" class="nav-link   @if(Route::is('view_company_sections') ) active @else '' @endif">{{__('leftpane.Company Section 1')}}   </a></li>
        <li class="nav-item"><a href="{{route('viewCompanySections2')}}" class="nav-link   @if(Route::is('viewCompanySections2') ) active @else '' @endif"> {{__('leftpane.Manage Profile Section')}} </a></li>
      </ul>

      <a href="{{route('view_job_section')}}" class="sl-menu-link   {{ ($prefix == '/job-section')?'active' : ''}}">
        <div class="sl-menu-item">
          <i class="fa fa-suitcase"></i>
          <span class="menu-item-label"> {{__('leftpane.Jobs')}}</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <a href="#" class="sl-menu-link  @if ($prefix == 'en/contacts' || $prefix == 'de/contacts')  active show-sub @else  @endif
      ">
        <div class="sl-menu-item">
          <i class="fa fa-phone"></i>
          <span class="menu-item-label"> {{__('leftpane.Contact')}}  </span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <a href="{{route('footer_address')}}" class="nav-link   @if(Route::is('footer_address') ) active @else '' @endif">  {{__('leftpane.Contact Address')}} </a></li>
        <li class="nav-item"><a href="{{route('Manage_Contacts_section')}}" class="nav-link  @if(Route::is('Manage_Contacts_section') ) active @else '' @endif"> {{__('leftpane.View Contact Image')}}</a></li>
        <li class="nav-item"><a href="{{route('view_Contacts')}}" class="nav-link">{{__('leftpane.View Contact Message')}}</a></li>
      </ul>
      <a href="#" class="sl-menu-link  @if ($prefix == 'en/social' || $prefix == 'de/social')  active show-sub @else  @endif
      ">
        <div class="sl-menu-item">
          <i class="fa fa-sitemap"></i>
          <span class="menu-item-label">{{__('leftpane.Social Media')}}</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{route('view_socialMediaCat')}}" class="nav-link   @if(Route::is('view_socialMediaCat') ) active @else '' @endif">  {{__('leftpane.Manage Social Category')}} </a></li>
        <li class="nav-item"> <a href="{{route('view_social_media')}}" class="nav-link   @if(Route::is('view_social_media') ) active @else '' @endif">  {{__('leftpane.Manage Social Media')}}</a></li>
      </ul>
    </div><!-- sl-sideleft-menu -->

    <br>
  </div>


