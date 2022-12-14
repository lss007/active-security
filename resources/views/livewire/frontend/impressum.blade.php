<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @if(isset($impressum_pagebanner))
    <section>
      <style>
        .bannerSection.innerPageBanner.impressumBanner {
           background-image: url('{{asset('storage/All-banner/'.$impressum_pagebanner->banner_image)}}');
         }
         @media (max-width: 991px) {
           .bannerSection.innerPageBanner.impressumBanner {
             background-image: url('{{asset('storage/All-banner/'.$impressum_pagebanner->tablet_banner)}}');
           }
         }
         </style>
       @if(isset($impressum_pagebanner->mobile_banner))
         <style>
             @media (max-width: 767px) {
               .bannerSection.innerPageBanner.impressumBanner{
                 background-image: url('{{asset('storage/All-banner/'.$impressum_pagebanner->mobile_banner)}}');
               }
             }
         </style>
       @else 
         <style>
             .bannerSection.innerPageBanner.impressumBanner { 
                background-image: url('{{asset('storage/All-banner/'.$impressum_pagebanner->banner_image)}}');  }
         </style>
       @endif
        <div class="bannerSection innerPageBanner impressumBanner">
          <div class="container">
            <div class="bannerContent">
              <h1 class="xlTitle"> {{	isset($impressum_pagebanner->heading) ? $impressum_pagebanner->heading : "NA"}}  </h1>
            </div>
          </div>
        </div>
      </section>
    @endif
      <section>
        <div class="sectionSpace">
          <div class="container">
            <div class="row gy-3">
              <div class="col-sm-6 col-lg-4">
                <div class="lMaxWd">
                  <h4 class="listTitle">ANGABEN GEMÄSS § 5 TMG</h4>
                  <ul class="iconListStyle">
                    <li><span class="listIcon"><img src="{{ asset('frontend/images/user-icon.svg')}}" alt="..."></span> {{isset($getAddress->name) ? $getAddress->name : "NA" }}</li>
                    <li><span class="listIcon"><img src="{{ asset('frontend/images/location-pin.svg')}}" alt="..."></span> Regensburger Straße 1A <br> 93083 Obertraubling <span class="d-block pt-2">USt-IdNr.: {{isset($getAddress->vatid) ? $getAddress->vatid : "NA" }}</span></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="lMaxWd">
                  <h4 class="listTitle">VERTRETEN DURCH:</h4>
                  <ul class="iconListStyle">
                    <li><span class="listIcon"><img src="{{ asset('frontend/images/user-icon.svg')}}" alt="..."></span> {{isset($getAddress->name) ? $getAddress->name : "NA" }}</li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="lMaxWd">
                  <h4 class="listTitle">KONTAKT:</h4>
                  <ul class="iconListStyle">
                    <li><span class="listIcon"><img src="{{ asset('frontend/images/phone-icon.svg')}}" alt="..."></span> Telefon: {{isset($getAddress->telefon) ? $getAddress->telefon : "NA" }}</li>
                    <li><span class="listIcon"><img src="{{ asset('frontend/images/fax-icon.svg')}}" alt="..."></span> Telefax: {{isset($getAddress->fax) ? $getAddress->fax : "NA" }}</li>
                    <li><span class="listIcon"><img src="{{ asset('frontend/images/email-icon.svg')}}" alt="..."></span> E-Mail: {{isset($getAddress->email) ? $getAddress->email : "NA" }} </li>


                  </ul>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 order-lg-last">
                <div class="lMaxWd">
                  <h4 class="listTitle">QUELLENANGABEN FÜR DIE VERWENDETEN BILDER UND GRAFIKEN:</h4>
                  <p>Local Stories Regensburg</p>
                  <p>Quelle: e-recht24</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="lMaxWd">
                  <h4 class="listTitle">ANGABEN GEMÄSS § 5 TMG</h4>
                  <ul class="iconListStyle">
                    <li><span class="listIcon"><img src="{{ asset('frontend/images/location-pin.svg')}}" alt="..."></span> Landratsamt Regensburg Altmühlstraße 3 D 93059 Regensburg</li>
                    <li><span class="listIcon"><img src="{{ asset('frontend/images/phone-icon.svg')}}" alt="..."></span> Telefon: 0941/4009-0</li>
                    <li><span class="listIcon"><img src="{{ asset('frontend/images/fax-icon.svg')}}" alt="..."></span> Telefax: 0941/4009-299</li>
                    <li><span class="listIcon"><img src="{{ asset('frontend/images/email-icon.svg')}}" alt="..."></span> E-Mail: poststelle@landratsamt-regensburg.de <span class="d-block pt-2">Bewachungserlaubnis nach § 34 GewO</span></li>
                  </ul>
                </div>
              </div>
    
            </div>
          </div>
        </div>
      </section>
</div>
