<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @if(isset($homeBanner))
    <section>
      <style>
        .bannerSection.homeBanner {
          background-image: url('{{asset('storage/Home-banner/'.$homeBanner->banner_image)}}');
        }
        @media (max-width: 991px) {
          .bannerSection.homeBanner {
            background-image: url('{{asset('storage/Home-banner/'.$homeBanner->tablet_banner)}}');
          }
        }
        @media (max-width: 767px) {
          .bannerSection.homeBanner {
            background-image: url('{{asset('storage/Home-banner/'.$homeBanner->mobile_banner)}}');
          }
        }
      </style>
      <div class="bannerSection homeBanner">
        <div class="container">
          <div class="bannerContent">
            <h1 class="xlTitle">{{ isset($homeBanner->heading) ? $homeBanner->heading : "NA"}}</h1>
            <h5 class="subTitle pt-2 pt-xl-3 pb-2 pb-xl-3">
               {{ isset($homeBanner->title) ? $homeBanner->title : "NA"}}
               </h5>
            <p> 
              {{ isset($homeBanner->banner_paragaph) ? $homeBanner->banner_paragaph : "NA"}}
            </p>
       
            {{-- <a href="{{ isset($homeBanner->button_link) ? $homeBanner->button_link : "#nextSection"}}" class="btn btnPrimary arrowBtn mt-sm-3 mt-xl-4 scrollToSection"> --}}
            {{-- <a href="{!!isset($homeBanner->button_link) ? $homeBanner->button_link.'#2' : "#1"!!}" class="btn btnPrimary arrowBtn mt-sm-3 mt-xl-4 scrollToSection"> --}}
           
            @php
              $httplink  =  strpos( $homeBanner->button_link, 'http') === 0;
           @endphp

            @if(isset($homeBanner->button_link)) 
                @if( $httplink )
                  <a href="{{$homeBanner->button_link}}" class="btn btnPrimary arrowBtn mt-sm-3 mt-xl-4 scrollToSection" target="_blank">
                    {!! isset($homeBanner->button_text) ? $homeBanner->button_text : "Jetzt mehr erfahren"!!}
                  </a>
                @else
                    <a href="{{route($homeBanner->routeName->route_link)}}{{isset($homeBanner->hash_tag_id) ? '#'.$homeBanner->hash_tag_id : ''}}" class="btn btnPrimary arrowBtn mt-sm-3 mt-xl-4 scrollToSection">
                      {!! isset($homeBanner->button_text) ? $homeBanner->button_text : "Jetzt mehr erfahren"!!} 
                    </a>
                @endif

             @endif
             {{-- <a href="" class="btn btnPrimary arrowBtn mt-sm-3 mt-xl-4 scrollToSection"> --}}
              
             {{-- </a> --}}
          </div>
        </div>
      </div>
    </section>
    @else 
    
    @endif


    @if(isset($active_secuirty))
    <section>
      <div class="nextSectionParent">
        <div id="1"></div>
      </div>

      <div class="sectionSpace">
        <div class="container">
          <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
              <div class="imgCol pe-lg-4">
                <picture>
                  <source media="(min-width:992px)" srcset="{{(isset($this->active_secuirty->main_image)) 
                    ? asset('storage/Home-section/'.$active_secuirty->main_image) :asset('no_image.jpg')}}">
                  <source media="(min-width:768px)" srcset="{{(isset($this->active_secuirty->tablet_img)) 
                    ? asset('storage/Home-section/'.$active_secuirty->tablet_img) 
                    :asset('storage/Home-section/'.$active_secuirty->main_image)}}">
                  <img class="imgStyle1" src="{{(isset($this->active_secuirty->mobile_img)) 
                    ? asset('storage/Home-section/'.$active_secuirty->mobile_img) 
                    :asset('storage/Home-section/'.$active_secuirty->main_image)}}" alt=""  class="imgStyle1">
                </picture>
                {{-- <img src="{{(isset($this->active_secuirty->main_image)) 
                  ? asset('storage/Home-section/'.$active_secuirty->main_image) :asset('no_image.jpg')}}" alt="..." class="imgStyle1"> --}}
              </div>
            </div>
            <div class="col-lg-6">
              <div class="contentCol">
                <h2 class="lgTitle p2"> {{isset($active_secuirty->heading) ? $active_secuirty->heading : "NA" }}</h2>
                <p class="lgText p2 pt-xl-1 pb-xxl-2">{!!isset($active_secuirty->sub_heading) ? $active_secuirty->sub_heading : "NA" !!}.</p>
                <p>
                 {!! isset($active_secuirty->paragraph)  
                 ? html_entity_decode($active_secuirty->paragraph) : "NA" !!}  
                </p>
                <div class="asImgsCol text-center">
                  <ul>
                    <li>
                      <img src="{{(isset($this->active_secuirty->logo1)) 
                      ? asset('storage/Home-section/'.$active_secuirty->logo1) :asset('no_image.jpg')}}" alt="...">
                      </li>
                    <li><img src="{{(isset($this->active_secuirty->logo2)) 
                      ? asset('storage/Home-section/'.$active_secuirty->logo2) :asset('no_image.jpg')}}" alt="..."></li>
                    <li><img src="{{(isset($this->active_secuirty->logo3)) 
                      ? asset('storage/Home-section/'.$active_secuirty->logo3) :asset('no_image.jpg')}}" alt="..."></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif

    @if(isset($HomeSectiontwo))
    <section>
      <div class="nextSectionParent">
        <div id="2"></div>
      </div>
      <div class="sectionSpaceMd lightBg">
        <div class="container">
          <div class="row gy-4 align-items-center">
            <div class="col-lg-6 order-lg-last">
              <div class="imgCol ps-lg-4">
                {{-- <img src="{{(isset($this->HomeSectiontwo->image)) 
                  ? asset('storage/Home-section/'.$HomeSectiontwo->image) :asset('no_image.jpg')}}" alt="..." > --}}
                  <picture>
                    <source media="(min-width:992px)" srcset="{{(isset($this->HomeSectiontwo->image)) 
                      ? asset('storage/Home-section/'.$HomeSectiontwo->image) :asset('no_image.jpg')}}">
                    <source media="(min-width:768px)" srcset="{{(isset($this->HomeSectiontwo->tablet_img)) 
                      ? asset('storage/Home-section/'.$HomeSectiontwo->tablet_img) 
                      :asset('storage/Home-section/'.$HomeSectiontwo->image)}}">
                    <img class="imgStyle1" src="{{(isset($this->HomeSectiontwo->mobile_img)) 
                      ? asset('storage/Home-section/'.$HomeSectiontwo->mobile_img) 
                      :asset('storage/Home-section/'.$HomeSectiontwo->image)}}" alt=""  class="imgStyle1">
                  </picture>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="contentCol">
                <h2 class="lgTitle p2">{!! isset($HomeSectiontwo->heading) ? $HomeSectiontwo->heading : "NA"!!}</h2>
                <p class="lgText p2 pt-1"> 
                  {!! isset($HomeSectiontwo->title) ? $HomeSectiontwo->title : "NA"!!}
                </p>
                <p>
                  {!! isset($HomeSectiontwo->para1)  ? html_entity_decode($HomeSectiontwo->para1) : "NA" !!}  
                  </p>
                <p>
                  {!! isset($HomeSectiontwo->para2)  ? html_entity_decode($HomeSectiontwo->para2) : "NA" !!}  
                </p>
          

            {{-- ================== --}}
            @php
            $gethttplink  =  strpos( $HomeSectiontwo->button_link, 'http') === 0;
            @endphp

            @if(isset($HomeSectiontwo->button_link)) 
              @if( $gethttplink )
                <a href="{{$HomeSectiontwo->button_link}}" class="btn btnPrimary arrowBtn mt-1 mt-sm-3" target="_blank">
                  {!! isset($HomeSectiontwo->button_text) ? $HomeSectiontwo->button_text : "Über uns"!!}
                </a>
              @else
                  <a href="{{route($HomeSectiontwo->routeName->route_link)}}{{isset($HomeSectiontwo->hash_tag_id) ? '#'.$HomeSectiontwo->hash_tag_id : ''}}" class="btn btnPrimary arrowBtn mt-1 mt-sm-3">
                    {!! isset($HomeSectiontwo->button_text) ? $HomeSectiontwo->button_text : "Über uns"!!} 
                  </a>
              @endif
            @endif
            {{-- ===================== --}}

                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif

        @include('livewire.common.clientLogo')
        @if(isset($HomeSliders) && count($HomeSliders) > 0)
        <section>
          <div class="nextSectionParent">
            <div id="4"></div>
          </div>
          <div class="sectionSpaceMd ourServicesCol">
            <div class="container">
              <h4 class="lgTitle serviceTitle">unsere Dienstleistungen</h4>
              <div class="serviceSliderCol">
                <div class="swiper serviceSwiper">
                  <div class="swiper-wrapper">
               
                      @foreach($HomeSliders as $slider)
                    <div class="swiper-slide">
                      <div class="serviceCard">
                        <div class="servImgCol">
                            <picture  >
                            <source media="(min-width:992px)" srcset="{{(isset($slider->image))? asset('storage/Home-slider/'.$slider->image):asset('no_image.jpg')}}">
                            <source media="(min-width:768px)" srcset="{{(isset($slider->tablet_img))? asset('storage/Home-slider/'.$slider->tablet_img ) :asset('storage/Home-slider/'.$slider->image)}}">
                            <img src="{{(isset($slider->mobile_img))? asset('storage/Home-slider/'.$slider->mobile_img) :asset('storage/Home-slider/'.$slider->image)}}" alt=""   class="servImg">
                          </picture>
                          {{-- <img  src="{{(isset($slider->image))  ? asset('storage/Home-slider/'.$slider->image) 
                          :asset('no_image.jpg')}}" alt="..." class="servImg"> --}}
                          <h4 class="servTitle"> {!! isset($slider->title) ? $slider->title : "NA"!!}
                          </h4>
                        </div>
                        <div class="servContentColMain">
                          <div class="servContentCol">
                            <h4 class="servTitle"> {!! isset($slider->title) ? $slider->title : "NA"!!} </h4>
                            <p> {!! isset($slider->description) ? $slider->description : "NA"!!} </p>
                            {{-- @if(  $slider->link == 'custom')
                            <a href="{{$slider->custom_Link}}" class="btn btnPrimary2">{!! isset($slider->button_text) ? $slider->button_text : "mehr erfahren"!!} </a>
                            @else
                            <a href="{{route($slider->link)}}" class="btn btnPrimary2">{!! isset($slider->button_text) ? $slider->button_text : "mehr erfahren"!!}</a>
                            @endif --}}
                              @php
                                  $httplink  = substr( $slider->link, 0, 4 ) === "http"
                              @endphp
                              @if(isset($slider->link)) 
                                @if( $httplink == true ) 
                                  <a href="{{$slider->link}}" target="_blank" class="btn btnPrimary2">{!! isset($slider->button_text) ? $slider->button_text : "mehr erfahren"!!} </a>
                                @else
                                <a href="{{route($slider->link)}}{{isset($slider->custom_Link) ? '#'.$slider->custom_Link : ''}}"  class="btn btnPrimary2">{!! isset($slider->button_text) ? $slider->button_text : "mehr erfahren"!!}</a>
                                @endif
                              @endif
                          </div>
                        </div>
                      </div>
                    </div>
                      @endforeach
                     </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        @endif


    @if(isset($HomeSecFive))
        <section>
          <div class="nextSectionParent">
            <div id="5"></div>
          </div>
          <div class="sectionSpaceMd lightBg analysisColMain">
            <div class="container">
              <div class="row gy-4 align-items-center">
                <div class="col-lg-6 order-lg-last">
                  <div class="imgCol ps-lg-4">
                    <picture>
                      <source media="(min-width:992px)" srcset="{{(isset($this->HomeSecFive->image)) 
                        ? asset('storage/Home-section/'.$HomeSecFive->image) :asset('no_image.jpg')}}">
                      <source media="(min-width:768px)" srcset="{{(isset($this->HomeSecFive->tablet_img)) 
                        ? asset('storage/Home-section/'.$HomeSecFive->tablet_img) 
                        :asset('storage/Home-section/'.$HomeSecFive->image)}}">
                      <img class="imgStyle1" src="{{(isset($this->HomeSecFive->mobile_img)) 
                        ? asset('storage/Home-section/'.$HomeSecFive->mobile_img) 
                        :asset('storage/Home-section/'.$HomeSecFive->image)}}" alt=""  class="imgStyle1">
                    </picture>
                    {{-- <img src="{{(isset($this->HomeSecFive->image)) ? asset('storage/Home-section/'.$HomeSecFive->image) :asset('no_image.jpg')}}" alt="..." class="imgStyle1"> --}}
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="contentCol">
                    <h2 class="lgTitle p2">{!! isset($HomeSecFive->heading)  ? html_entity_decode($HomeSecFive->heading) : "NA" !!}   </h2>
                    <p class="lgText p2 pt-1"> {!! isset($HomeSecFive->title)  ? html_entity_decode($HomeSecFive->title) : "NA" !!}   </p>
                    <p> {!! isset($HomeSecFive->para1)  ? html_entity_decode($HomeSecFive->para1) : "NA" !!}   </p>
                    <p> {!! isset($HomeSecFive->para2)  ? html_entity_decode($HomeSecFive->para2) : "NA" !!}    </p>

                 
                 
                 
            {{-- ================== --}}
            @php
            $gethttplink  =  strpos( $HomeSecFive->button_link, 'http') === 0;
            @endphp

            @if(isset($HomeSecFive->button_link)) 
              @if( $gethttplink )
                <a href="{{$HomeSecFive->button_link}}" class="btn btnPrimary arrowBtn mt-1 mt-sm-3" target="_blank">
                  {!! isset($HomeSecFive->button_name)  ? html_entity_decode($HomeSecFive->button_name) : "Gleich beraten lassen" !!} 
                </a>
              @else
                  <a href="{{route($HomeSecFive->routeName->route_link)}}{{isset($HomeSecFive->hash_tag_id) ? '#'.$HomeSecFive->hash_tag_id : ''}}" 
                    class="btn btnPrimary arrowBtn mt-1 mt-sm-3">
                    {!! isset($HomeSecFive->button_name)  ? html_entity_decode($HomeSecFive->button_name) : "Gleich beraten lassen" !!} 
                  </a>
              @endif
            @endif
            {{-- ===================== --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    @endif
</div>
