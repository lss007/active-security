
<footer>
    <div class="footerColMain">
      <div class="container">
        <div class="footerTopCol">
          <div class="row">
            <div class="col-lg-auto">
              <div class="footerLogo">
                <a href="{{route('homePage')}}"><img src="{{ asset('frontend/images/footer-logo.svg')}}" alt="..."></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg">
              <h4 class="footerTitle">Kontakt</h4>
              <ul class="footerIconOption">
                <li><span class="optionIcon"><img src="{{ asset('frontend/images/phone-icon.svg')}}" alt="..."></span> Telefon: 09401 918 77 32</li>
                <li><span class="optionIcon"><img src="{{ asset('frontend/images/fax-icon.svg')}}" alt="..."></span> Fax: 0941 99 22 65 99</li>
                <li><span class="optionIcon"><img src="{{ asset('frontend/images/email-icon.svg')}}" alt="..."></span> kontakt@active-sec.de</li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg">
              <h4 class="footerTitle">Addresse</h4>
              <ul class="footerIconOption">
                <li><span class="optionIcon"><img src="{{ asset('frontend/images/location-pin.svg')}}" alt="..."></span> Galgenbergstraße 12a 93053 Regensburg</li>
              </ul>
            </div>
            <div class="col-lg text-center text-lg-start">
              <h4 class="footerTitle">Social media</h4>
              <ul class="socialIcons">
                <li><a href="javascript:void(0)"><img src="{{ asset('frontend/images/linkedin.svg')}}" alt="..."></a></li>
                <li><a href="javascript:void(0)"><img src="{{ asset('frontend/images/xing.svg')}}" alt="..."></a></li>
                <li><a href="javascript:void(0)"><img src="{{ asset('frontend/images/instagram.svg')}}" alt="..."></a></li>
                <li><a href="javascript:void(0)"><img src="{{ asset('frontend/images/facebook.svg')}}" alt="..."></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footerMdlCol">
          <div class="row g-2 align-items-center justify-content-between">
            <div class="col-auto"><img src="{{ asset('frontend/images/dekra-1.svg')}}" alt="..."></div>
            <div class="col-auto"><img src="{{ asset('frontend/images/dekra-2.svg')}}" alt="..."></div>
            <div class="col-auto"><img src="{{ asset('frontend/images/bdsw.svg')}}" alt="..."></div>
            <div class="col-auto"><img src="{{ asset('frontend/images/ihk.svg')}}" alt="..."></div>
            <div class="col-auto"><img src="{{ asset('frontend/images/vbg.svg')}}" alt="..."></div>
          </div>
        </div>
      </div>
      <div class="footerBtmCol">
        <div class="container">
          <div class="row">
            <div class="col-sm-auto order-sm-last">
              <ul class="footerLinks">
                <li><a href="{{route('ImpressumPage')}}">Impressum</a></li>
                <li><a href="{{route('DatenschutzPage')}}">Datenschutz</a></li>
                <li><a href="{{route('AgbPage')}}">AGB</a></li>
              </ul>
            </div>
            <div class="col-sm">
              <div class="copyrightCol">© {{date('Y')}} - active security</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="javascript:void(0)" class="fpIcon" data-bs-toggle="modal" data-bs-target="#privacyModal"><img src="{{ asset('frontend/images/fingerprint-icon.svg')}}" alt="..."></a>
        <div class="rightContactLinks">
          <ul>
            <li><a href="javascript:void(0)"><img src="{{ asset('frontend/images/phone-icon-white.svg')}}" alt="..."></a></li>
            <li><a href="javascript:void(0)"><img src="{{ asset('frontend/images/whatsapp-icon-white.svg')}}" alt="..."></a></li>
            <li><a href="javascript:void(0)"><img src="{{ asset('frontend/images/email-icon-white.svg')}}" alt="..."></a></li>
          </ul>
        </div>
      
        <!-- Modal -->
        <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="privacyModalLabel">Privatsphäre-Einstellungen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="privacyModalContent">
                  <p>Entscheiden Sie, welche Cookies Sie zulassen möchten. Sie können diese Einstellungen jederzeit ändern. Dies kann jedoch dazu führen, dass einige Funktionen nicht mehr verfügbar sind. Informationen zum Löschen der Cookies finden Sie in der Hilfe Ihres Browsers. Erfahren Sie mehr über die von uns verwendeten Cookies.</p>
                  <h4 class="smTitle p2 pb-3">Mit dem Schieberegler können Sie verschiedene Arten von Cookies aktivieren oder deaktivieren:</h4>
                  <div class="tabStyle">
                    <div class="row g-0">
                      <div class="col-auto">
                        <ul class="nav nav-tabs" id="privacyTab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="grundlegend-tab" data-bs-toggle="tab" data-bs-target="#grundlegend-tab-pane" type="button" role="tab" aria-controls="grundlegend-tab-pane" aria-selected="true">Grundlegend</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="funktionalität-tab" data-bs-toggle="tab" data-bs-target="#funktionalität-tab-pane" type="button" role="tab" aria-controls="funktionalität-tab-pane" aria-selected="false">Funktionalität</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="analytik-tab" data-bs-toggle="tab" data-bs-target="#analytik-tab-pane" type="button" role="tab" aria-controls="analytik-tab-pane" aria-selected="false">Analytik</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="werbung-tab" data-bs-toggle="tab" data-bs-target="#werbung-tab-pane" type="button" role="tab" aria-controls="werbung-tab-pane" aria-selected="false">Werbung</button>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="tab-content" id="privacyTabContent">
                      <div class="tab-pane fade show active" id="grundlegend-tab-pane" role="tabpanel" aria-labelledby="grundlegend-tab" tabindex="0">
                        <div class="row gy-4">
                          <div class="col-lg-6">
                            <h4 class="smTitle p2 pb-2">Diese Website wird:</h4>
                            <ul class="pCheckList">
                              <li>Grundlegend: Merken Sie sich Ihre Cookie-Berechtigungseinstellung</li>
                              <li>Grundlegend: Session-Cookies zulassen</li>
                              <li>Grundlegend: Sammeln Sie Informationen, die Sie in Kontaktformulare, Newsletter und andere Formulare auf allen Seiten eingeben</li>
                              <li>Grundlegend: Verfolgen Sie, was Sie im Einkaufswagen eingeben</li>
                              <li>Grundlegend: Authentifizieren Sie, dass Sie in Ihrem Benutzerkonto angemeldet sind</li>
                              <li>Grundlegend: Merken Sie sich die von Ihnen gewählte Sprachversion</li>
                            </ul>
                          </div>
                          <div class="col-lg-6">
                            <h4 class="smTitle p2 pb-2">Diese Website wird nicht:</h4>
                            <ul class="pCheckList cList">
                              <li>Funktionalität: Merken Sie sich die Einstellungen für soziale Medien</li>
                              <li>Funktionalität: Merken Sie sich die ausgewählte Region und das Land</li>
                              <li>Analytik: Verfolgen Sie Ihre besuchten Seiten und Interaktion</li>
                              <li>Analytik: Verfolgen Sie anhand Ihrer IP-Nummer den Standort und die Region</li>
                              <li>Analytik: Verfolgen Sie die Zeit auf jeder Seite</li>
                              <li>Werbung: Verwenden Sie Informationen für maßgeschneiderte Werbung mit Dritten</li>
                              <li>Werbung: Ermöglicht Ihnen, eine Verbindung zu sozialen Websites herzustellen</li>
                              <li>Werbung: Identifizieren Sie das Gerät, das Sie verwenden</li>
                              <li>Werbung: Sammeln Sie persönlich identifizierbare Informationen wie Name und Ort</li>
                            </ul>
                          </div>
                        </div>
                        <div class="pt-3 pt-xl-4 text-end">
                          <a href="javascript:void(0)" class="btn btnPrimary">Speichern und schließen</a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="funktionalität-tab-pane" role="tabpanel" aria-labelledby="funktionalität-tab" tabindex="0">Funktionalität</div>
                      <div class="tab-pane fade" id="analytik-tab-pane" role="tabpanel" aria-labelledby="analytik-tab" tabindex="0">Analytik</div>
                      <div class="tab-pane fade" id="werbung-tab-pane" role="tabpanel" aria-labelledby="werbung-tab" tabindex="0">Werbung</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="cookiesCol">
          <div class="container">
            <div class="row gy-2 align-items-center">
              <div class="col-sm">
                <div class="cText">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
              <div class="col-sm-auto">
                <ul class="cookiesRightBtns">
                  <li><a href="javascript:void(0)" class="cookiesCloseTrigger">Decline</a></li>
                  <li><a href="javascript:void(0)" class="cookiesCloseTrigger">Accept</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

