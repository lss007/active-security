<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @if(isset($centerbewachung))
    <section>
        <div class="bannerSection innerPageBanner " style="background-image: url('{{asset('storage/All-banner/'.$this->centerbewachung->banner_image)}}')">
          <div class="container">
            <div class="bannerContent mw-100">
              <h1 class="xlTitle">
                {{	isset($centerbewachung->heading) ? $centerbewachung->heading : "NA"}}
              </h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
                {{	isset($centerbewachung->title) ? $centerbewachung->title : "NA"}}
              </p>
              <a href="{!! isset($centerbewachung->button_link) ? $centerbewachung->button_link : "#"!!}" target="__blank" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
                {{	isset($centerbewachung->button_text) ? $centerbewachung->button_text : "Angebot einholen"}} 
              </a>
            </div>
          </div>
        </div>
      </section>
    @endif

@if($centerPagesection)
  <section>
    <div class="sectionSpace">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6">
            <div class="imgCol pe-lg-4">
              <img src="{{(isset($this->centerPagesection->sec_image)) 
                ? asset('storage/services-section/'.$centerPagesection->sec_image) :asset('no_image.jpg')}}" alt="..." class="imgStyle1">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contentCol">
              <h2 class="lgTitle p2">
                {!! isset($centerPagesection->heading)  ? html_entity_decode($centerPagesection->heading) : "NA" !!}  
              </h2>
              <p class="lgText p2 pt-1">
                {!! isset($centerPagesection->title)  ? html_entity_decode($centerPagesection->title) : "NA" !!} 
              </p>
              <p> {!! isset($centerPagesection->para1)  ? html_entity_decode($centerPagesection->para1) : "NA" !!}   </p>
              <p> {!! isset($centerPagesection->para2)  ? html_entity_decode($centerPagesection->para2) : "NA" !!}   </p>
              <p> {!! isset($centerPagesection->para3)  ? html_entity_decode($centerPagesection->para3) : "NA" !!}   </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif
    

@if(isset($center_pagebanner))

      <section>
        <div class="sectionBgCol "  style="background-image: url('{{asset('storage/services-banner/'.$this->center_pagebanner->banner)}}')">
          <div class="container">
            <div class="sectonTitleCol">
              <h4 class="xlTitle">
                {!! isset($center_pagebanner->heading ) ? $center_pagebanner->heading  : "NA"!!}
              </h4>
            </div>
          </div>
        </div>
      </section>
    @endif
      @include('livewire.common.take_step')
</div>
