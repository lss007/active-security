<div>
    {{-- Stop trying to control. --}}
    @if(isset($Empfanmain))
    <section>
      <div class="bannerSection innerPageBanner s7Banner" style="background-image: url('{{asset('storage/All-banner/'.$this->Empfanmain->banner_image)}}')">
        <div class="container">
          <div class="bannerContent">
            <h1 class="xlTitle">
              {{	isset($Empfanmain->heading) ? $Empfanmain->heading : "NA"}}
            </h1>
            <p class="subTitle pt-1 pt-lg-2 pt-xl-3">    
              {{	isset($Empfanmain->title) ? $Empfanmain->title : "NA"}}
            </p>
            <a href="{!! isset($Empfanmain->button_link) ? $Empfanmain->button_link : "#"!!}" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
              {{	isset($Empfanmain->button_text) ? $Empfanmain->button_text : "Angebot einholen"}} 
             </a>
          </div>
        </div>
      </div>
    </section>
    @endif
  @if(isset($EmpfanPagesection))
    <section>
      <div class="sectionSpace">
        <div class="container">
          <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
              <div class="imgCol pe-lg-4">
                <img src="{{(isset($this->EmpfanPagesection->sec_image)) 
                  ? asset('storage/services-section/'.$EmpfanPagesection->sec_image) :asset('no_image.jpg')}}" alt="..." class="imgStyle1">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="contentCol">
                <h2 class="lgTitle p2">  {!! isset($EmpfanPagesection->heading)  ? html_entity_decode($EmpfanPagesection->heading) : "NA" !!}  </h2>
                <p class="lgText p2 pt-1">  {!! isset($EmpfanPagesection->title)  ? html_entity_decode($EmpfanPagesection->title) : "NA" !!}   </p>
                <p>  {!! isset($EmpfanPagesection->para1)  ? html_entity_decode($EmpfanPagesection->para1) : "NA" !!}  </p>
                <p>  {!! isset($EmpfanPagesection->para2)  ? html_entity_decode($EmpfanPagesection->para2) : "NA" !!}  </p>
                <p> {!! isset($EmpfanPagesection->para3)  ? html_entity_decode($EmpfanPagesection->para3) : "NA" !!}  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
  @if(isset($Empfan_pagebanner))
    <section>
      <div class="sectionBgCol serviceSectionBg7"  style="background-image: url('{{asset('storage/services-banner/'.$this->Empfan_pagebanner->banner)}}')">
        <div class="container">
          <div class="sectonTitleCol">
            <h4 class="xlTitle">
              {!! isset($Empfan_pagebanner->heading) ? $Empfan_pagebanner->heading : "NA" !!}  </h4>
          </div>
        </div>
      </div>
    </section>
    @endif
    
@include('livewire.common.take_step')
</div>
