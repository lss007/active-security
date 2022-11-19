<div>
    {{-- The Master doesn't talk, he acts. --}}
    <section>
        <div class="bannerSection innerPageBanner datenschutzBanner">
          <div class="container">
            <div class="bannerContent">
              <h1 class="xlTitle">Allgemeine Geschäftsbedingungen </h1>
            </div>
          </div>
        </div>
      </section>
    
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
