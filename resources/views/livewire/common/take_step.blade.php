@php
      $getLastServices =  DB::table('service_last_sections')
      ->leftJoin('route_name_lists','service_last_sections.link','route_name_lists.id')
      ->select('service_last_sections.*','route_name_lists.route_link' )
      ->where('service_last_sections.status',1)->first();
      // dd($getLastServices );
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
            {{-- ================== --}}
            @php
            $gethttplink  =  strpos( $getLastServices->link, 'http') === 0;
            @endphp
            @if(isset($getLastServices->link)) 
              @if( $gethttplink )
                <a href="{{$getLastServices->link}}" class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4" target="_blank">
                  {!! isset($getLastServices->button)  ? html_entity_decode($getLastServices->button) : "Gleich beraten lassen" !!} 
                </a>
              @else
                  <a href="{{route($getLastServices->route_link)}}{{isset($getLastServices->hash_tag_id) ? '#'.$getLastServices->hash_tag_id : ''}}" 
                    class="btn btnPrimary arrowBtn mt-lg-3 mt-xl-4">
                    {!! isset($getLastServices->button)  ? html_entity_decode($getLastServices->button) : "Gleich beraten lassen" !!} 
                  </a>
              @endif
              @else
            @endif
            {{-- ===================== --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  @else
  @endif