<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    
    @if(isset($centerbewachung))
    <section>

      <style>
       .bannerSection.innerPageBanner.s2Banner {
          background-image: url('{{asset('storage/All-banner/'.$centerbewachung->banner_image)}}');
        }
        @media (max-width: 991px) {
          .bannerSection.innerPageBanner.s2Banner {
            background-image: url('{{asset('storage/All-banner/'.$centerbewachung->tablet_banner)}}');
          }
        }
        </style>
      @if(isset($centerbewachung->mobile_banner))
        <style>
            @media (max-width: 767px) {
              .bannerSection.innerPageBanner.s2Banner{
                background-image: url('{{asset('storage/All-banner/'.$centerbewachung->mobile_banner)}}');
              }
            }
        </style>
      @else 
        <style>
            .bannerSection.innerPageBanner.s2Banner { 
               background-image: url('{{asset('storage/All-banner/'.$centerbewachung->banner_image)}}');  }
        </style>
      @endif
        <div class="bannerSection innerPageBanner s2Banner" >
          <div class="container">
            <div class="bannerContent mw-100">
              <h1 class="xlTitle">
                {{	isset($centerbewachung->heading) ? $centerbewachung->heading : "NA"}}
              </h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
                {{	isset($centerbewachung->title) ? $centerbewachung->title : "NA"}}
              </p>
              <a href="{!! isset($centerbewachung->button_link) ? $centerbewachung->button_link : "#nextSection"!!}" target="__blank" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
                {{	isset($centerbewachung->button_text) ? $centerbewachung->button_text : "Angebot einholen"}} 
              </a>
            </div>
          </div>
        </div>
      </section>
    @endif

@if($centerPagesection)
  <section>
    <div class="nextSectionParent">
      <div id="nextSection"></div>
    </div>
    <div class="sectionSpace">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6">
            <div class="imgCol pe-lg-4">
         
            <picture>
              <source media="(min-width:992px)" srcset="{{(isset($this->centerPagesection->sec_image)) 
                ? asset('storage/services-section/'.$centerPagesection->sec_image) :asset('no_image.jpg')}}">
              <source media="(min-width:768px)" srcset="{{(isset($this->centerPagesection->tablet_banner)) 
                ? asset('storage/services-section/'.$centerPagesection->tablet_banner) :
                asset('storage/services-section/'.$centerPagesection->sec_image)}}">
              <img class="imgStyle1" src="{{(isset($this->centerPagesection->mobile_banner)) 
                ? asset('storage/services-section/'.$centerPagesection->mobile_banner) :
                asset('storage/services-section/'.$centerPagesection->sec_image)}}" alt="" style="width:auto;">
            </picture>
          </div>
          </div>
          <div class="col-lg-6">
            <div class="contentCol">
              <h2 class="lgTitle p2">
                {!! isset($centerPagesection->heading)  ? html_entity_decode($centerPagesection->heading) : "NA" !!}  
              </h2>
              <p class="lgText p2 pt-1">
                {!! isset($centerPagesection->title)  ? html_entity_decode($centerPagesection->title) : "NA" !!} 
              </p>
              <p> {!! isset($centerPagesection->para1)  ? html_entity_decode($centerPagesection->para1) : "NA" !!}   </p>
              <p> {!! isset($centerPagesection->para2)  ? html_entity_decode($centerPagesection->para2) : "NA" !!}   </p>
              <p> {!! isset($centerPagesection->para3)  ? html_entity_decode($centerPagesection->para3) : "NA" !!}   </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif
    

@if(isset($center_pagebanner))

      <section>
        <style>
          .sectionBgCol.serviceSectionBg2 {
            background-image: url('{{asset('storage/services-banner/'.$center_pagebanner->banner)}}');
          }
  
          @media (max-width: 991px) {
            .sectionBgCol.serviceSectionBg2 {
              background-image: url('{{asset('storage/services-banner/'.$center_pagebanner->tablet_banner)}}');
            }
          }
        </style>
      @if(isset($center_pagebanner->mobile_banner))
          <style>
            @media (max-width: 767px) {
              .sectionBgCol.serviceSectionBg2 {
                background-image: url('{{asset('storage/services-banner/'.$center_pagebanner->mobile_banner)}}');
              }
            }
          </style>
      @else 
          <style>
            .sectionBgCol.serviceSectionBg2 {
              background-image: url('{{asset('storage/services-banner/'.$center_pagebanner->banner)}}');
            }
            </style>
      @endif
        <div class="sectionBgCol serviceSectionBg2"  >
          <div class="container">
            <div class="sectonTitleCol">
              <h4 class="xlTitle">
                {!! isset($center_pagebanner->heading ) ? $center_pagebanner->heading  : "NA"!!}
              </h4>
            </div>
          </div>
        </div>
      </section>
    @endif
      @include('livewire.common.take_step')
</div>
