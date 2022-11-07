<div>
    {{-- The whole world belongs to you. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Home Page Section 1 

          
          
          </h5>
       
          
        </div><!-- sl-page-title -->
   

  
    <div class="row row-sm mg-t-50">
        <div class="col-lg-2 mg-t-25 mg-lg-t-0">
            <div class="card pd-20 pd-sm-40"> 
                    <div class="btn-demo">
                     <a href="{{route('addHomesection1')}}"><button class="btn btn-teal active btn-block mg-b-10">Add</button> </a>
                    @if(isset($homeSectionOne))

                     <a href="{{route('editHomesection1',$homeSectionOne->id)}}"> <button class="btn btn-primary active btn-block mg-b-10">Edit</button> </a>
                   @endif
                    </div><!-- btn-demo -->
            </div><!-- card -->
            
        </div><!-- col-6 -->
    <div class="col-lg-10 mg-t-25 mg-lg-t-0">
      
        <div class="card pd-20 pd-sm-40"> 
       
      
   
          <h6 class="card-body-title">

            Main Meading :
            <span class="tx-12 float-right badge badge-danger p-2">Created at:  {{isset($homeSectionOne->created_at) ? Carbon\Carbon::parse($homeSectionOne->created_at)->diffForHumans() : "NA"}}</span>
            {{ isset($homeSectionOne->heading) ? $homeSectionOne->heading : "NA" }}  </h6>
          <p class="mg-b-20 mg-sm-b-30"> Main Sub Meading :  {{isset($homeSectionOne->sub_heading)  ? $homeSectionOne->sub_heading : "NA"}} </p>
          <p class="mg-b-20 mg-sm-b-30"> Paragraph {{ isset($homeSectionOne->paragraph) ? $homeSectionOne->paragraph : "NA"}} </p>
          <div class="card wd-xs-300">
            Main Image : 
            <img class="card-img-bottom img-fluid"  src="{{(!empty($homeSectionOne->main_image)) 
              ? asset('storage/Home-section/'.$homeSectionOne->main_image):asset('no_image.jpg')}}" alt="..."  width="200px">
          </div><!-- card -->

   <hr>
   <h2>Logo Images </h2>
 
          <div class="row">
            <div class="col-md-3">
              
          <div class="card wd-xs-100">
             Image one : 
            <img class="card-img-bottom img-fluid"  src="{{(!empty($homeSectionOne->logo1)) 
              ? asset('storage/Home-section/'.$homeSectionOne->logo1):asset('no_image.jpg')}}" alt="..."  width="200px">
          </div><!-- card -->
            </div>
            <div class="col-md-3">
              
              <div class="card wd-xs-100">
                 Image two: 
                <img class="card-img-bottom img-fluid"  src="{{(!empty($homeSectionOne->logo2)) 
                  ? asset('storage/Home-section/'.$homeSectionOne->logo2):asset('no_image.jpg')}}" alt="..."  width="200px">
              </div><!-- card -->
                </div>
                <div class="col-md-3">
              
                  <div class="card wd-xs-100">
                     Image three: 
                    <img class="card-img-bottom img-fluid"  src="{{(!empty($homeSectionOne->logo3)) 
                      ? asset('storage/Home-section/'.$homeSectionOne->logo3):asset('no_image.jpg')}}" alt="..."  width="200px">
                  </div><!-- card -->
                    </div>
          </div>
          
        </div><!-- card -->
        
    </div><!-- col-6 -->




    </div>
    </div>
</div>
