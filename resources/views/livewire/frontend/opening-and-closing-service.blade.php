<div>
    {{-- Success is as dangerous as failure. --}}
   
@if(isset($Openingmain))
    <section>
      <style>
        .bannerSection.innerPageBanner.s5Banner {
           background-image: url('{{asset('storage/All-banner/'.$Openingmain->banner_image)}}');
         }
         @media (max-width: 991px) {
           .bannerSection.innerPageBanner.s5Banner {
             background-image: url('{{asset('storage/All-banner/'.$Openingmain->tablet_banner)}}');
           }
         }
         </style>
       @if(isset($Openingmain->mobile_banner))
         <style>
             @media (max-width: 767px) {
               .bannerSection.innerPageBanner.s5Banner{
                 background-image: url('{{asset('storage/All-banner/'.$Openingmain->mobile_banner)}}');
               }
             }
         </style>
       @else 
         <style>
             .bannerSection.innerPageBanner.s5Banner { 
                background-image: url('{{asset('storage/All-banner/'.$Openingmain->banner_image)}}');  }
         </style>
       @endif
      <div class="bannerSection innerPageBanner s5Banner" >
        <div class="container">
          <div class="bannerContent">
            <h1 class="xlTitle">
              {{	isset($Openingmain->heading) ? $Openingmain->heading : "NA"}}  
            </h1>
            <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
              {{	isset($Openingmain->title) ? $Openingmain->title : "NA"}}
            </p>
            <a href="{!! isset($Openingmain->button_link) ? $Openingmain->button_link : "#"!!}" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
              {{	isset($Openingmain->button_text) ? $Openingmain->button_text : "Angebot einholen"}}
            </a>
          </div>
        </div>
      </div>
    </section>
  @endif

  @if(isset($OpeningPagesection))
    <section>
      <div class="sectionSpace">
        <div class="container">
          <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
              <div class="imgCol pe-lg-4">
                <picture>
                    <source media="(min-width:992px)" srcset="{{(isset($this->OpeningPagesection->sec_image)) 
                      ? asset('storage/services-section/'.$OpeningPagesection->sec_image) :asset('no_image.jpg')}}">
                    <source media="(min-width:768px)" srcset="{{(isset($this->OpeningPagesection->tablet_banner)) 
                      ? asset('storage/services-section/'.$OpeningPagesection->tablet_banner) :
                      asset('storage/services-section/'.$OpeningPagesection->sec_image)}}">
                    <img class="imgStyle1" src="{{(isset($this->OpeningPagesection->mobile_banner)) 
                      ? asset('storage/services-section/'.$OpeningPagesection->mobile_banner) :
                      asset('storage/services-section/'.$OpeningPagesection->sec_image)}}" alt="" style="width:auto;">
                </picture>
            </div>
            </div>
            <div class="col-lg-6">
              <div class="contentCol">
                <h2 class="lgTitle p2">
                  {!! isset($OpeningPagesection->heading)  ? html_entity_decode($OpeningPagesection->heading) : "NA" !!}    
                </h2>
                <p class="lgText p2 pt-1">
                  {!! isset($OpeningPagesection->title)  ? html_entity_decode($OpeningPagesection->title) : "NA" !!}  

                </p>
                <p>
                  {!! isset($OpeningPagesection->para1)  ? html_entity_decode($OpeningPagesection->para1) : "NA" !!}  
                </p>

                <p>
                  {!! isset($OpeningPagesection->para2)  ? html_entity_decode($OpeningPagesection->para2) : "NA" !!}  
                </p>

                <p>
                  {!! isset($OpeningPagesection->para3)  ? html_entity_decode($OpeningPagesection->para3) : "NA" !!}  
                </p>
                @if(isset($OpeningPagesection->para4))
                <p>
                  {!! isset($OpeningPagesection->para4)  ? html_entity_decode($OpeningPagesection->para4) : "NA" !!}  
                </p>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif

  @if(isset($Opening_pagebanner))
    <section>
      <style>
        .sectionBgCol.serviceSectionBg5 {
          background-image: url('{{asset('storage/services-banner/'.$Opening_pagebanner->banner)}}');
        }
  
        @media (max-width: 991px) {
          .sectionBgCol.serviceSectionBg5 {
            background-image: url('{{asset('storage/services-banner/'.$Opening_pagebanner->tablet_banner)}}');
          }
        }
      </style>
    @if(isset($Opening_pagebanner->mobile_banner))
        <style>
          @media (max-width: 767px) {
            .sectionBgCol.serviceSectionBg5 {
              background-image: url('{{asset('storage/services-banner/'.$Opening_pagebanner->mobile_banner)}}');
            }
          }
        </style>
    @else 
        <style>
          .sectionBgCol.serviceSectionBg5 {
            background-image: url('{{asset('storage/services-banner/'.$Opening_pagebanner->banner)}}');
          }
          </style>
    @endif
      <div class="sectionBgCol serviceSectionBg5" >
        <div class="container">
          <div class="sectonTitleCol">
            <h4 class="xlTitle">
              {!! isset($Opening_pagebanner->heading) ? $Opening_pagebanner->heading : "NA" !!}  </h4>
          </div>
        </div>
      </div>
    </section>
    @endif
    
      @include('livewire.common.take_step')
    
</div>
