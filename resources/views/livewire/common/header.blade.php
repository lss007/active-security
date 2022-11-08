
<header>
    <div class="headerCol">
      <div class="container">
        <div class="row g-2 align-items-center">
          <div class="col col-lg-auto">
            <div class="logoCol">
              <a href="{{url('/')}}"><img src="{{ asset('frontend/images/logo.svg')}}" alt="Logo" /></a>
            </div>
          </div>
          <div class="col-auto col-lg">
            <div class="menuBackdrop"></div>
            <div class="menuToggle d-lg-none">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="menuColMain">
              <div class="row gy-3 gx-0 align-items-center">
                <div class="col-lg">
                  <div class="navCol">
                    <ul>
                      <li><a href="{{route('homePage')}}" class="@if(Route::is('homePage') ) active @else '' @endif">Home</a></li>
                      <li class="ddLinkCol">
                        <a href="javascript:void(0)">Dienstleistungen</a>
                        <ul class="subMenu">
                          <li><a href="{{route('ObjektPage')}}">Objekt- und Werkschutz</a></li>
                          <li><a href="{{route('CenterbewachungPage')}}">Centerbewachung</a></li>
                          <li><a href="{{route('KaufhausdetektivePage')}}">Kaufhausdetektive</a></li>
                          <li><a href="{{route('baustellenbewachungPage')}}">Baustellenbewachung</a></li>
                          <li><a href="{{route('openingAndclosingPage')}}">Öffnungs- und Schließddienst</a></li>
                          <li><a href="{{route('revierfahrtenPage')}}">Revierkontrollen</a></li>
                          <li><a href="{{route('empfangsdienst')}}">Empfangsdienst</a></li>
                          <li><a href="{{route('ShopGuardPage')}}">Shop Guard</a></li>
                          <li><a href="{{route('VeranstaltungsSchutzPage')}}">Veranstaltungsschutz</a></li>
                        </ul>
                      </li>
                      <li><a href="{{route('UnternehmenPage')}}" class="@if(Route::is('UnternehmenPage') ) active @else '' @endif">Unternehmen</a></li>
                      <li><a href="{{route('JobsPage')}}" class="@if(Route::is('JobsPage') ) active @else '' @endif">Jobs</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-auto">
                  <a href="{{route('ContactPage')}}" class="btn btnPrimary arrowBtn mt-sm-2 mt-lg-0">Kontakt</a>
                </div>

            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
