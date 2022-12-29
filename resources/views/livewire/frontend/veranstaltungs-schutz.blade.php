<div>
    {{-- Stop trying to control. --}}
    @if(isset($veranstmain))
      <section>
        <style>
          .bannerSection.innerPageBanner.s9Banner {
             background-image: url('{{asset('storage/All-banner/'.$veranstmain->banner_image)}}');
           }
           @media (max-width: 991px) {
             .bannerSection.innerPageBanner.s9Banner {
               background-image: url('{{asset('storage/All-banner/'.$veranstmain->tablet_banner)}}');
             }
           }
           </style>
         @if(isset($veranstmain->mobile_banner))
           <style>
               @media (max-width: 767px) {
                 .bannerSection.innerPageBanner.s9Banner{
                   background-image: url('{{asset('storage/All-banner/'.$veranstmain->mobile_banner)}}');
                 }
               }
           </style>
         @else 
           <style>
               .bannerSection.innerPageBanner.s9Banner { 
                  background-image: url('{{asset('storage/All-banner/'.$veranstmain->banner_image)}}');  }
           </style>
         @endif
        <div class="bannerSection innerPageBanner s9Banner" >
          <div class="container">
            <div class="bannerContent">
              <h1 class="xlTitle">{!!	isset($veranstmain->heading) ? $veranstmain->heading : "NA"!!}</h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">{!!	isset($veranstmain->title) ? $veranstmain->title : "NA"!!}</p>
           
                  {{-- ================== --}}
                  @php
                  $gethttplink  =  strpos( $veranstmain->button_link, 'http') === 0;
            @endphp
            @if(isset($veranstmain->button_link)) 
              @if( $gethttplink )
                <a href="{{$veranstmain->button_link}}" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4 " target="_blank">
                  {!! isset($veranstmain->button_name)  ? html_entity_decode($veranstmain->button_name) : "Gleich beraten lassen" !!} 
                </a>
              @else
                  <a href="{{route($veranstmain->routeName->route_link)}}{{isset($veranstmain->hash_tag_id) ? '#'.$veranstmain->hash_tag_id : ''}}" 
                    class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4 ">
                    {!! isset($veranstmain->button_name)  ? html_entity_decode($veranstmain->button_name) : "Gleich beraten lassen" !!} 
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

    @if(isset($veranstPagesection))
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
                    <source media="(min-width:992px)" srcset="{{(isset($this->veranstPagesection->sec_image)) 
                      ? asset('storage/services-section/'.$veranstPagesection->sec_image) :asset('no_image.jpg')}}">
                    <source media="(min-width:768px)" srcset="{{(isset($this->veranstPagesection->tablet_banner)) 
                      ? asset('storage/services-section/'.$veranstPagesection->tablet_banner) :
                      asset('storage/services-section/'.$veranstPagesection->sec_image)}}">
                    <img class="imgStyle1" src="{{(isset($this->veranstPagesection->mobile_banner)) 
                      ? asset('storage/services-section/'.$veranstPagesection->mobile_banner) :
                      asset('storage/services-section/'.$veranstPagesection->sec_image)}}" alt="" >
                </picture>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contentCol">
                  <h2 class="lgTitle p2"> {!! isset($veranstPagesection->heading)  ? html_entity_decode($veranstPagesection->heading) : "NA" !!}</h2>
                  <p class="lgText p2 pt-1"> {!! isset($veranstPagesection->title)  ? html_entity_decode($veranstPagesection->title) : "NA" !!}</p>
             
                <p>{!! isset($veranstPagesection->para1)  ? html_entity_decode($veranstPagesection->para1) : "NA" !!} </p>
                <p> {!! isset($veranstPagesection->para2)  ? html_entity_decode($veranstPagesection->para2) : "NA" !!} </p>
                @if($veranstPagesection->para3)
                <p>  {!! isset($veranstPagesection->para3)  ? html_entity_decode($veranstPagesection->para3) : "NA" !!} </p>
                @endif
                @if(isset($veranstPagesection->para4))
                <p>  {!! isset($veranstPagesection->para4)  ? html_entity_decode($veranstPagesection->para4) : "NA" !!} </p>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    @endif

    @if($veranstpagebanner)
    <section>
      <div class="nextSectionParent">
        <div id="2"></div>
      </div>
      <style>
        .sectionBgCol.serviceSectionBg9 {
          background-image: url('{{asset('storage/services-banner/'.$veranstpagebanner->banner)}}');
        }
  
        @media (max-width: 991px) {
          .sectionBgCol.serviceSectionBg9 {
            background-image: url('{{asset('storage/services-banner/'.$veranstpagebanner->tablet_banner)}}');
          }
        }
      </style>
    @if(isset($veranstpagebanner->mobile_banner))
        <style>
          @media (max-width: 767px) {
            .sectionBgCol.serviceSectionBg9 {
              background-image: url('{{asset('storage/services-banner/'.$veranstpagebanner->mobile_banner)}}');
            }
          }
        </style>
    @else 
        <style>
          .sectionBgCol.serviceSectionBg9 {
            background-image: url('{{asset('storage/services-banner/'.$veranstpagebanner->banner)}}');
          }
          </style>
    @endif
      <div class="sectionBgCol serviceSectionBg9" >
        <div class="container">
          <div class="sectonTitleCol">
            <h4 class="xlTitle">{!! isset($veranstpagebanner->heading) ? $veranstpagebanner->heading : "NA" !!}</h4>
          </div>
        </div>
      </div>
    </section>
    @endif
    @include('livewire.common.take_step')
</div>
