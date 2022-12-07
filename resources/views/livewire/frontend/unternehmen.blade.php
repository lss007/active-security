<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

@if(isset($Unternehmenmain))
    <section>
      <style>
        .bannerSection.innerPageBanner.companyBanner {
          background-image: url('{{asset('storage/All-banner/'.$Unternehmenmain->banner_image)}}');
        }
        @media (max-width: 991px) {
          .bannerSection.innerPageBanner.companyBanner {
            background-image: url('{{asset('storage/All-banner/'.$Unternehmenmain->tablet_banner)}}');
          }
        }
        @media (max-width: 767px) {
          .bannerSection.innerPageBanner.companyBanner {
            background-image: url('{{asset('storage/All-banner/'.$Unternehmenmain->mobile_banner)}}');
          }
        }
      </style>
      <div class="bannerSection innerPageBanner companyBanner" >
        <div class="container">
          <div class="bannerContent mw-100">
            <h1 class="xlTitle">
              {!!	isset($Unternehmenmain->heading) ? $Unternehmenmain->heading : "NA"!!} 
            </h1>
            <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
              {!!isset($Unternehmenmain->title) ? $Unternehmenmain->title : "NA"!!} </p>
            <a href="#nextSection" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4 scrollToSection"> {{	isset($Unternehmenmain->button_text) ? $Unternehmenmain->button_text : "Angebot einholen"}} </a>
          </div>
        </div>
      </div>
    </section>

@endif
    @if(isset($companysecOne))
      <section>
        <div class="sectionSpace">
          <div class="container">
            <div class="contentCol">
              <h2 class="lgTitle p2">  {!! isset($companysecOne->heading)  ? html_entity_decode($companysecOne->heading) : "NA" !!}  

              </h2>
              <p class="lgText p2 pt-xl-1 pb-xxl-2">
                
                {!! isset($companysecOne->title)  ? html_entity_decode($companysecOne->title) : "NA" !!}  
              </p>
              <p>
                {!! isset($companysecOne->para1)  ? html_entity_decode($companysecOne->para1) : "NA" !!}  
              </p>
              <p class="lgText p2 pt-xl-1 pb-xxl-2">
                {!! isset($companysecOne->title2)  ? html_entity_decode($companysecOne->title2) : "NA" !!}  
                
              </p>
              <p>
                {!! isset($companysecOne->para2)  ? html_entity_decode($companysecOne->para2) : "NA" !!}  
                
              </p>
              <p>
                {!! isset($companysecOne->para3)  ? html_entity_decode($companysecOne->para3) : "NA" !!} 

              </p>
              @if($companysecOne->para4)
              <p>
                {!! isset($companysecOne->para4)  ? html_entity_decode($companysecOne->para4) : "NA" !!} 

              </p>
              @endif
            </div>
          </div>
        </div>
      </section>
      @endif
    

      @if($companysecTwo)
      <section>
        <div class="sectionSpace pt-0">
          <div class="container">
            <div class="row gy-4 align-items-center">
              <div class="col-lg-6">
                <div class="cCardCol">
                  <div class="cCardImgCol">
                    <img src="{{(isset($this->companysecTwo->profile_img)) 
                      ? asset('storage/company-profile/'.$companysecTwo->profile_img) :asset('no_image.jpg')}}" alt="...">
                  </div>
                  <div class="cCardContent">
                    <span class="uName">{!! isset($companysecTwo->name) ? $companysecTwo->name : "MA"!!}</span>
                    <span class="desText">{!! isset( $companysecTwo->position) ?  $companysecTwo->position : "NA"!!}</span>
                    <p>{!! isset($companysecTwo->department) ? $companysecTwo->department : "NA"!!}</p>
                    <p><a href="mailto:m.schmiedefeld@active-sec.de"><span class="emailText"> 
                      <span class="emailIcon">
                        <img src="{{ asset('frontend/images/email-icon.svg')}}" alt="..."></span> 
                        {!! isset($companysecTwo->email) ? $companysecTwo->email : "NA"!!}</span></a></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contentCol">
                  <h2 class="lgTitle p2"> 
                    {!! isset($companysecTwo->heading) ? $companysecTwo->heading : "NA"!!}
                    </h2>
           
         
                  <p class="lgText p2 pt-1">
                    {!! isset($companysecTwo->title)  ? html_entity_decode($companysecTwo->title) : "NA" !!} 
                  </p>
                  <p>
                    {!! isset($companysecTwo->para1)  ? html_entity_decode($companysecTwo->para1) : "NA" !!} 
                     </p>
                  <p>      {!! isset($companysecTwo->para2)  ? html_entity_decode($companysecTwo->para2) : "NA" !!} 

                  </p>
                  <p>      {!! isset($companysecTwo->para3)  ? html_entity_decode($companysecTwo->para3) : "NA" !!} 

                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endif
      @if($companysecThree )
      <section>
        <div class="sectionSpace pt-0">
          <div class="container">
            <div class="row gy-4 align-items-center">
              <div class="col-lg-6 order-lg-last">
                <div class="cCardCol ms-lg-auto">
                  <div class="cCardImgCol">
                    <img src="{{(isset($this->companysecThree->profile_img)) 
                      ? asset('storage/company-profile/'.$companysecThree->profile_img) :asset('no_image.jpg')}}" alt="...">
                  </div>
                  <div class="cCardContent">
                    <span class="uName">{!! isset($companysecThree->name) ? $companysecThree->name : "MA"!!}</span>
                    <span class="desText">{!! isset( $companysecThree->position) ?  $companysecThree->position : "NA"!!}</span>
                    <p>{!! isset($companysecThree->department) ? $companysecThree->department : "NA"!!}</p>
                    <p><a href="mailto:m.schmiedefeld@active-sec.de"><span class="emailText"> 
                      <span class="emailIcon">
                        <img src="{{ asset('frontend/images/email-icon.svg')}}" alt="..."></span> 
                        {!! isset($companysecThree->email) ? $companysecThree->email : "NA"!!}</span></a></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contentCol">
                  <h2 class="lgTitle p2">   
                    {!! isset($companysecThree->heading)  ? html_entity_decode($companysecThree->heading) : "NA" !!} 
                   </h2>
                  <p class="lgText p2 pt-1">
                    {!! isset($companysecThree->title)  ? html_entity_decode($companysecThree->title) : "NA" !!} 
                  </p>
                  <p>
                    {!! isset($companysecThree->para1)  ? html_entity_decode($companysecThree->para1) : "NA" !!} 
                     </p>
                  <p>      {!! isset($companysecThree->para2)  ? html_entity_decode($companysecThree->para2) : "NA" !!} 

                  </p>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      @endif

      @if(isset($Unternehmen_pagebanner))
    <section>
      <div class="sectionBgCol companySectionBg" style="background-image: url('{{asset('storage/services-banner/'.$this->Unternehmen_pagebanner->banner)}}')">
        <div class="container">
          <div class="sectonTitleCol">
            <h4 class="xlTitle">{!! isset($Unternehmen_pagebanner->heading) ? $Unternehmen_pagebanner->heading : "NA" !!}  </h4>
          </div>
        </div>
      </div>
    </section>
    @endif
    
      @include('livewire.common.take_step')
    
</div>
