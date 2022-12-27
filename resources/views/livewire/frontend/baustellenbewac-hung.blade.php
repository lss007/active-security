<div>
    {{-- The whole world belongs to you. --}}
    @if(isset($Baustellmain))
    <section>
      <style>
        .bannerSection.innerPageBanner.s4Banner {  background-image: url('{{asset('storage/All-banner/'.$Baustellmain->banner_image)}}');
        }
        @media (max-width: 991px) {
          .bannerSection.innerPageBanner.s4Banner { background-image: url('{{asset('storage/All-banner/'.$Baustellmain->tablet_banner)}}');
          }
        }
        </style>
      @if(isset($Baustellmain->mobile_banner))
        <style>
            @media (max-width: 767px) {
              .bannerSection.innerPageBanner.s4Banner {  background-image: url('{{asset('storage/All-banner/'.$Baustellmain->mobile_banner)}}');
              }
            }
        </style>
      @else 
          <style>
            .bannerSection.innerPageBanner.s4Banner {  background-image: url('{{asset('storage/All-banner/'.$Baustellmain->banner_image)}}');  }
            </style>
      @endif

        <div class="bannerSection innerPageBanner s4Banner">
          <div class="container">
            <div class="bannerContent mw-100">
              <h1 class="xlTitle">
                {{	isset($Baustellmain->heading) ? $Baustellmain->heading : "NA"}}
              </h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
                {{	isset($Baustellmain->title) ? $Baustellmain->title : "NA"}}

              </p>
              <a href="{!! isset($Baustellmain->button_link) ? $Baustellmain->button_link : "#nextSection"!!}" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
                {{	isset($Baustellmain->button_text) ? $Baustellmain->button_text : "Angebot einholen"}} 
              </a>
            </div>
          </div>
        </div>
      </section>
    @endif

    @if(isset($BaustellPagesection))
      <section>
        <div class="nextSectionParent">
          <div id="nextSection"></div>
        </div>
        <div class="sectionSpace">
          <div class="container">
            <div class="row gy-4 align-items-center">
              <div class="col-lg-6">
                <div class="imgCol pe-lg-4">
           
               
               <picture>
                <source media="(min-width:992px)" srcset="{{(isset($this->BaustellPagesection->sec_image)) 
                  ? asset('storage/services-section/'.$BaustellPagesection->sec_image) :asset('no_image.jpg')}}">
                <source media="(min-width:768px)" srcset="{{(isset($this->BaustellPagesection->tablet_banner)) 
                  ? asset('storage/services-section/'.$BaustellPagesection->tablet_banner) :
                  asset('storage/services-section/'.$BaustellPagesection->sec_image)}}">
                <img class="imgStyle1" src="{{(isset($this->BaustellPagesection->mobile_banner)) 
                  ? asset('storage/services-section/'.$BaustellPagesection->mobile_banner) :
                  asset('storage/services-section/'.$BaustellPagesection->sec_image)}}" alt="" >
              </picture>
              
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
    
      <style>
        .sectionBgCol.serviceSectionBg4 {
          background-image: url('{{asset('storage/services-banner/'.$Baustell_pagebanner->banner)}}');
        }

        @media (max-width: 991px) {
          .sectionBgCol.serviceSectionBg4 {
            background-image: url('{{asset('storage/services-banner/'.$Baustell_pagebanner->tablet_banner)}}');
          }
        }
      </style>
    @if(isset($Baustell_pagebanner->mobile_banner))
        <style>
          @media (max-width: 767px) {
            .sectionBgCol.serviceSectionBg4 {
              background-image: url('{{asset('storage/services-banner/'.$Baustell_pagebanner->mobile_banner)}}');
            }
          }
        </style>
    @else 
        <style>
          .sectionBgCol.serviceSectionBg4 {
            background-image: url('{{asset('storage/services-banner/'.$Baustell_pagebanner->banner)}}');
          }
          </style>
    @endif
    <div class="sectionBgCol serviceSectionBg4" >
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
