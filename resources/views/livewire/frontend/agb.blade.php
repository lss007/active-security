<div>
    {{-- The Master doesn't talk, he acts. --}}
    @if($agb_pagebanner)
    <section>
      <style>
      .bannerSection.innerPageBanner.datenschutzBanner {background-image: url('{{asset('storage/All-banner/'.$agb_pagebanner->banner_image)}}'); }
              @media (max-width: 991px) {
      .bannerSection.innerPageBanner.datenschutzBanner {background-image: url('{{asset('storage/All-banner/'.$agb_pagebanner->tablet_banner)}}');  }        
        }
         </style>
       @if(isset($agb_pagebanner->mobile_banner))
         <style>
             @media (max-width: 767px) {
               .bannerSection.innerPageBanner.datenschutzBanner{background-image: url('{{asset('storage/All-banner/'.$agb_pagebanner->mobile_banner)}}');
               }
             }
         </style>
       @else 
         <style>
             .bannerSection.innerPageBanner.datenschutzBanner {background-image: url('{{asset('storage/All-banner/'.$agb_pagebanner->banner_image)}}');  }
         </style>
       @endif
        <div class="bannerSection innerPageBanner datenschutzBanner">
          <div class="container">
            <div class="bannerContent">
              <h1 class="xlTitle"> {{	isset($agb_pagebanner->heading) ? $agb_pagebanner->heading : "NA"}} </h1>
            </div>
          </div>
        </div>
      </section>
    @endif
      <section>
        <div class="sectionSpace">
          <div class="container">
            <div class="privacyContent">
          @if(isset($fetchAgbtext))
                @foreach($fetchAgbtext as $textrow)
              <h4> 
                 {!! isset($textrow->heading)  ? html_entity_decode($textrow->heading) : "NA" !!}  
                </h4>
              <p>
                {!! isset($textrow->para1)  ? html_entity_decode($textrow->para1) : "NA" !!}  
                
              </p>
              <p>
                {!! isset($textrow->para2)  ? html_entity_decode($textrow->para2) : "NA" !!}  
                
              </p>
              @if($textrow->para4)
              <p>
                {!! isset($textrow->para3)  ? html_entity_decode($textrow->para3) : "NA" !!} 

              </p>
              @endif
              @if($textrow->para4)
              <p>
                {!! isset($textrow->para4)  ? html_entity_decode($textrow->para4) : "NA" !!} 

              </p>
                @endif
                @if($textrow->para5)
                <p>
                  {!! isset($textrow->para5)  ? html_entity_decode($textrow->para5) : "NA" !!} 
  
                </p>
                  @endif
              @endforeach
          @endif

            </div>
          </div>
        </div>
      </section>
</div>
