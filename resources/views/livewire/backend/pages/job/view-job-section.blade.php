<div>
    {{-- The whole world belongs to you. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Company Page Section 
          </h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
            @if(isset($getJobsection) )
            @if($getJobsection->status == 1 )
          
            
            <a href="javascript:void(0)" class="btn btn-success active  mg-b-10"  wire:click.prevent="inactive({{$getJobsection->id}})">
              Inactive </a>
            @else
              <a href="javascript:void(0)" class="btn btn-info active  mg-b-10" wire:click.prevent="active({{$getJobsection->id}})">
            Active</a>
            @endif
        
            <a href="javascript:void(0)" class="btn btn-danger active  mg-b-10"  wire:click.prevent="delete({{$getJobsection->id}})">
              Delete </a>      

           
            <a href="{{route('edit_job_section',$getJobsection->id)}}"> <button class="btn btn-primary active  mg-b-10">Edit</button> </a>
           

            
            @else
            @if(isset($trashdata))
            <a href="javascript:void(0)" class="btn btn-warning  mg-b-10"  wire:click.prevent="restore({{$trashdata->id}})">
              Restore </a>  
              @endif
            <a href="{{route('add_last_section')}}"><button class="btn btn-teal active mg-b-10">Add</button> </a>
        
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
                <div class="card-body">

                  <img width="80" class="img-fluid rounded mb-2" src="{{(!empty($getJobsection->image))  
                    ? asset('storage/job/'.$getJobsection->image):asset('no_image.jpg')}}" alt="..." style="width:100px;" >
                  
                  <p>  Created at:  {{isset($getJobsection->created_at) ? Carbon\Carbon::parse($getJobsection->created_at)->diffForHumans() : "NA"}} </p>
                  <h6 class="card-body-title">
                    <span class="text-primary">  Main Meading : </span>
                    {{ isset($getJobsection->heading) ? $getJobsection->heading : "NA" }}  </h6>
                  <p class="mg-b-20 mg-sm-b-30"> <span class="text-primary"> First Title  :</span>  {{isset($getJobsection->title)  ? $getJobsection->title : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Paragraph 1: </span>{{ isset($getJobsection->para1) ? $getJobsection->para1 : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Second Title : </span>{{ isset($getJobsection->title2) ? $getJobsection->title2 : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Paragraph 2: </span>{{ isset($getJobsection->para2) ? $getJobsection->para2 : "NA"}} </p>

                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Button : </span> <a   class="btn btn-info active mg-b-10" href="{{ isset($getJobsection->link) ? $getJobsection->link : "#"}} "> {{ isset($getJobsection->button_name) ? $getJobsection->button_name : "NA"}} </a></p>
        
        
                </div>
              </div>
            </div>
       
       
          </div><!-- accordion -->
        </div><!-- card -->

    </div>
</div>
