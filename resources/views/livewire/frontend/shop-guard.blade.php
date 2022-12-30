<div>
    {{-- Success is as dangerous as failure. --}}
    @if(isset($Shopmain))
    <section>
      <style>
        .bannerSection.innerPageBanner.s8Banner {
           background-image: url('{{asset('storage/All-banner/'.$Shopmain->banner_image)}}');
         }
         @media (max-width: 991px) {
           .bannerSection.innerPageBanner.s8Banner {
             background-image: url('{{asset('storage/All-banner/'.$Shopmain->tablet_banner)}}');
           }
         }
         </style>
       @if(isset($Shopmain->mobile_banner))
         <style>
             @media (max-width: 767px) {
               .bannerSection.innerPageBanner.s8Banner{
                 background-image: url('{{asset('storage/All-banner/'.$Shopmain->mobile_banner)}}');
               }
             }
         </style>
       @else 
         <style>
             .bannerSection.innerPageBanner.s8Banner { 
                background-image: url('{{asset('storage/All-banner/'.$Shopmain->banner_image)}}');  }
         </style>
       @endif
      <div class="bannerSection innerPageBanner s8Banner"  >
        <div class="container">
          <div class="bannerContent">
            <h1 class="xlTitle">{!!	isset($Shopmain->heading) ? $Shopmain->heading : "NA"!!}</h1>
            <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
              {!!isset($Shopmain->title) ? $Shopmain->title : "NA"!!} 
            </p>
     

           {{-- ================== --}}
                 @php
                      $gethttplink  =  strpos( $Shopmain->button_link, 'http') === 0;
                @endphp
                @if(isset($Shopmain->button_link)) 
                  @if( $gethttplink )
                    <a href="{{$Shopmain->button_link}}" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4" target="_blank">
                      {!! isset($Shopmain->button_text)  ? html_entity_decode($Shopmain->button_text) : "Gleich beraten lassen" !!} 
                    </a>
                  @else
                      <a href="{{route($Shopmain->routeName->route_link)}}{{isset($Shopmain->hash_tag_id) ? '#'.$Shopmain->hash_tag_id : ''}}" 
                        class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
                        {!! isset($Shopmain->button_text)  ? html_entity_decode($Shopmain->button_text) : "Gleich beraten lassen" !!} 
                      </a>
                  @endif
                  @else
                @endif
                {{-- ===================== --}}
          </div>
        </div>
      </div>
    </section>
  @endif

  @if(isset($ShopPagesection))
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
              <source media="(min-width:992px)" srcset="{{(isset($this->ShopPagesection->sec_image)) 
                ? asset('storage/services-section/'.$ShopPagesection->sec_image) :asset('no_image.jpg')}}">
              <source media="(min-width:768px)" srcset="{{(isset($this->ShopPagesection->tablet_banner)) 
                ? asset('storage/services-section/'.$ShopPagesection->tablet_banner) :
                asset('storage/services-section/'.$ShopPagesection->sec_image)}}">
              <img class="imgStyle1" src="{{(isset($this->ShopPagesection->mobile_banner)) 
                ? asset('storage/services-section/'.$ShopPagesection->mobile_banner) :
                asset('storage/services-section/'.$ShopPagesection->sec_image)}}" alt="">
          </picture>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="contentCol">
                <h2 class="lgTitle p2 contentMxWdTitle">
                  {!! isset($ShopPagesection->heading)  ? html_entity_decode($ShopPagesection->heading) : "NA" !!} </h2>
                <p class="lgText p2 pt-1">
                  {!! isset($ShopPagesection->title)  ? html_entity_decode($ShopPagesection->title) : "NA" !!}  </p>
         
                <p>{!! isset($ShopPagesection->para1)  ? html_entity_decode($ShopPagesection->para1) : "NA" !!} </p>
                <p> {!! isset($ShopPagesection->para2)  ? html_entity_decode($ShopPagesection->para2) : "NA" !!} </p>
                <p>  {!! isset($ShopPagesection->para3)  ? html_entity_decode($ShopPagesection->para3) : "NA" !!} </p>
                @if(isset($ShopPagesection->para4))
                <p>  {!! isset($ShopPagesection->para4)  ? html_entity_decode($ShopPagesection->para4) : "NA" !!} </p>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif


  @if(isset($Shop_pagebanner))
    <section>
      <div class="nextSectionParent">
        <div id="2"></div>
      </div>
      <style>
        .sectionBgCol.serviceSectionBg8 {
          background-image: url('{{asset('storage/services-banner/'.$Shop_pagebanner->banner)}}');
        }
  
        @media (max-width: 991px) {
          .sectionBgCol.serviceSectionBg8 {
            background-image: url('{{asset('storage/services-banner/'.$Shop_pagebanner->tablet_banner)}}');
          }
        }
      </style>
    @if(isset($Shop_pagebanner->mobile_banner))
        <style>
          @media (max-width: 767px) {
            .sectionBgCol.serviceSectionBg8 {
              background-image: url('{{asset('storage/services-banner/'.$Shop_pagebanner->mobile_banner)}}');
            }
          }
        </style>
    @else 
        <style>
          .sectionBgCol.serviceSectionBg8 {
            background-image: url('{{asset('storage/services-banner/'.$Shop_pagebanner->banner)}}');
          }
          </style>
    @endif
      <div class="sectionBgCol serviceSectionBg8" >
        <div class="container">
          <div class="sectonTitleCol">
            <h4 class="xlTitle"> {!! isset($Shop_pagebanner->heading) ? $Shop_pagebanner->heading : "NA" !!}</h4>
          </div>
        </div>
      </div>
    </section>
    @endif
    
      @include('livewire.common.take_step')
</div>
