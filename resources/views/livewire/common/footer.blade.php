<style>
  .js-cookie-consent{
    background-color: var(--secondaryColor);
	color: #fff !important;
  padding: 15px 0;
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 10;
  }
</style>
<footer>

    @php
        $footeraddress =  DB::table('footer_contact_addresses')->where('status',1)->first();
        $socialLinks =     DB::table('social_links')->where('status',1)->limit(5)->get();
        $footerlogos =  DB::table('footer_logos')->where('name','=','footer')->where('status',1)->limit(8)->get();
     
        $footerMenu =  DB::table('navbars')->orderBy('ordering')->whereIn('ordering', [6,7,8])->where('status',1)->get();
  
      

  @endphp
    <div class="footerColMain">
      <div class="container">
        <div class="footerTopCol">
          <div class="row">     
            <div class="col-lg-auto">
              <div class="footerLogo">
                <a href="{{route('homePage')}}"><img src="{{(isset($footeraddress->logo)) 
                  ? asset('storage/footer-logo/'.$footeraddress->logo) :asset('no_image.jpg')}}" alt="..."></a>
              </div>
            </div>
            <div class="col-sm-6 col-lg">
              <h4 class="footerTitle">Kontakt</h4>
              <ul class="footerIconOption">
                <li><span class="optionIcon"><img src="{{ asset('frontend/images/phone-icon.svg')}}" alt="..."></span> Telefon: {{isset($footeraddress->telefon) ? $footeraddress->telefon :"NA"}}</li>
                <li><span class="optionIcon"><img src="{{ asset('frontend/images/fax-icon.svg')}}" alt="..."></span> Fax:  {{isset($footeraddress->fax) ? $footeraddress->fax :"NA"}}</li>
                <li><span class="optionIcon"><img src="{{ asset('frontend/images/email-icon.svg')}}" alt="..."></span> {{isset($footeraddress->email) ? $footeraddress->email :"NA"}}</li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg">
              <h4 class="footerTitle">Addresse</h4>
              <ul class="footerIconOption">
                <li><span class="optionIcon"><img src="{{ asset('frontend/images/location-pin.svg')}}" alt="..."></span>{{isset($footeraddress->address) ? $footeraddress->address :"NA"}} </li>
              </ul>
            </div>
            <div class="col-lg text-center text-lg-start">
              <h4 class="footerTitle">Social media</h4>
              <ul class="socialIcons">
                @if(isset($socialLinks))
                @foreach($socialLinks as $links)
                <li><a href="{{$links->link}}">
                  <img src="{{(isset($links->logo)) 
                    ? asset('storage/social-logo/'.$links->logo) :asset('no_image.jpg')}}" alt="..."></a>
                </li>
                @endforeach
                @endif   
              </ul>
            </div>
          </div>
        </div>
        <div class="footerMdlCol">
          <div class="row g-2 align-items-center justify-content-between">
@if(isset( $footerlogos))
@foreach( $footerlogos as $flogo)
            <div class="col-auto"><img src="{{(isset($flogo->logo_img)) 
              ? asset('storage/footer-logo/'.$flogo->logo_img) :asset('no_image.jpg')}}" alt="..."></div>
@endforeach
@endif

          </div>
        </div>
      </div>
      <div class="footerBtmCol">
        <div class="container">
          <div class="row">
            <div class="col-sm-auto order-sm-last">
              

              <ul class="footerLinks">
                @if(isset($footerMenu))
                  @foreach($footerMenu as $val )
                  
            
              @if($val->ordering == 6 )
                <li><a href="{{route('AgbPage')}}">{{ $val->route_name }}</a></li>
                @elseif($val->ordering == 7 ) 
                <li><a href="{{route('ImpressumPage')}}">{{ $val->route_name }}</a></li>
                @elseif($val->ordering == 8 )
                <li><a href="{{route('DatenschutzPage')}}">{{ $val->route_name }}</a></li>
                @else
           @endif
                @endforeach
                @endif
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
            <li><a  href="tel:{{isset($footeraddress->call_to) ? $footeraddress->call_to :"+4994019187732"}}" ><img src="{{ asset('frontend/images/phone-icon-white.svg')}}" alt="..."></a></li>
            <li><a href="{{isset($footeraddress->Whatsapp_to) ? $footeraddress->Whatsapp_to :"javascript:void(0)"}}" target="_blank" ><img src="{{ asset('frontend/images/whatsapp-icon-white.svg')}}" alt="..."></a></li>
            <li><a href="mailto:{{isset($footeraddress->mail_to) ? $footeraddress->mail_to :"javascript:void(0)"}}" ><img src="{{ asset('frontend/images/email-icon-white.svg')}}" alt="..."></a></li>
          </ul>
        </div>
      
        <!-- Modal -->
