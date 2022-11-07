<div>
    {{-- The whole world belongs to you. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Home Page Section 2 

          
          
          </h5>
       
          
        </div><!-- sl-page-title -->
   

  
    <div class="row row-sm mg-t-50">
        <div class="col-lg-2 mg-t-25 mg-lg-t-0">
            <div class="card pd-20 pd-sm-40"> 
                    <div class="btn-demo">
                     <a href="{{route('add_HomeSection2')}}"><button class="btn btn-teal active btn-block mg-b-10">Add</button> </a>
                    @if(isset($homeSectionTwo))

                     <a href="{{route('edit_HomeSection2',$homeSectionTwo->id)}}"> <button class="btn btn-primary active btn-block mg-b-10">Edit</button> </a>
                   @endif
                    </div><!-- btn-demo -->
            </div><!-- card -->
            
        </div><!-- col-6 -->
    <div class="col-lg-10 mg-t-25 mg-lg-t-0">
      
        <div class="card pd-20 pd-sm-40"> 
       
      
   
          <h6 class="card-body-title">

            Main Meading :
            <span class="tx-12 float-right badge badge-danger p-2">Created at:  {{isset($homeSectionTwo->created_at) ? 
            Carbon\Carbon::parse($homeSectionTwo->created_at)->diffForHumans() : "NA"}}</span>
            {{ isset($homeSectionTwo->heading) ? $homeSectionTwo->heading : "NA" }}  </h6>
          <p class="mg-b-20 mg-sm-b-30"> Main Sub Meading :  {{isset($homeSectionTwo->title)  ? $homeSectionTwo->title : "NA"}} </p>
          <p class="mg-b-20 mg-sm-b-30"> Paragraph {{ isset($homeSectionTwo->para1) ? $homeSectionTwo->para1 : "NA"}} </p>
          <div class="card wd-xs-300">
            Main Image : 
            <img class="card-img-bottom img-fluid"  src="{{(!empty($homeSectionTwo->image)) 
              ? asset('storage/Home-section/'.$homeSectionTwo->image):asset('no_image.jpg')}}" alt="..."  width="200px">
          </div><!-- card -->


 
          
        </div><!-- card -->
        
    </div><!-- col-6 -->




    </div>
    </div>
</div>
