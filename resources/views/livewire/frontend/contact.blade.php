<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    @if(isset($Contactmain))
    <section>
      <style>
        .bannerSection.innerPageBanner.contactBanner {
           background-image: url('{{asset('storage/All-banner/'.$Contactmain->banner_image)}}');
         }
         @media (max-width: 991px) {
           .bannerSection.innerPageBanner.contactBanner {
             background-image: url('{{asset('storage/All-banner/'.$Contactmain->tablet_banner)}}');
           }
         }
         </style>
       @if(isset($Contactmain->mobile_banner))
         <style>
             @media (max-width: 767px) {
               .bannerSection.innerPageBanner.contactBanner{
                 background-image: url('{{asset('storage/All-banner/'.$Contactmain->mobile_banner)}}');
               }
             }
         </style>
       @else 
         <style>
             .bannerSection.innerPageBanner.contactBanner { 
                background-image: url('{{asset('storage/All-banner/'.$Contactmain->banner_image)}}');  }
         </style>
       @endif
        <div class="bannerSection innerPageBanner contactBanner">
          <div class="container">
            <div class="bannerContent mw-100">
              <h1 class="xlTitle">
                {{	isset($Contactmain->heading) ? $Contactmain->heading : "NA"}}

              </h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
                {{	isset($Contactmain->title) ? $Contactmain->title : "NA"}}
              </p>
              <a href="{!!isset($Contactmain->button_link) ? $Contactmain->button_link : "#nextSection"!!}" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
                {{	isset($Contactmain->button_text) ? $Contactmain->button_text : "Kontaktformular "}} 
                </a>
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
            <div class="row gy-4 align-items-center">
              <div class="col-lg-6 order-lg-last">
                <div class="imgCol ps-lg-4">
                  @if(isset($getContactSection))

                        <picture>
                          <source media="(min-width:992px)" srcset="{{(isset($this->getContactSection->image)) 
                            ? asset('storage/Contact/'.$getContactSection->image) :asset('no_image.jpg')}}">
                          <source media="(min-width:768px)" srcset="{{(isset($this->getContactSection->tablet_img)) 
                            ? asset('storage/Contact/'.$getContactSection->tablet_img) :
                            asset('storage/Contact/'.$getContactSection->image)}}">
                          <img class="imgStyle1" src="{{(isset($this->getContactSection->mobile_img)) 
                            ? asset('storage/Contact/'.$getContactSection->mobile_img) :
                            asset('storage/Contact/'.$getContactSection->image)}}" alt="" style="width:auto;" class="imgStyle1">
                        </picture>
                  @endif
             
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contentCol">
                  <h2 class="xlTitle p2">
                    @if(isset($getContactSection))
                    {!! isset($getContactSection->heading)  ? html_entity_decode($getContactSection->heading) : "Kontakt" !!}  
                    @endif
                  
                  </h2>
                  <p class="mdText p2 pt-sm-1">
                    
                    @if(isset($getContactSection))
                    {!! isset($getContactSection->title)  ? html_entity_decode($getContactSection->title) : "Kontakt" !!}  
                    @endif.</p>
                  <div class="contactForm">
                    <form wire:submit.prevent="sendmessage" class="formStyle">
                      <div class="row gy-3 gy-sm-4">
                        <div class="col-12">
                          <label for="nameFld" class="lblStyle">Name</label>
                          <input type="text" class="form-control" id="nameFld"  wire:model.defer="surname">
                          @error('surname')<span class="text-danger"> {{$message}}</span> @enderror
                        </div>
                        <div class="col-12">
                          <label for="emailFld" class="lblStyle">E-Mail</label>
                          <input type="text" class="form-control" id="emailFld"  wire:model.defer="email">
                          @error('email')<span class="text-danger"> {{$message}}</span> @enderror

                        </div>
                        <div class="col-12">
                          <label for="betreffFld" class="lblStyle">Betreff</label>
                          <input type="text" class="form-control" id="betreffFld" wire:model.defer="regarding">
                          @error('regarding')<span class="text-danger"> {{$message}}</span> @enderror

                        </div>
                        <div class="col-12">
                          <label for="msgFld" class="lblStyle">Ihre Nachricht</label>
                          <textarea id="msgFld" class="form-control" wire:model.defer="client_message"></textarea>
                          @error('client_message')<span class="text-danger"> {{$message}}</span> @enderror
                       
                        </div>
                        <div class="col-12">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="check1">
                            <label class="form-check-label" for="check1">
                    @if(isset($getContactSection->para1) )
                    {!! isset($getContactSection->para1)  ? html_entity_decode($getContactSection->para1) : "NA" !!}  
                      @endif
                            </label>
                          </div>
                        </div>
                        <div class="col-12" wire:loading.attr="disabled">
                          <button class="btn btnPrimary arrowBtn" type="Submit">Senden</button>
                          <div  wire:loading >
                            <img src="{{asset('frontend/images/circle_loading.gif')}}" width="64px" height="64" >
                           </div>
                        </div>
                        
                      </div>

            
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      @include('livewire.common.clientLogo')

</div>
