<div>
    {{-- The whole world belongs to you. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>
            {{__('dashboard.Content of the job page')}}
          </h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
            @if(isset($getJobsection) )

        
            <a href="javascript:void(0)" class="btn btn-warning active  mg-b-10"  wire:click.prevent="delete({{$getJobsection->id}})">
              Trash </a>      

          
              
            <a href="{{route('edit_job_section',$getJobsection->id)}}"> <button class="btn btn-primary active  mg-b-10">Edit</button> </a>
           

            
            @else
            <a href="{{route('add_last_section')}}"><button class="btn btn-teal active mg-b-10">Add</button> </a>

            @if(isset($trashdata))
            <a href="javascript:void(0)" class="btn btn-warning  mg-b-10"  wire:click.prevent="restore({{$trashdata->id}})">
              Restore </a>  

              {{-- <a href="javascript:void(0)" class="btn btn-danger active  mg-b-10"  wire:click.prevent="fulleDelete({{$trashdata->id}})">
                Delete </a>   --}}
              @endif
       
            @endif 

          </h6>


          <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                    {{ isset($getJobsection->heading) ? ucwords($getJobsection->heading) : "NA" }}
                  </a>
                </h6>
              </div><!-- card-header -->
              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="row">
              <div class="col-md-12">
                <div class="card-body">

               
                  <p>  Created at:  {{isset($getJobsection->created_at) ? Carbon\Carbon::parse($getJobsection->created_at)->diffForHumans() : "NA"}} </p>
                  <h6 class="card-body-title">
                    <span class="text-primary">  Main Heading : </span>
                    {{ isset($getJobsection->heading) ? $getJobsection->heading : "NA" }}  </h6>
                  <p class="mg-b-20 mg-sm-b-30"> <span class="text-primary"> First Title  :</span>  {{isset($getJobsection->title)  ? $getJobsection->title : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Paragraph 1: </span>{{ isset($getJobsection->para1) ? $getJobsection->para1 : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Second Title : </span>{{ isset($getJobsection->title2) ? $getJobsection->title2 : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Paragraph 2: </span>{{ isset($getJobsection->para2) ? $getJobsection->para2 : "NA"}} </p>

                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Button : </span> <a   class="btn btn-info active mg-b-10" href="{{ isset($getJobsection->link) ? $getJobsection->link : "#"}} "> {{ isset($getJobsection->button_name) ? $getJobsection->button_name : "NA"}} </a></p>
        
        
                </div>



                <div class="row">
                  <div class="col-md-4">
                    <span class="text-primary">For Desktop :</span>
                  <hr>
                  <img width="80" class="img-fluid rounded mb-2" src="{{(!empty($getJobsection->image))  
                    ? asset('storage/job/'.$getJobsection->image):asset('no_image.jpg')}}" alt="..." style="width:100px;" >
                  </div>
                  <div class="col-md-4">
                    <span class="text-primary">For Tablet :</span>
                  <hr>
                  <img width="80" class="img-fluid rounded mb-2" src="{{(!empty($getJobsection->tablet_banner))  
                    ? asset('storage/job/'.$getJobsection->tablet_banner):asset('no_image.jpg')}}" alt="..." style="width:100px;" >
                  </div>
                  <div class="col-md-4">
                    <span class="text-primary">For Mobile :</span>
                  <hr>
                  <img width="80" class="img-fluid rounded mb-2" src="{{(!empty($getJobsection->mobile_banner))  
                    ? asset('storage/job/'.$getJobsection->mobile_banner):asset('no_image.jpg')}}" alt="..." style="width:100px;" >
                  </div>
                </div>
                
              </div>
             
            </div>
              </div>
            </div>
       
       
          </div><!-- accordion -->
        </div><!-- card -->

    </div>
</div>
