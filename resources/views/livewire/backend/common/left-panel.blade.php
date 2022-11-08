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
   
      <a href="#" class="sl-menu-link ">
        <div class="sl-menu-item">
          <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
          <span class="menu-item-label">Manage Home </span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column  ">
        <li class="nav-item"><a href="{{route('viewHomebanner')}}" class="nav-link @if(Route::is('viewHomebanner') ) active @else '' @endif"> Banner </a></li>
        <li class="nav-item"><a href="" class="nav-link">Manage Banners </a></li>

        <li class="nav-item"><a href="{{route('manageHomeSection1')}}" class="nav-link @if(Route::is('manageHomeSection1') ) active @else '' @endif"> Section 1 </a></li>
        <li class="nav-item"><a href="{{route('viewHomeSection2')}}" class="nav-link @if(Route::is('viewHomeSection2') ) active @else '' @endif"> Section 2 </a></li>
        <li class="nav-item"><a href="{{route('viewHomeclients')}}" class="nav-link @if(Route::is('viewHomeclients') ) active @else '' @endif"> Client logo </a></li>
        <li class="nav-item"><a href="{{route('viewHomesliders')}}" class="nav-link @if(Route::is('viewHomesliders') ) active @else '' @endif" > Sliders </a></li>
        <li class="nav-item"><a href="{{route('ViewHomeSection5')}}" class="nav-link @if(Route::is('ViewHomeSection5') ) active @else '' @endif"> Section 5 </a></li>




      </ul>
      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
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
            <a href="{{route('view_social_media')}}" class="nav-link 
            @if(Route::is('view_social_media') ) active @else '' @endif">
             Manage Social Media </a></li>

             <li class="nav-item">
              <a href="{{route('view_footer_logos')}}" class="nav-link 
              @if(Route::is('view_footer_logos') ) active @else '' @endif">
               Manage Footer Logos  </a></li>
             

      </ul>
      <a href="{{route('view_services')}}" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
          <span class="menu-item-label">Dienstleistungen</span>
        
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->


      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
          <span class="menu-item-label">Unternehmen</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="blank.html" class="nav-link">Blank Page</a></li>

      </ul>

      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
          <span class="menu-item-label">Jobs</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="blank.html" class="nav-link">Blank Page</a></li>

      </ul>
      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
          <span class="menu-item-label"> Contact us </span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="accordion.html" class="nav-link">Accordion</a></li>
 
      </ul>
      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">Social Media</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="table-basic.html" class="nav-link">Basic Table</a></li>
        <li class="nav-item"><a href="table-datatable.html" class="nav-link">Data Table</a></li>
      </ul>
    </div><!-- sl-sideleft-menu -->

    <br>
  </div>


