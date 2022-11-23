<div>
  {{-- The whole world belongs to you. --}}
  <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Home Page Section 2 
        </h5>
      </div><!-- sl-page-title -->
{{-- ========================== --}}
 <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">
          @if(isset($homeSectionTwo)) 
          <a href="{{route('edit_HomeSection2',$homeSectionTwo->id)}}"> 
              <button class="btn btn-primary active  mg-b-10">Edit</button> </a>
          @else
             <a href="{{route('add_HomeSection2')}}"><button class="btn btn-teal active mg-b-10">Add</button> </a>
          @endif
        </h6>
     

        <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-header" role="tab" id="headingOne">
              <h6 class="mg-b-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">

          {{ isset($homeSectionTwo->heading) ? ucwords( $homeSectionTwo->heading) : "NA" }}
                </a>
              </h6>
            </div><!-- card-header -->

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                      <h6 class="card-body-title">
                        <p>Created at:  {{isset($homeSectionTwo->created_at) ? 
                          Carbon\Carbon::parse($homeSectionTwo->created_at)->diffForHumans() : "NA"}}</p>
                        <span class="text-primary"> Main Heading :</span>
                          {{ isset($homeSectionTwo->heading) ? $homeSectionTwo->heading : "NA" }}  </h6>
                        <h6 class="mg-b-20 mg-sm-b-30 tx-bold"><span class="text-primary"> Main Sub Heading : </span> {{isset($homeSectionTwo->title)  ? $homeSectionTwo->title : "NA"}} </h6>
                        <p class="mg-b-20 mg-sm-b-30 tx-bold"> <span class="text-primary">Paragraph : </span>{{ isset($homeSectionTwo->para1) ? $homeSectionTwo->para1 : "NA"}} </p>
                        <p class="mg-b-20 mg-sm-b-30 tx-bold"><span class="text-primary"> Paragraph :</span>{{ isset($homeSectionTwo->para2) ? $homeSectionTwo->para2 : "NA"}} </p>
                    </div>
                    <div class="col-md-4">
                      <div class="card wd-xs-300">
                        <span class="text-primary">    Main Image : </span>
                        <img class="card-img-bottom img-fluid"  src="{{(!empty($homeSectionTwo->image)) ? asset('storage/Home-section/'.$homeSectionTwo->image):asset('no_image.jpg')}}" alt="..."  width="200px">
                      </div><!-- card -->
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div><!-- accordion -->
      </div><!-- card -->
{{-- ================================= --}}


  </div>
</div>