@php
  $privacyPara = DB::table('privacy_settings')->where('status' ,1)->first();
  $privacytabs = DB::table('privacy_wills')->where('status' ,1)->get();

@endphp


        <div class="modal fade  " id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="privacyModalLabel">Privatsphäre-Einstellungen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="privacyModalContent">
                  <p>{!! isset($privacyPara->paragraph)  ? $privacyPara->paragraph : "NA"!!}</p>
                  <h4 class="smTitle p2 pb-3">
                    {!! isset($privacyPara->title)  ? html_entity_decode($privacyPara->title) : "NA" !!} 
                  </h4>
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
                              @if(isset($privacytabs))
                              @foreach($privacytabs as $keys => $row)
                                  @if( $row->tab_id == 1   && $row->cat_id == 1)
                                  <li>   {{$row->list}} </li>
                                 @else
                                  @endif
                               @endforeach
                            @endif
                            </ul>
                          </div>
                          <div class="col-lg-6">
                            <h4 class="smTitle p2 pb-2">Diese Website wird nicht:</h4>
                            <ul class="pCheckList cList">
                              @if(isset($privacytabs))
                              @foreach($privacytabs as $keys => $row)
                              @if( $row->tab_id == 2  && $row->cat_id == 2)
                              <li>   {{$row->list}} </li>
                              @else
                              @endif
                            @endforeach
                            @endif
                            @if(isset($privacytabs))
                            @foreach($privacytabs as $keys => $row)
                            @if( $row->tab_id == 3  && $row->cat_id == 2)
                            <li>   {{$row->list}} </li>
                            @else
                            @endif
                          @endforeach
                          @endif
                          @if(isset($privacytabs))
                          @foreach($privacytabs as $keys => $row)
                          @if( $row->tab_id == 4  && $row->cat_id == 2)
                          <li>   {{$row->list}} </li>
                          @else
                          @endif
                        @endforeach
                        @endif
                            </ul>
                          </div>
                        </div>
                     
                      </div>
                      <div class="tab-pane fade" id="funktionalität-tab-pane" role="tabpanel" aria-labelledby="funktionalität-tab" tabindex="0">
                        {{-- Funktionalität --}}
               
                        <div class="row gy-4">
                          <div class="col-lg-6">
                            <h4 class="smTitle p2 pb-2">Diese Website wird:</h4>
                            <ul class="pCheckList">
                              @if(isset($privacytabs))
                              @foreach($privacytabs as $keys => $row)
                                  @if( $row->tab_id == 1   && $row->cat_id == 1)
                                  <li>   {{$row->list}} </li>
                              @else
                              
                                  @endif
                            @endforeach
                            @endif
                            @if(isset($privacytabs))
                            @foreach($privacytabs as $keys => $row)
                                @if( $row->tab_id == 2   && $row->cat_id == 2)
                                <li>   {{$row->list}} </li>
                            @else
                            
                                @endif
                          @endforeach
                          @endif
                            </ul>
                          </div>
                          <div class="col-lg-6">
                            <h4 class="smTitle p2 pb-2">Diese Website wird nicht:</h4>
                            <ul class="pCheckList cList">
                              @if(isset($privacytabs))
                              @foreach($privacytabs as $keys => $row)
                              @if( $row->tab_id == 3   && $row->cat_id == 2 )
                              <li>   {{$row->list}} </li>
                                @else
                           
                              @endif
                            @endforeach
                            @endif
                            @if(isset($privacytabs))
                            @foreach($privacytabs as $keys => $row)
                            @if( $row->tab_id == 4   && $row->cat_id == 2 )
                            <li>   {{$row->list}} </li>
                              @else
                         
                            @endif
                          @endforeach
                          @endif
                            </ul>
                          </div>
                        </div>
          
                      </div>
                      <div class="tab-pane fade" id="analytik-tab-pane" role="tabpanel" aria-labelledby="analytik-tab" tabindex="0">
                        {{-- Analytik --}}
                        <div class="row gy-4">
                          <div class="col-lg-6">
                            <h4 class="smTitle p2 pb-2">Diese Website wird:</h4>
                            <ul class="pCheckList">
                              @if(isset($privacytabs))
                              @foreach($privacytabs as $keys => $row)
                              @if( $row->tab_id == 1  && $row->cat_id == 1 )
                              <li>   {{$row->list}} </li>
                          @else
                              @endif
                            @endforeach
                            @endif
                            @if(isset($privacytabs))
                            @foreach($privacytabs as $keys => $row)
                            @if( $row->tab_id == 2  && $row->cat_id == 2 )
                            <li>   {{$row->list}} </li>
                        @else
                            @endif
                          @endforeach
                          @endif
                          @if(isset($privacytabs))
                          @foreach($privacytabs as $keys => $row)
                          @if( $row->tab_id == 3  && $row->cat_id == 2 )
                          <li>   {{$row->list}} </li>
                         @else
                          @endif
                        @endforeach
                        @endif
                            </ul>
                          </div>
                          <div class="col-lg-6">
                            <h4 class="smTitle p2 pb-2">Diese Website wird nicht:</h4>
                            <ul class="pCheckList cList">
                              @if(isset($privacytabs))
                              @foreach($privacytabs as $keys => $row)
                              @if( $row->tab_id == 4   && $row->cat_id == 2)
                              <li>   {{$row->list}} </li>
                         @else
                           
                              @endif
                            @endforeach
                            @endif
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="werbung-tab-pane" role="tabpanel" aria-labelledby="werbung-tab" tabindex="0">
                        <div class="row gy-4">
                          <div class="col-lg-6">
                            <h4 class="smTitle p2 pb-2">Diese Website wird:</h4>
                            <ul class="pCheckList">
                              @if(isset($privacytabs))
                              @foreach($privacytabs as $keys => $row)
                              @if( $row->tab_id == 1  && $row->cat_id == 1)
                              <li>   {{$row->list}} </li>
                           @else
                              @endif
                            @endforeach
                            @endif
                            @if(isset($privacytabs))
                            @foreach($privacytabs as $keys => $row)
                            @if( $row->tab_id == 2  && $row->cat_id == 2)
                            <li>   {{$row->list}} </li>
                            @else
                            @endif
                          @endforeach
                          @endif
                          @if(isset($privacytabs))
                          @foreach($privacytabs as $keys => $row)
                          @if( $row->tab_id == 3  && $row->cat_id == 2)
                          <li>   {{$row->list}} </li>
                            @else
                          @endif
                            @endforeach
                            @endif
                            @if(isset($privacytabs))
                            @foreach($privacytabs as $keys => $row)
                            @if( $row->tab_id == 4  && $row->cat_id == 2)
                            <li>   {{$row->list}} </li>
                              @else
                            @endif
                          @endforeach
                          @endif
                            </ul>
                          </div>
                          <div class="col-lg-6">
                            <h4 class="smTitle p2 pb-2">Diese Website wird nicht:</h4>
                            <ul class="pCheckList cList">
                              {{-- <li>  </li> --}}
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pt-3 pt-xl-4 text-end">
                      <a href="javascript:void(0)" data-bs-dismiss="modal" class="btn btnPrimary js-cookie-consent-agree cookiesCloseTrigger cookie-consent__agree">Speichern und schließen</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
   

        @include('cookie-consent::index') 
 
        {{-- <div class="cookiesCol ">
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
        </div> --}}
        
        

