<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <section>
        <div class="bannerSection innerPageBanner jobsBanner">
          <div class="container">
            <div class="bannerContent mw-100">
              <h1 class="xlTitle">Jobs</h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">Werden Sie Teil unseres Security Teams.</p>
              <a href="javascript:void(0)" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">Jetzt bewerben</a>
            </div>
          </div>
        </div>
      </section>
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
    
      <section>
        <div class="sectionBgCol jobsSectionBg">
          <div class="container">
            <div class="sectonTitleCol">
              <h4 class="xlTitle">jetzt <br class="d-none d-lg-block"> durchstarten</h4>
            </div>
          </div>
        </div>
      </section>
</div>
