<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    @if(isset($Contactmain))
    <section>
        <div class="bannerSection innerPageBanner contactBanner">
          <div class="container">
            <div class="bannerContent mw-100">
              <h1 class="xlTitle">
                {{	isset($Contactmain->heading) ? $Contactmain->heading : "NA"}}

              </h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">
                {{	isset($Contactmain->title) ? $Contactmain->title : "NA"}}
              </p>
              <a href="javascript:void(0)" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
                {{	isset($Contactmain->button_text) ? $Contactmain->button_text : "Kontaktformular "}} 
                </a>
            </div>
          </div>
        </div>
      </section>
    @endif
      <section>
        <div class="sectionSpace">
          <div class="container">
            <div class="row gy-4 align-items-center">
              <div class="col-lg-6 order-lg-last">
                <div class="imgCol ps-lg-4">
                  <img src="{{ asset('frontend/images/img-1.jpg')}}" alt="..." class="imgStyle1">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contentCol">
                  <h2 class="xlTitle p2">Kontakt</h2>
                  <p class="mdText p2 pt-sm-1">Wir melden uns innerhlab von 24h zurück.</p>
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
                            <label class="form-check-label" for="check1">Ich erkläre mich damit einverstanden, dass meine Daten zur Bearbeitung meiner Anfrage verwendet werden. Weitere Informationen und Widerrufshinweise finden Sie in unserer Datenschutzerklärung.</label>
                          </div>
                        </div>
                        <div class="col-12" wire:loading.attr="disabled">
                          <button class="btn btnPrimary arrowBtn" type="Submit">Senden</button>
                        </div>
                        <div  wire:loading >
                          <img src="https://paladins-draft.com/img/circle_loading.gif" width="64px" height="64" >
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
