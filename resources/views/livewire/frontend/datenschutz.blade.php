<div>
    {{-- The Master doesn't talk, he acts. --}}
    @if($datenschutz_pagebanner)
    <section>
      <style>
        .bannerSection.innerPageBanner.datenschutzBanner {
           background-image: url('{{asset('storage/All-banner/'.$datenschutz_pagebanner->banner_image)}}');
         }
         @media (max-width: 991px) {
           .bannerSection.innerPageBanner.datenschutzBanner {
             background-image: url('{{asset('storage/All-banner/'.$datenschutz_pagebanner->tablet_banner)}}');
           }
         }
         </style>
       @if(isset($datenschutz_pagebanner->mobile_banner))
         <style>
             @media (max-width: 767px) {
               .bannerSection.innerPageBanner.datenschutzBanner{
                 background-image: url('{{asset('storage/All-banner/'.$datenschutz_pagebanner->mobile_banner)}}');
               }
             }
         </style>
       @else 
         <style>
             .bannerSection.innerPageBanner.datenschutzBanner { 
                background-image: url('{{asset('storage/All-banner/'.$datenschutz_pagebanner->banner_image)}}');  }
         </style>
       @endif
        <div class="bannerSection innerPageBanner datenschutzBanner">
          <div class="container">
            <div class="bannerContent">
              <h1 class="xlTitle">{{	isset($datenschutz_pagebanner->heading) ? $datenschutz_pagebanner->heading : "NA"}}</h1>
            </div>
          </div>
        </div>
      </section>
    @endif
      <section>
        <div class="nextSectionParent">
          <div id="nextSection"></div>
        </div>
        <div class="sectionSpace">
          <div class="container">
            <div class="privacyContent">
              @if(isset($getPrivacydata))
                  @foreach($getPrivacydata as $row)
            
              <h4>
                {!! isset($row->heading)  ? html_entity_decode($row->heading) : "NA" !!}  
              </h4>
                @if($row->title)
              <p><b> {!! isset($row->title)  ? html_entity_decode($row->title) : "NA" !!}  
                </b></p>
                @endif
              <p>{!! isset($row->para1)  ? html_entity_decode($row->para1) : "NA" !!} </p>
              <p>{!! isset($row->para2)  ? html_entity_decode($row->para2) : "NA" !!} </p>
              @if($row->para3)
            <p>{!! isset($row->para3)  ? html_entity_decode($row->para3) : "NA" !!} </p>
                @endif
            @if($row->para4)
              <p>{!! isset($row->para4)  ? html_entity_decode($row->para4) : "NA" !!} </p>
                @endif  
       
                 
          
              @endforeach
              @endif
            
            </div>
          </div>
        </div>
      </section>
</div>
