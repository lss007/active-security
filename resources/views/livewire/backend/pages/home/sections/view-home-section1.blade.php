<div>
    {{-- The whole world belongs to you. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Home Page Section 1 
          </h5>
        </div><!-- sl-page-title -->
{{-- ========================== --}}
   <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
            @if(isset($homeSectionOne))
              
            <a href="{{route('editHomesection1',$homeSectionOne->id)}}"> 
              <button class="btn btn-primary active  mg-b-10">Edit</button> </a>
            @else
            <a href="{{route('addHomesection1')}}"><button class="btn btn-teal active  mg-b-10">Add</button> </a>
           @endif
          </h6>
       

          <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">

            {{ isset($homeSectionOne->heading) ? ucwords( $homeSectionOne->heading) : "NA" }}
                  </a>
                </h6>
              </div><!-- card-header -->

              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body">
         
                    <div class="row">
                      <div class="col-md-8">
                        <h6 class="card-body-title">
                          <p>Created at:  {{isset($homeSectionOne->created_at) ? Carbon\Carbon::parse($homeSectionOne->created_at)->diffForHumans() : "NA"}}</p>
                                      <span class="text-primary">  Main Heading : </span>s
                           
                              {{ isset($homeSectionOne->heading) ? $homeSectionOne->heading : "NA" }}  </h6>
                            <p class="mg-b-20 mg-sm-b-30"> <span class="text-primary">Main Sub Heading :</span>  {{isset($homeSectionOne->sub_heading)  ? $homeSectionOne->sub_heading : "NA"}} </p>
                            <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Paragraph : </span>{{ isset($homeSectionOne->paragraph) ? $homeSectionOne->paragraph : "NA"}} </p>
                     
                  
                                  <hr>
                                  <h2><span class="text-primary">Logo Images :</span></h2>
                   
                            <div class="row">
                              <div class="col-md-3">
                                
                            <div class="card wd-xs-100">
                              <span class="text-primary">    Image one :  </span>
                              <img class="card-img-bottom img-fluid"  src="{{(!empty($homeSectionOne->logo1)) ? asset('storage/Home-section/'.$homeSectionOne->logo1):asset('no_image.jpg')}}" alt="..."  width="100">
                            </div><!-- card -->
                              </div>
                              <div class="col-md-3">
                                
                                <div class="card wd-xs-100">
                                  <span class="text-primary">   Image two: </span>
                                  <img class="card-img-bottom img-fluid"  src="{{(!empty($homeSectionOne->logo2))  ? asset('storage/Home-section/'.$homeSectionOne->logo2):asset('no_image.jpg')}}" alt="..."  width="100">
                                </div><!-- card -->
                                  </div>
                                  <div class="col-md-3">
                                
                                    <div class="card wd-xs-100">
                                      <span class="text-primary"> Image three: </span>
                                      <img class="card-img-bottom img-fluid"  src="{{(!empty($homeSectionOne->logo3)) ? asset('storage/Home-section/'.$homeSectionOne->logo3):asset('no_image.jpg')}}" alt="..."  width="100">
                                    </div><!-- card -->
                                      </div>
                            </div>
                            
                      </div>
                      <div class="col-md-4">

                        <div class="card wd-xs-300">
                          <span class="text-primary">    Main Image : </span>
                          <img class="card-img-bottom img-fluid"  src="{{(!empty($homeSectionOne->main_image)) 
                            ? asset('storage/Home-section/'.$homeSectionOne->main_image):asset('no_image.jpg')}}" alt="..."  width="100px">
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
