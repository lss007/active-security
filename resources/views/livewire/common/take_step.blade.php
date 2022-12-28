@php
      $getLastServices =  DB::table('service_last_sections')->where('status',1)->first();
@endphp
@if(isset($getLastServices))

<section>
  <div class="nextSectionParent">
    <div id="3"></div>
  </div>
    <div class="stepsTextCol">
      <div class="container">
        <div class="row gy-3">
          <div class="col-lg-6">
            <h4 class="lgTitle">{{isset($getLastServices->heading) ? $getLastServices->heading : "NA"}}</h4>
          </div>
          <div class="col-lg-6">
            <ul class="stepList">
              <li>{{isset($getLastServices->list1) ? $getLastServices->list1 : "NA"}}</li>
              <li>{{isset($getLastServices->list2) ? $getLastServices->list2 : "NA"}}</li>
              <li>{{isset($getLastServices->list3) ? $getLastServices->list3 : "NA"}}</li>
              <li>{{isset($getLastServices->list4) ? $getLastServices->list4 : "NA"}}</li>
            </ul>
            <a href="{{isset($getLastServices->link) ? $getLastServices->link : route('ContactPage')}}" class="btn btnPrimary arrowBtn">Machen Sie den 1. Schritt</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  @else
  @endif