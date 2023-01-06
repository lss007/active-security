
<header>

@php
 $navbarlogos = DB::table('footer_logos')->where('name','=','navbar')->where('status',1)->first();
 $navitems    = DB::table('navbars')->where('status',1)->where('ordering',1)->first();
 $navitems2   = DB::table('navbars')->where('status',1)->where('ordering',2)->first();
$navitems3   = DB::table('navbars')->join('route_name_lists','navbars.route_link','route_name_lists.id')->select('navbars.*','route_name_lists.route_link')->OrderBy('ordering')
      ->where('navbars.status', 1)->where('ordering',3)->first();
 $navitems4   = DB::table('navbars')->join('route_name_lists','navbars.route_link','route_name_lists.id')->select('navbars.*','route_name_lists.route_link')->OrderBy('ordering')
      ->where('navbars.status', 1)->where('ordering',4)->first();
$navitems5   = DB::table('navbars')->join('route_name_lists','navbars.route_link','route_name_lists.id')->select('navbars.*','route_name_lists.route_link')->OrderBy('ordering')
      ->where('navbars.status', 1)->where('ordering',5)->first();
 $subnavbars  = DB::table('sub_navbars')
      ->join('route_name_lists','sub_navbars.route_link','route_name_lists.id')
      ->select('sub_navbars.*','route_name_lists.route_link')
      ->OrderBy('ordering')->where('sub_navbars.status', 1)->get();
          //  dd($subnavbars);
 @endphp

<div wire:loading >
  loading....
      </div> 

    <div class="headerCol"  wire:loading.remove  >

      <div class="container">
        <div class="row g-2 align-items-center ">
          <div class="col col-lg-auto">
            <div class="logoCol">
                <a href="{{url('/')}}"><img src="{{(isset($navbarlogos->logo_img))  ?     asset('storage/footer-logo/'.$navbarlogos->logo_img) :asset('frontend/images/logo.svg')}}" alt="Logo" /></a>
            </div>
          </div>
          <div class="col-auto col-lg ">
            <div class="menuBackdrop"></div>
            <div class="menuToggle d-lg-none">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="menuColMain "  >
              <div class="row gy-3 gx-0 align-items-center">
                <div class="col-lg">
                  <div class="navCol">
                    <ul>
                    @if(isset($navitems->route_name))
                      <li><a href="{{route('homePage')}}" class="@if(Route::is('homePage') ) active @else '' @endif">{{isset($navitems->route_name) ? $navitems->route_name : "NA"}}</a></li>
                    @endif
                    @if(isset($navitems2->route_name))
                      <li class="ddLinkCol">
                        <a href="javascript:void(0)">{{isset($navitems2->route_name) ? $navitems2->route_name : "NA"}}</a>
                    @if(isset($subnavbars))
                        <ul class="subMenu">
                    @foreach($subnavbars as $val)   
                          <li><a href="{{isset($val->route_link) ? route($val->route_link) : "#"}}" class="@if(Route::is(isset($val->route_link) ? $val->route_link : "") ) active @else '' @endif">{{isset($val->route_name) ? $val->route_name : "NA"}}</a></li>
                    @endforeach
                    @else
      {{--  <li><a href="{{route('ObjektPage')}}" class="@if(Route::is('ObjektPage') ) active @else '' @endif">Objekt- und Werkschutz</a></li>
            <li><a href="{{route('CenterbewachungPage')}}" class="@if(Route::is('CenterbewachungPage') ) active @else '' @endif">Centerbewachung</a></li>
             <li><a href="{{route('KaufhausdetektivePage')}}" class="@if(Route::is('KaufhausdetektivePage') ) active @else '' @endif">Kaufhausdetektive</a></li>
             <li><a href="{{route('baustellenbewachungPage')}}" class="@if(Route::is('baustellenbewachungPage') ) active @else '' @endif">Baustellenbewachung</a></li>
             <li><a href="{{route('openingAndclosingPage')}}" class="@if(Route::is('openingAndclosingPage') ) active @else '' @endif">Öffnungs-und Schließddienst</a></li>
             <li><a href="{{route('revierfahrtenPage')}}" class="@if(Route::is('revierfahrtenPage') ) active @else '' @endif">Revierkontrollen</a></li>
             <li><a href="{{route('empfangsdienst')}}" class="@if(Route::is('empfangsdienst') ) active @else '' @endif">Empfangsdienst</a></li>
             <li><a href="{{route('ShopGuardPage')}}" class="@if(Route::is('ShopGuardPage') ) active @else '' @endif">Shop Guard</a></li>
             <li><a href="{{route('VeranstaltungsSchutzPage')}}" class="@if(Route::is('VeranstaltungsSchutzPage') ) active @else '' @endif">Veranstaltungsschutz</a></li>
     --}}
                     @endif
                        </ul>
                      </li>
                      @endif
                      @if(isset($navitems3->route_name))
                        <li><a href="{{isset($navitems3->route_link) ? route($navitems3->route_link) : "#"}}" class="@if(Route::is('UnternehmenPage') ) active @else '' @endif">{{isset($navitems3->route_name) ? $navitems3->route_name : "NA"}}</a></li>
                      @endif
                      @if(isset($navitems4->route_name))
                        <li><a href="{{isset($navitems4->route_link) ? route($navitems4->route_link) : "#"}}" class="@if(Route::is('JobsPage') ) active @else '' @endif">{{isset($navitems4->route_name) ? $navitems4->route_name : "NA"}}</a></li>
                      @endif
                    </ul>
                  </div>
                </div>
                <div class="col-lg-auto">
                  <a href="{{isset($navitems5->route_link) ? route($navitems5->route_link) : "#"}}" class="btn btnPrimary arrowBtn mt-sm-2 mt-lg-0">{{isset($navitems5->route_name) ? $navitems5->route_name : "NA"}}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
