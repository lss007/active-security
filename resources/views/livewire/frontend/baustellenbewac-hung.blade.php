<div>
    {{-- The whole world belongs to you. --}}
    @if(isset($Baustellmain))
    <section>
        <div class="bannerSection innerPageBanner s4Banner">
          <div class="container">
            <div class="bannerContent mw-100">
              <h1 class="xlTitle">
                {{	isset($Baustellmain->heading) ? $Baustellmain->heading : "NA"}}
              </h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
                {{	isset($Baustellmain->title) ? $Baustellmain->title : "NA"}}

              </p>
              <a href="javascript:void(0)" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
                {{	isset($Baustellmain->button_text) ? $Baustellmain->button_text : "Angebot einholen"}} 
              </a>
            </div>
          </div>
        </div>
      </section>
    @endif

    @if(isset($BaustellPagesection))
      <section>
        <div class="sectionSpace">
          <div class="container">
            <div class="row gy-4 align-items-center">
              <div class="col-lg-6">
                <div class="imgCol pe-lg-4">
                  <img src="{{(isset($this->BaustellPagesection->sec_image)) 
                    ? asset('storage/services-section/'.$BaustellPagesection->sec_image) :asset('no_image.jpg')}}" alt="..." class="imgStyle1">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contentCol">
                  <h2 class="lgTitle p2 contentMxWdTitle">
                    {!! isset($BaustellPagesection->heading)  ? html_entity_decode($BaustellPagesection->heading) : "NA" !!}  

                  </h2>
                  <p class="lgText p2 pt-1">
                {!! isset($BaustellPagesection->title)  ? html_entity_decode($BaustellPagesection->title) : "NA" !!} 

                  </p>
                  <p> {!! isset($BaustellPagesection->para1)  ? html_entity_decode($BaustellPagesection->para1) : "NA" !!}   </p>
                  <p> {!! isset($BaustellPagesection->para2)  ? html_entity_decode($BaustellPagesection->para2) : "NA" !!}   </p>
                  <p> {!! isset($BaustellPagesection->para3)  ? html_entity_decode($BaustellPagesection->para3) : "NA" !!}   </p>
                  @if(isset($BaustellPagesection->para4))
                  <p> {!! isset($BaustellPagesection->para4)  ? html_entity_decode($BaustellPagesection->para4) : "NA" !!}   </p>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    @endif
@if(isset($Baustell_pagebanner))
  <section>
    <div class="sectionBgCol " style="background-image: url('{{asset('storage/services-banner/'.$this->Baustell_pagebanner->banner)}}')">
      <div class="container">
        <div class="sectonTitleCol sMaxWdTitle">
          <h4 class="xlTitle">{!! isset($Baustell_pagebanner->heading) ? $Baustell_pagebanner->heading : "NA" !!}</h4>
        </div>
      </div>
    </div>
  </section>
    @endif
      @include('livewire.common.take_step')
</div>
