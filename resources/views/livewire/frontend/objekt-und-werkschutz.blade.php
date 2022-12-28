<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @if(isset($this->ObjektUndPageBanner))
      <section>
        <style>
          .bannerSection.innerPageBanner.s1Banner {
             background-image: url('{{asset('storage/All-banner/'.$ObjektUndPageBanner->banner_image)}}');
           }
           @media (max-width: 991px) {
             .bannerSection.innerPageBanner.s1Banner {
               background-image: url('{{asset('storage/All-banner/'.$ObjektUndPageBanner->tablet_banner)}}');
             }
           }
           </style>
         @if(isset($ObjektUndPageBanner->mobile_banner))
           <style>
               @media (max-width: 767px) {
                 .bannerSection.innerPageBanner.s1Banner{
                   background-image: url('{{asset('storage/All-banner/'.$ObjektUndPageBanner->mobile_banner)}}');
                 }
               }
           </style>
         @else 
           <style>
               .bannerSection.innerPageBanner.s1Banner { 
                  background-image: url('{{asset('storage/All-banner/'.$ObjektUndPageBanner->banner_image)}}');  }
           </style>
         @endif
        <div class="bannerSection innerPageBanner s1Banner" >
          <div class="container">
            <div class="bannerContent">
              <h1 class="xlTitle">
      

                {{	isset($ObjektUndPageBanner->heading) ? $ObjektUndPageBanner->heading : "NA"}}
              </h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
                {{	isset($ObjektUndPageBanner->title) ? $ObjektUndPageBanner->title : "NA"}}
              </p>
              <a href="{!! isset($ObjektUndPageBanner->button_link) ? $ObjektUndPageBanner->button_link : "#nextSection"!!}" target="__blank" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
                {{	isset($ObjektUndPageBanner->button_text) ? $ObjektUndPageBanner->button_text : "Angebot einholen"}} </a>
            </div>
          </div>
        </div>
      </section>
      @endif
     
@if(isset($ObjektUndPagesection))
      <section>
        <div class="nextSectionParent">
          <div id="1"></div>
        </div>
        <div class="sectionSpace">
          <div class="container">
            <div class="row gy-4 align-items-center">
              <div class="col-lg-6">
                <div class="imgCol pe-lg-4">
                   {{-- detect  --}}
                  

                <picture>
                  <source media="(min-width:992px)" srcset="{{(isset($this->ObjektUndPagesection->sec_image)) 
                    ? asset('storage/services-section/'.$ObjektUndPagesection->sec_image) :asset('no_image.jpg')}}">
                  <source media="(min-width:768px)" srcset="{{(isset($this->ObjektUndPagesection->tablet_banner)) 
                    ? asset('storage/services-section/'.$ObjektUndPagesection->tablet_banner) :asset('storage/services-section/'.$ObjektUndPagesection->sec_image)}}">
                  <img class="imgStyle1" src="{{(isset($this->ObjektUndPagesection->mobile_banner)) 
                    ? asset('storage/services-section/'.$ObjektUndPagesection->mobile_banner) :asset('storage/services-section/'.$ObjektUndPagesection->sec_image)}}" alt="">
                </picture>
               {{-- end detect  --}}

                </div>
              </div>
              <div class="col-lg-6">
                <div class="contentCol">
                  <h2 class="lgTitle p2">
                    {!! isset($ObjektUndPagesection->heading)  ? html_entity_decode($ObjektUndPagesection->heading) : "NA" !!}  


                  </h2>
                  <p class="lgText p2 pt-1">
                    {!! isset($ObjektUndPagesection->title)  ? html_entity_decode($ObjektUndPagesection->title) : "NA" !!}  

                  </p>
                  <p>
                    {!! isset($ObjektUndPagesection->para1)  ? html_entity_decode($ObjektUndPagesection->para1) : "NA" !!}  
                  </p>
                  <p>
                    {!! isset($ObjektUndPagesection->para2)  ? html_entity_decode($ObjektUndPagesection->para2) : "NA" !!}  
                  </p>

                  @if(isset($ObjektUndPagesection->para3))
                  <p>
                  {!! isset($ObjektUndPagesection->para3)  ? html_entity_decode($ObjektUndPagesection->para3) : "NA" !!}  
                  </p>
                  @endif

                  
                  @if(isset($ObjektUndPagesection->para4))
                  <p>
                  {!! isset($ObjektUndPagesection->para4)  ? html_entity_decode($ObjektUndPagesection->para4) : "NA" !!}  
                  </p>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endif
    @if(isset($Services_pagebanner))
      <section>
        <div class="nextSectionParent">
          <div id="2"></div>
        </div>
          <style>
          .sectionBgCol.serviceSectionBg1 {
            background-image: url('{{asset('storage/services-banner/'.$Services_pagebanner->banner)}}');
          }
    
          @media (max-width: 991px) {
            .sectionBgCol.serviceSectionBg1 {
              background-image: url('{{asset('storage/services-banner/'.$Services_pagebanner->tablet_banner)}}');
            }
          }
        </style>
      @if(isset($Services_pagebanner->mobile_banner))
          <style>
            @media (max-width: 767px) {
              .sectionBgCol.serviceSectionBg1 {
                background-image: url('{{asset('storage/services-banner/'.$Services_pagebanner->mobile_banner)}}');
              }
            }
          </style>
      @else 
          <style>
            .sectionBgCol.serviceSectionBg1 {
              background-image: url('{{asset('storage/services-banner/'.$Services_pagebanner->banner)}}');
            }
            </style>
      @endif
        <div class="sectionBgCol serviceSectionBg1" >
          <div class="container">
            <div class="sectonTitleCol">
              <h4 class="xlTitle">
                {!! $Services_pagebanner->heading !!}
              </h4>
            </div>
          </div>
        </div>
      </section>
    @endif
      @include('livewire.common.take_step')
</div>
