<div>
    {{-- The Master doesn't talk, he acts. --}}
    @if(isset($Kaufhausmain))
    <section>
        <div class="bannerSection innerPageBanner "  style="background-image: url('{{asset('storage/All-banner/'.$this->Kaufhausmain->banner_image)}}')">
          <div class="container">
            <div class="bannerContent mw-100">
              <h1 class="xlTitle">
                {{	isset($Kaufhausmain->heading) ? $Kaufhausmain->heading : "NA"}}
              </h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
                {{	isset($Kaufhausmain->title) ? $Kaufhausmain->title : "NA"}}
              </p>
              <a href="javascript:void(0)" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4"> 
                {{	isset($Kaufhausmain->button_text) ? $Kaufhausmain->button_text : "Angebot einholen"}} 
              </a>
            </div>
          </div>
        </div>
      </section>
    @endif 

    @if(isset($KaufhausPagesection))
      <section>
        <div class="sectionSpace">
          <div class="container">
            <div class="row gy-4 align-items-center">
              <div class="col-lg-6">
                <div class="imgCol pe-lg-4">
                  <img src="{{(isset($this->KaufhausPagesection->sec_image)) 
                    ? asset('storage/services-section/'.$KaufhausPagesection->sec_image) :asset('no_image.jpg')}}" alt="..." class="imgStyle1">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contentCol">
                  <h2 class="lgTitle p2">  {!! isset($KaufhausPagesection->heading)  ? html_entity_decode($KaufhausPagesection->heading) : "NA" !!}  </h2>
                  <p class="lgText p2 pt-1">  {!! isset($KaufhausPagesection->title)  ? html_entity_decode($KaufhausPagesection->title) : "NA" !!}   </p>
                  <p>  {!! isset($KaufhausPagesection->para1)  ? html_entity_decode($KaufhausPagesection->para1) : "NA" !!}  </p>
                  <p>  {!! isset($KaufhausPagesection->para2)  ? html_entity_decode($KaufhausPagesection->para2) : "NA" !!}  </p>
                  <p> {!! isset($KaufhausPagesection->para3)  ? html_entity_decode($KaufhausPagesection->para3) : "NA" !!}  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endif
    @if(isset($Kaufhaus_pagebanner))
      <section>
        <div class="sectionBgCol " style="background-image: url('{{asset('storage/services-banner/'.$this->Kaufhaus_pagebanner->banner)}}')">
          <div class="container">
            <div class="sectonTitleCol">
              <h4 class="xlTitle">
                {!! isset($Kaufhaus_pagebanner->heading) ? $Kaufhaus_pagebanner->heading : "NA" !!}
              </h4>
            </div>
          </div>
        </div>
      </section>
      @endif
    
      @include('livewire.common.take_step')
</div>
