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
              <a href="javascript:void(0)" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4"> 

                {{	isset($Jobsmain->button_text) ? $Jobsmain->button_text : "Angebot einholen"}} 
              </a>
            </div>
          </div>
        </div>
      </section>
      @endif
    @if(isset($getJobsec))
      <section>
        <div class="sectionSpace">
          <div class="container">
            <div class="row gy-4 align-items-center">
              <div class="col-lg-6">
                <div class="imgCol pe-lg-4">
                  <img src=" {{(!empty($getJobsec->image)) 
                    ? asset('storage/job') . '/' .  $getJobsec->image:url('upload/no_image.jpg')}}" alt="..." class="imgStyle1">
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
                  <a href="javascript:void(0)" class="btn btnPrimary arrowBtn mt-1 mt-sm-3">Hier gehts zu allen offenen Stellen</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endif
    @if(isset($Jobs_pagebanner))
  <section>
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
