<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @if(isset($this->ObjektUndPageBanner))
      <section>
        <div class="bannerSection innerPageBanner s1Banner" style="background-image: url('{{asset('storage/All-banner/'.$this->ObjektUndPageBanner->banner_image)}}')">
          <div class="container">
            <div class="bannerContent">
              <h1 class="xlTitle">
                {{	isset($ObjektUndPageBanner->heading) ? $ObjektUndPageBanner->heading : "NA"}}
              </h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
                {{	isset($ObjektUndPageBanner->title) ? $ObjektUndPageBanner->title : "NA"}}
              </p>
              <a href="{{route('ContactPage')}}" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
                {{	isset($ObjektUndPageBanner->button_text) ? $ObjektUndPageBanner->button_text : "Angebot einholen"}} </a>
            </div>
          </div>
        </div>
      </section>
      @endif
     
@if(isset($ObjektUndPagesection))
      <section>
        <div class="sectionSpace">
          <div class="container">
            <div class="row gy-4 align-items-center">
              <div class="col-lg-6">
                <div class="imgCol pe-lg-4">
                  <img src="{{(isset($this->ObjektUndPagesection->sec_image)) 
                    ? asset('storage/services-section/'.$ObjektUndPagesection->sec_image) :asset('no_image.jpg')}}" alt="..." class="imgStyle1">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contentCol">
                  <h2 class="lgTitle p2">
                    {!! isset($ObjektUndPagesection->heading)  ? html_entity_decode($ObjektUndPagesection->heading) : "NA" !!}  


                  </h2>
                  <p class="lgText p2 pt-1">
                    {!! isset($ObjektUndPagesection->title)  ? html_entity_decode($ObjektUndPagesection->title) : "NA" !!}  

                  </p>
                  <p>
                    {!! isset($ObjektUndPagesection->para1)  ? html_entity_decode($ObjektUndPagesection->para1) : "NA" !!}  
                  </p>
                  <p>
                    {!! isset($ObjektUndPagesection->para2)  ? html_entity_decode($ObjektUndPagesection->para2) : "NA" !!}  
                  </p>

                  @if(isset($ObjektUndPagesection->para3))
                  <p>
                  {!! isset($ObjektUndPagesection->para3)  ? html_entity_decode($ObjektUndPagesection->para3) : "NA" !!}  
                  </p>
                  @endif

                  
                  @if(isset($ObjektUndPagesection->para4))
                  <p>
                  {!! isset($ObjektUndPagesection->para4)  ? html_entity_decode($ObjektUndPagesection->para4) : "NA" !!}  
                  </p>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endif
    @if(isset($Services_pagebanner))
      <section>
        <div class="sectionBgCol " 
        style="background-image: url('{{asset('storage/services-banner/'.$this->Services_pagebanner->banner)}}')">
          <div class="container">
            <div class="sectonTitleCol">
              <h4 class="xlTitle">
                {!! $Services_pagebanner->heading !!}
              </h4>
            </div>
          </div>
        </div>
      </section>
    @endif
      @include('livewire.common.take_step')
</div>
