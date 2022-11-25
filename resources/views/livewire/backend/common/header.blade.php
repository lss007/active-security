<div class="sl-header">
    <div class="sl-header-left">
      <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
      <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->
    <div class="sl-header-right">
      <nav class="nav">
        <div class="dropdown mt-2">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <i class="fa fa-globe"></i> 
            <span class="logged-name"> {{ Config::get('languages')[App::getLocale()]['display'] }}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-200">
            <ul class="list-unstyled user-profile-nav">
        
              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
              <li>
                  <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                      {{ $properties['native'] }}
                  </a>
              </li>
          @endforeach
            {{-- @foreach (Config::get('languages') as $lang => $language)
              @if ($lang != App::getLocale())
                  <li>
                    <a href="{{ route('lang.switch', $lang) }}">  {{$language['display']}}</a>
                  </li>
              @endif
            @endforeach --}}
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <span class="logged-name">     {{ Auth::user()->name }}</span>
            <img src="{{(isset(Auth::user()->profile_photo_url)) 
              ? asset(Auth::user()->profile_photo_url) :asset('no_image.jpg')}}" class="wd-32 rounded-circle" alt="">
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-200">
            <ul class="list-unstyled user-profile-nav">
              <li><a href="{{ route('profile.show') }}"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
             
              <li><a href="{{route('user.logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>
          
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </nav>
      <div class="navicon-right">
    {{-- Top right bell  --}}
        {{-- <a id="btnRightMenu" href="" class="pos-relative">
          <i class="icon ion-ios-bell-outline"></i>
          <!-- start: if statement -->
          <span class="square-8 bg-danger"></span>
          <!-- end: if statement -->
        </a> --}}
    {{-- Top right bell  --}}

      </div><!-- navicon-right -->
    </div><!-- sl-header-right -->
  </div><!-- sl-header -->