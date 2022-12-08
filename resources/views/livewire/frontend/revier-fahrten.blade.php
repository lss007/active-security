<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @if(isset($Reviermain))
    <section>
      <style>
        .bannerSection.innerPageBanner.s6Banner {
           background-image: url('{{asset('storage/All-banner/'.$Reviermain->banner_image)}}');
         }
         @media (max-width: 991px) {
           .bannerSection.innerPageBanner.s6Banner {
             background-image: url('{{asset('storage/All-banner/'.$Reviermain->tablet_banner)}}');
           }
         }
         </style>
       @if(isset($Reviermain->mobile_banner))
         <style>
             @media (max-width: 767px) {
               .bannerSection.innerPageBanner.s6Banner{
                 background-image: url('{{asset('storage/All-banner/'.$Reviermain->mobile_banner)}}');
               }
             }
         </style>
       @else 
         <style>
             .bannerSection.innerPageBanner.s6Banner { 
                background-image: url('{{asset('storage/All-banner/'.$Reviermain->banner_image)}}');  }
         </style>
       @endif
      <div class="bannerSection innerPageBanner s6Banner"    >
        <div class="container">
          <div class="bannerContent">
            <h1 class="xlTitle">
              {{	isset($Reviermain->heading) ? $Reviermain->heading : "NA"}}  
            </h1>
            <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
              {{	isset($Reviermain->title) ? $Reviermain->title : "NA"}}  
            </p>
            <a href="{!! isset($Reviermain->button_link) ? $Reviermain->button_link : "#"!!}" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
              {{	isset($Reviermain->button_text) ? $Reviermain->button_text : "Angebot einholen"}}
            </a>
          </div>
        </div>
      </div>
    </section>
    @endif
  

    @if(isset($RevierPagesection))
    <section>
      <div class="sectionSpace">
        <div class="container">
          <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
              <div class="imgCol pe-lg-4">

                      <picture>
                        <source media="(min-width:992px)" srcset="{{(isset($this->RevierPagesection->sec_image)) 
                          ? asset('storage/services-section/'.$RevierPagesection->sec_image) :asset('no_image.jpg')}}">
                        <source media="(min-width:768px)" srcset="{{(isset($this->RevierPagesection->tablet_banner)) 
                          ? asset('storage/services-section/'.$RevierPagesection->tablet_banner) :
                          asset('storage/services-section/'.$RevierPagesection->sec_image)}}">
                        <img class="imgStyle1" src="{{(isset($this->RevierPagesection->mobile_banner)) 
                          ? asset('storage/services-section/'.$RevierPagesection->mobile_banner) :
                          asset('storage/services-section/'.$RevierPagesection->sec_image)}}" alt="" style="width:auto;">
                    </picture>
            
            </div>
            </div>
            <div class="col-lg-6">
              <div class="contentCol">
                <h2 class="lgTitle p2">
                  {!! isset($RevierPagesection->heading)  ? html_entity_decode($RevierPagesection->heading) : "NA" !!}    
                  
                </h2>
                <p class="lgText p2 pt-1">
                  {!! isset($RevierPagesection->title)  ? html_entity_decode($RevierPagesection->title) : "NA" !!}  
                  
                  </p>
         
                  <p>
                    {!! isset($RevierPagesection->para1)  ? html_entity_decode($RevierPagesection->para1) : "NA" !!}  
                  </p>
                  <p>
                    {!! isset($RevierPagesection->para2)  ? html_entity_decode($RevierPagesection->para2) : "NA" !!}  
                  </p>
                  <p>
                    {!! isset($RevierPagesection->para3)  ? html_entity_decode($RevierPagesection->para3) : "NA" !!}  
                  </p>
                  @if(isset($RevierPagesection->para4))
                  <p>
                    {!! isset($RevierPagesection->para4)  ? html_entity_decode($RevierPagesection->para4) : "NA" !!}  
                  </p>
                  @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
  
    @if(isset($Revier_pagebanner))
    <section>
      <style>
        .sectionBgCol.serviceSectionBg6 {
          background-image: url('{{asset('storage/services-banner/'.$Revier_pagebanner->banner)}}');
        }
  
        @media (max-width: 991px) {
          .sectionBgCol.serviceSectionBg6 {
            background-image: url('{{asset('storage/services-banner/'.$Revier_pagebanner->tablet_banner)}}');
          }
        }
      </style>
    @if(isset($Revier_pagebanner->mobile_banner))
        <style>
          @media (max-width: 767px) {
            .sectionBgCol.serviceSectionBg6 {
              background-image: url('{{asset('storage/services-banner/'.$Revier_pagebanner->mobile_banner)}}');
            }
          }
        </style>
    @else 
        <style>
          .sectionBgCol.serviceSectionBg6 {
            background-image: url('{{asset('storage/services-banner/'.$Revier_pagebanner->banner)}}');
          }
          </style>
          @endif
      <div class="sectionBgCol serviceSectionBg6" >
        <div class="container">
          <div class="sectonTitleCol">
            <h4 class="xlTitle">
              {!! isset($Revier_pagebanner->heading) ? $Revier_pagebanner->heading : "NA" !!} 
            </h4>
          </div>
        </div>
      </div>
    </section>
    @endif
      @include('livewire.common.take_step')
    
</div>
