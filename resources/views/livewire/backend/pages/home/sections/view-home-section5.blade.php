<div>
    {{-- The whole world belongs to you. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Home Page Last Section 

          
          
          </h5>
       
          
        </div><!-- sl-page-title -->
   

  
    <div class="row row-sm mg-t-50">
        <div class="col-lg-2 mg-t-25 mg-lg-t-0">
            <div class="card pd-20 pd-sm-40"> 
                    <div class="btn-demo">
                     <a href="{{route('Add_Home_Section5')}}"><button class="btn btn-teal active btn-block mg-b-10">Add</button> </a>
                    @if(isset($homeSectionfive))

                     <a href="{{route('edit_Home_Section5',$homeSectionfive->id)}}"> <button class="btn btn-primary active btn-block mg-b-10">Edit</button> </a>
                   @endif
                    </div><!-- btn-demo -->
            </div><!-- card -->
            
        </div><!-- col-6 -->
    <div class="col-lg-10 mg-t-25 mg-lg-t-0">
      
        <div class="card pd-20 pd-sm-40"> 
       
      
   
          <h6 class="card-body-title">

            <span class="text-primary"> Main Meading :</span>
            <span class="tx-12 float-right badge badge-danger p-2">
            Created at:   
              {{isset($homeSectionfive->created_at) ? 
            Carbon\Carbon::parse($homeSectionfive->created_at)->diffForHumans() : "NA"}}
            </span>
            {{ isset($homeSectionfive->heading) ? $homeSectionfive->heading : "NA" }}  </h6>
          <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary">Main Sub Meading : </span> {{isset($homeSectionfive->title)  ? $homeSectionfive->title : "NA"}} </h5>
          <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Paragraph : </span>{{ isset($homeSectionfive->para1) ? $homeSectionfive->para1 : "NA"}} </p>
          <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Paragraph : </span>{{ isset($homeSectionfive->para2) ? $homeSectionfive->para2 : "NA"}} </p>
          <h5 class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Button link  :</span><a href="{{ isset($homeSectionfive->button_link) ? $homeSectionfive->button_link : "NA"}} ">{{ isset($homeSectionfive->button_name) ? $homeSectionfive->button_name : "NA"}} </a></h5>


          <div class="card wd-xs-300">
            <span class="text-primary">   Main Image : </span>
            <img class="card-img-bottom img-fluid"  src="{{(!empty($homeSectionfive->image)) 
              ? asset('storage/Home-section/'.$homeSectionfive->image):asset('no_image.jpg')}}" alt="..."  width="200px">
          </div><!-- card -->


 
          
        </div><!-- card -->
        
    </div><!-- col-6 -->




    </div>
    </div>
</div>
