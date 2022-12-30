<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    @if(isset($Jobsmain))
    <section>
      <style>
        .bannerSection.innerPageBanner.jobsBanner {
           background-image: url('{{asset('storage/All-banner/'.$Jobsmain->banner_image)}}');
         }
         @media (max-width: 991px) {
           .bannerSection.innerPageBanner.jobsBanner {
             background-image: url('{{asset('storage/All-banner/'.$Jobsmain->tablet_banner)}}');
           }
         }
         </style>
       @if(isset($Jobsmain->mobile_banner))
         <style>
             @media (max-width: 767px) {
               .bannerSection.innerPageBanner.jobsBanner{
                 background-image: url('{{asset('storage/All-banner/'.$Jobsmain->mobile_banner)}}');
               }
             }
         </style>
       @else 
         <style>
             .bannerSection.innerPageBanner.jobsBanner { 
                background-image: url('{{asset('storage/All-banner/'.$Jobsmain->banner_image)}}');  }
         </style>
       @endif
        <div class="bannerSection innerPageBanner jobsBanner"  >
          <div class="container">
            <div class="bannerContent mw-100">
              <h1 class="xlTitle">     {{	isset($Jobsmain->heading) ? $Jobsmain->heading : "NA"}}</h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
                {{	isset($Jobsmain->title) ? $Jobsmain->title : "NA"}}</p>

          {{-- ================== --}}
            @php
                  $gethttplink  =  strpos( $Jobsmain->button_link, 'http') === 0;
            @endphp
            @if(isset($Jobsmain->button_link)) 
              @if( $gethttplink )
                <a href="{{$Jobsmain->button_link}}" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4" target="_blank">
                  {!! isset($Jobsmain->button_text)  ? html_entity_decode($Jobsmain->button_text) : "Gleich beraten lassen" !!} 
                </a>
              @else
                  <a href="{{route($Jobsmain->routeName->route_link)}}{{isset($Jobsmain->hash_tag_id) ? '#'.$Jobsmain->hash_tag_id : ''}}" 
                    class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
                    {!! isset($Jobsmain->button_text)  ? html_entity_decode($Jobsmain->button_text) : "Gleich beraten lassen" !!} 
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
    @if(isset($getJobsec))
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
                    <source media="(min-width:992px)" srcset="{{(isset($this->getJobsec->image)) 
                      ? asset('storage/job/'.$getJobsec->image) :asset('no_image.jpg')}}">
                    <source media="(min-width:768px)" srcset="{{(isset($this->getJobsec->tablet_banner)) 
                      ? asset('storage/job/'.$getJobsec->tablet_banner) :
                      asset('storage/job/'.$getJobsec->image)}}">
                    <img class="imgStyle1" src="{{(isset($this->getJobsec->mobile_banner)) 
                      ? asset('storage/job/'.$getJobsec->mobile_banner) :
                      asset('storage/job/'.$getJobsec->image)}}" alt="" >
                  </picture>

                </div>

               
              </div>
              <div class="col-lg-6">
                <div class="contentCol">
                  <h2 class="lgTitle p2"> {!!isset($getJobsec->heading) ? $getJobsec->heading : "NA"!!}</h2>
                  <p class="lgText p2 pt-1">{!!isset($getJobsec->title) ? $getJobsec->title : "NA"!!} </p>
                  <p> 
                    {!!isset($getJobsec->para1) ? $getJobsec->para1 : "NA"!!}
                  </p>
                  <p class="lgText p2 pt-1">
                    {!!isset($getJobsec->title2) ? $getJobsec->title2 : "NA"!!}
                    </p>
                  <p>
                    {!!isset($getJobsec->para2) ? $getJobsec->para2 : "NA"!!}
                  </p>
              
                  {{-- <a href="{{isset($getJobsec->link) ? $getJobsec->link :""}}" class="btn btnPrimary arrowBtn mt-1 mt-sm-3">{{isset($getJobsec->button_name) ? $getJobsec->button_name :"Hier gehts zu allen offenen Stellen"}}</a> --}}
              
                        {{-- ================== --}}
      @php
            $gethttplink  =  strpos( $getJobsec->link, 'http') === 0;
      @endphp

      @if(isset($getJobsec->link)) 
        @if( $gethttplink )
          <a href="{{$getJobsec->link}}" class="btn btnPrimary arrowBtn mt-1 mt-sm-3" target="_blank">
            {!! isset($getJobsec->button_name)  ? html_entity_decode($getJobsec->button_name) : "Gleich beraten lassen" !!} 
          </a>
        @else
            <a href="{{route($getJobsec->routeName->route_link)}}{{isset($getJobsec->hash_tag_id) ? '#'.$getJobsec->hash_tag_id : ''}}" 
              class="btn btnPrimary arrowBtn mt-1 mt-sm-3">
              {!! isset($getJobsec->button_name)  ? html_entity_decode($getJobsec->button_name) : "Gleich beraten lassen" !!} 
            </a>
        @endif
        @else
      @endif
      {{-- ===================== --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endif
    @if(isset($Jobs_pagebanner))
   
  <section>
    
    <div class="nextSectionParent">
      <div id="2"></div>
    </div>
    <style>
      .sectionBgCol.jobsSectionBg {
        background-image: url('{{asset('storage/services-banner/'.$Jobs_pagebanner->banner)}}');
      }

      @media (max-width: 991px) {
        .sectionBgCol.jobsSectionBg {
          background-image: url('{{asset('storage/services-banner/'.$Jobs_pagebanner->tablet_banner)}}');
        }
      }
    </style>
  @if(isset($Jobs_pagebanner->mobile_banner))
      <style>
        @media (max-width: 767px) {
          .sectionBgCol.jobsSectionBg {
            background-image: url('{{asset('storage/services-banner/'.$Jobs_pagebanner->mobile_banner)}}');
          }
        }
      </style>
  @else 
      <style>
        .sectionBgCol.jobsSectionBg {
          background-image: url('{{asset('storage/services-banner/'.$Jobs_pagebanner->banner)}}');
        }
        </style>
  @endif
    <div class="sectionBgCol jobsSectionBg" >
      <div class="container">
        <div class="sectonTitleCol">
          <h4 class="xlTitle">{!! isset($Jobs_pagebanner->heading) ? $Jobs_pagebanner->heading : "NA" !!}</h4>
        </div>
      </div>
    </div>
  </section>
      @endif
</div>
