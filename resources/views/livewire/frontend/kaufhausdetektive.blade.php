<div>
    {{-- The Master doesn't talk, he acts. --}}
    @if(isset($Kaufhausmain))
    <section>
      <style>
        .bannerSection.innerPageBanner.s3Banner {
          background-image: url('{{asset('storage/All-banner/'.$Kaufhausmain->banner_image)}}');
        }
        @media (max-width: 991px) {
          .bannerSection.innerPageBanner.s3Banner {
            background-image: url('{{asset('storage/All-banner/'.$Kaufhausmain->tablet_banner)}}');
          }
        }
        @media (max-width: 767px) {
          .bannerSection.innerPageBanner.s3Banner {
            background-image: url('{{asset('storage/All-banner/'.$Kaufhausmain->mobile_banner)}}');
          }
        }
      </style>
        <div class="bannerSection innerPageBanner s3Banner"  >
          <div class="container">
            <div class="bannerContent mw-100">
              <h1 class="xlTitle">
                {{	isset($Kaufhausmain->heading) ? $Kaufhausmain->heading : "NA"}}
              </h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
                {{	isset($Kaufhausmain->title) ? $Kaufhausmain->title : "NA"}}
              </p>
              <a href="{!! isset($Kaufhausmain->button_link) ? $Kaufhausmain->button_link : "#"!!}" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4"> 
                {{	isset($Kaufhausmain->button_text) ? $Kaufhausmain->button_text : "Angebot einholen"}} 
              </a>
            </div>
          </div>
        </div>
      </section>
    @endif 

    @if(isset($KaufhausPagesection))
      <section>
        <div class="sectionSpace">
          <div class="container">
            <div class="row gy-4 align-items-center">
              <div class="col-lg-6">
                <div class="imgCol pe-lg-4">

                    
            <picture>
              <source media="(min-width:992px)" srcset="{{(isset($this->KaufhausPagesection->sec_image)) 
                ? asset('storage/services-section/'.$KaufhausPagesection->sec_image) :asset('no_image.jpg')}}">
              <source media="(min-width:768px)" srcset="{{(isset($this->KaufhausPagesection->tablet_banner)) 
                ? asset('storage/services-section/'.$KaufhausPagesection->tablet_banner) :
                asset('storage/services-section/'.$KaufhausPagesection->sec_image)}}">
              <img class="imgStyle1" src="{{(isset($this->KaufhausPagesection->mobile_banner)) 
                ? asset('storage/services-section/'.$KaufhausPagesection->mobile_banner) :
                asset('storage/services-section/'.$KaufhausPagesection->sec_image)}}" alt="" style="width:auto;">
            </picture>
              
              </div>
              </div>
              <div class="col-lg-6">
                <div class="contentCol">
                  <h2 class="lgTitle p2">  {!! isset($KaufhausPagesection->heading)  ? html_entity_decode($KaufhausPagesection->heading) : "NA" !!}  </h2>
                  <p class="lgText p2 pt-1">  {!! isset($KaufhausPagesection->title)  ? html_entity_decode($KaufhausPagesection->title) : "NA" !!}   </p>
                  <p>  {!! isset($KaufhausPagesection->para1)  ? html_entity_decode($KaufhausPagesection->para1) : "NA" !!}  </p>
                  <p>  {!! isset($KaufhausPagesection->para2)  ? html_entity_decode($KaufhausPagesection->para2) : "NA" !!}  </p>
                  <p> {!! isset($KaufhausPagesection->para3)  ? html_entity_decode($KaufhausPagesection->para3) : "NA" !!}  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endif
    @if(isset($Kaufhaus_pagebanner))
      <section>

        <style>
          .sectionBgCol.serviceSectionBg3 {
            background-image: url('{{asset('storage/services-banner/'.$Kaufhaus_pagebanner->banner)}}');
          }
    
          @media (max-width: 991px) {
            .sectionBgCol.serviceSectionBg3 {
              background-image: url('{{asset('storage/services-banner/'.$Kaufhaus_pagebanner->tablet_banner)}}');
            }
          }
        </style>
      @if(isset($Kaufhaus_pagebanner->mobile_banner))
          <style>
            @media (max-width: 767px) {
              .sectionBgCol.serviceSectionBg3 {
                background-image: url('{{asset('storage/services-banner/'.$Kaufhaus_pagebanner->mobile_banner)}}');
              }
            }
          </style>
      @else 
          <style>
            .sectionBgCol.serviceSectionBg3 {
              background-image: url('{{asset('storage/services-banner/'.$Kaufhaus_pagebanner->banner)}}');
            }
            </style>
      @endif
        <div class="sectionBgCol serviceSectionBg3" >
          <div class="container">
            <div class="sectonTitleCol">
              <h4 class="xlTitle">
                {!! isset($Kaufhaus_pagebanner->heading) ? $Kaufhaus_pagebanner->heading : "NA" !!}
              </h4>
            </div>
          </div>
        </div>
      </section>
      @endif
    
      @include('livewire.common.take_step')
</div>
