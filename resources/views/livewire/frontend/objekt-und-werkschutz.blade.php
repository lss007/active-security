<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @if(isset($this->ObjektUndPageBanner))
      <section>
        <div class="bannerSection innerPageBanner s1Banner" style="background-image: url('{{asset('storage/All-banner/'.$this->ObjektUndPageBanner->banner_image)}}')">
          <div class="container">
            <div class="bannerContent">
              <h1 class="xlTitle">{{	isset($ObjektUndPageBanner->heading) ? $ObjektUndPageBanner->heading : "NA"}}</h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">{{	isset($ObjektUndPageBanner->title) ? $ObjektUndPageBanner->title : "NA"}}.</p>
              <a href="{{route('ContactPage')}}" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">{{	isset($ObjektUndPageBanner->button_text) ? $ObjektUndPageBanner->button_text : "Angebot einholen"}} </a>
            </div>
          </div>
        </div>
      </section>
      @else 
      <section>
        <div class="bannerSection innerPageBanner ">
          <div class="container">
            <div class="bannerContent">
              <h1 class="xlTitle">NA  </h1>
              <p class="subTitle pt-1 pt-lg-2 pt-xl-3">NA</p>
              <a href="contact.html" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">NA </a>
            </div>
          </div>
        </div>
      </section>
      @endif
     

      <section>
        <div class="sectionSpace">
          <div class="container">
            <div class="row gy-4 align-items-center">
              <div class="col-lg-6">
                <div class="imgCol pe-lg-4">
                  <img src="{{ asset('frontend/images/s1-img-1.jpg')}}" alt="..." class="imgStyle1">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contentCol">
                  <h2 class="lgTitle p2">Wir schützen Sie mit Erfahrung.</h2>
                  <p class="lgText p2 pt-1">Ihr DEKRA zertifizierter Werk- und Objektschutz in Bayern.</p>
                  <p>Beim Objektschutz stellen wir die Sicherheit von Industrie- und Firmengebäuden sicher. active security schützt Ihre Objekte durch intensive und zuverlässige Objektbewachung vor Sachbeschädigung, Vandalismus, Diebstahl und Einbruch. Unsere Security Guards übernehmen dabei die Überwachung und Kontrolle des Personen-, Fahrzeug- und Warenverkehrs, die Verwaltung von Schlüsseln und Keycards, Kontrollgänge im Innen- und Außenbereich, die Zutrittskontrolle von Mitarbeitern und Besuchern sowie die Ausstellung und Verwaltung von Mitarbeiter- und Besucherausweisen.</p>
                  <p>Wir erarbeiten im Vorfeld ein Sicherheitskonzept zum Gebäude- bzw. Objektschutz, das exakt auf Ihre Anforderungen zugeschnitten ist. Bei der anschließenden Objektbewachung überprüfen wir mit regelmäßigen Kontrollmaßnahmen, ob die Sicherheit Ihres Objektes gewährleistet ist - und ergreifen im Ernstfall effiziente Maßnahmen, um den Objektschutz unmittelbar wiederherzustellen.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
    
      <section>
        <div class="sectionBgCol serviceSectionBg1">
          <div class="container">
            <div class="sectonTitleCol">
              <h4 class="xlTitle">Für Sie Tag und Nacht im Einsatz</h4>
            </div>
          </div>
        </div>
      </section>
    
      @include('livewire.common.take_step')
</div>
