<div>
    {{-- Success is as dangerous as failure. --}}
    @if(isset($Shopmain))
    <section>
      <div class="bannerSection innerPageBanner s8Banner" style="background-image: url('{{asset('storage/All-banner/'.$Shopmain->banner_image)}}')" >
        <div class="container">
          <div class="bannerContent">
            <h1 class="xlTitle">{!!	isset($Shopmain->heading) ? $Shopmain->heading : "NA"!!}</h1>
            <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
              {!!isset($Shopmain->title) ? $Shopmain->title : "NA"!!} 
            </p>
            <a href="{!! isset($Shopmain->button_link) ? $Shopmain->button_link : "#"!!}" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
              {{	isset($Shopmain->button_text) ? $Shopmain->button_text : "Angebot einholen"}}  
            </a>
          </div>
        </div>
      </div>
    </section>
  @endif

  @if(isset($ShopPagesection))
    <section>
      <div class="sectionSpace">
        <div class="container">
          <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
              <div class="imgCol pe-lg-4">
                <img src="{{(isset($this->ShopPagesection->sec_image))  ? asset('storage/services-section/'.$ShopPagesection->sec_image) :asset('no_image.jpg')}}" alt="..." class="imgStyle1">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="contentCol">
                <h2 class="lgTitle p2 contentMxWdTitle">
                  {!! isset($ShopPagesection->heading)  ? html_entity_decode($ShopPagesection->heading) : "NA" !!} </h2>
                <p class="lgText p2 pt-1">
                  {!! isset($ShopPagesection->title)  ? html_entity_decode($ShopPagesection->title) : "NA" !!}  </p>
         
                <p>{!! isset($ShopPagesection->para1)  ? html_entity_decode($ShopPagesection->para1) : "NA" !!} </p>
                <p> {!! isset($ShopPagesection->para2)  ? html_entity_decode($ShopPagesection->para2) : "NA" !!} </p>
                <p>  {!! isset($ShopPagesection->para3)  ? html_entity_decode($ShopPagesection->para3) : "NA" !!} </p>
                @if(isset($ShopPagesection->para4))
                <p>  {!! isset($ShopPagesection->para4)  ? html_entity_decode($ShopPagesection->para4) : "NA" !!} </p>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif


  @if(isset($Shop_pagebanner))
    <section>
      <div class="sectionBgCol serviceSectionBg8" style="background-image: url('{{asset('storage/services-banner/'.$this->Shop_pagebanner->banner)}}')">
        <div class="container">
          <div class="sectonTitleCol">
            <h4 class="xlTitle"> {!! isset($Shop_pagebanner->heading) ? $Shop_pagebanner->heading : "NA" !!}</h4>
          </div>
        </div>
      </div>
    </section>
    @endif
    
      @include('livewire.common.take_step')
</div>
