<div>
    {{-- Stop trying to control. --}}
    @if(isset($veranstmain))
      <section>
        <style>
          .bannerSection.innerPageBanner.s9Banner {
            background-image: url('{{asset('storage/All-banner/'.$veranstmain->banner_image)}}');
          }
          @media (max-width: 991px) {
            .bannerSection.innerPageBanner.s9Banner {
              background-image: url('{{asset('storage/All-banner/'.$veranstmain->tablet_banner)}}');
            }
          }
          @media (max-width: 767px) {
            .bannerSection.innerPageBanner.s9Banner {
              background-image: url('{{asset('storage/All-banner/'.$veranstmain->mobile_banner)}}');
            }
          }
        </style>
        <div class="bannerSection innerPageBanner s9Banner" >
          <div class="container">
            <div class="bannerContent">
              <h1 class="xlTitle">{!!	isset($veranstmain->heading) ? $veranstmain->heading : "NA"!!}</h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">{!!	isset($veranstmain->title) ? $veranstmain->title : "NA"!!}</p>
              <a href="{!! isset($veranstmain->button_link) ? $veranstmain->button_link : "#"!!}" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">{{	isset($veranstmain->button_text) ? $veranstmain->button_text : "Angebot einholen"}}  </a>
            </div>
          </div>
        </div>
      </section>
    @endif

    @if(isset($veranstPagesection))
      <section>
        <div class="sectionSpace">
          <div class="container">
            <div class="row gy-4 align-items-center">
              <div class="col-lg-6">
                <div class="imgCol pe-lg-4"><img src="{{(isset($this->veranstPagesection->sec_image))  ? asset('storage/services-section/'.$veranstPagesection->sec_image) :asset('no_image.jpg')}}" alt="..." class="imgStyle1">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contentCol">
                  <h2 class="lgTitle p2"> {!! isset($veranstPagesection->heading)  ? html_entity_decode($veranstPagesection->heading) : "NA" !!}</h2>
                  <p class="lgText p2 pt-1"> {!! isset($veranstPagesection->title)  ? html_entity_decode($veranstPagesection->title) : "NA" !!}</p>
             
                <p>{!! isset($veranstPagesection->para1)  ? html_entity_decode($veranstPagesection->para1) : "NA" !!} </p>
                <p> {!! isset($veranstPagesection->para2)  ? html_entity_decode($veranstPagesection->para2) : "NA" !!} </p>
                @if($veranstPagesection->para3)
                <p>  {!! isset($veranstPagesection->para3)  ? html_entity_decode($veranstPagesection->para3) : "NA" !!} </p>
                @endif
                @if(isset($veranstPagesection->para4))
                <p>  {!! isset($veranstPagesection->para4)  ? html_entity_decode($veranstPagesection->para4) : "NA" !!} </p>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    @endif

    @if($veranstpagebanner)
    <section>
      <div class="sectionBgCol serviceSectionBg9" style="background-image: url('{{asset('storage/services-banner/'.$this->veranstpagebanner->banner)}}')">
        <div class="container">
          <div class="sectonTitleCol">
            <h4 class="xlTitle">{!! isset($veranstpagebanner->heading) ? $veranstpagebanner->heading : "NA" !!}</h4>
          </div>
        </div>
      </div>
    </section>
    @endif
    @include('livewire.common.take_step')
</div>
