<div>
    {{-- The whole world belongs to you. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>
            Manage Seo Setting
          </h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
            @if(isset($getSeoData) )

        
            <a href="javascript:void(0)" class="btn btn-warning active  mg-b-10"  wire:click.prevent="delete({{$getSeoData->id}})">
              Trash </a>      

          
              @if($getSeoData->status == 1 )
              <a href="javascript:void(0)" class="btn btn-success active  mg-b-10"  
              wire:click.prevent="inactive({{$getSeoData->id}})">Inactive </a>
         @else
              <a href="javascript:void(0)" class="btn btn-info active  mg-b-10"
               wire:click.prevent="active({{$getSeoData->id}})"> Active</a>
            @endif

            <a href="{{route('edit_seo_setting',$getSeoData->id)}}"> <button class="btn btn-primary active  mg-b-10">Edit</button> </a>
           

            
            @else
            <a href="{{route('add_seo_setting')}}"><button class="btn btn-teal active mg-b-10">Add</button> </a>

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
                    {{ isset($getSeoData->heading) ? ucwords($getSeoData->heading) : "NA" }}
                  </a>
                </h6>
              </div><!-- card-header -->
              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="row">
              <div class="col-md-12">
                <div class="card-body">

               
                  <p>  Created at:  {{isset($getSeoData->created_at) ? Carbon\Carbon::parse($getSeoData->created_at)->diffForHumans() : "NA"}} </p>
                  <h6 class="card-body-title">
                    <span class="text-primary">  Site Title : </span>
                    {{ isset($getSeoData->title) ? $getSeoData->title : "NA" }}  </h6>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Description : </span>{{ isset($getSeoData->description) ? $getSeoData->description : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Keywords : </span>{{ isset($getSeoData->keywords) ? $getSeoData->keywords : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Author : </span>{{ isset($getSeoData->author ) ? $getSeoData->author : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> site_name : </span>{{ isset($getSeoData->site_name ) ? $getSeoData->site_name : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Og title : </span>{{ isset($getSeoData->og_title ) ? $getSeoData->og_title : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Og description : </span>{{ isset($getSeoData->og_description ) ? $getSeoData->og_description : "NA"}} </p>
        
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Og image_size : </span>{{ isset($getSeoData->og_image_size ) ? $getSeoData->og_image_size : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Og image_url : </span> <a href="{{ isset($getSeoData->og_image ) ?asset('storage/meta/'.$getSeoData->og_image) : "NA"}}" target="_blank">Image link  </a> </p>

        
                </div>

                

                <div class="row">
                  <div class="col-md-12">
                    <span class="text-primary">Og Image :</span>
                  <hr>
                  <img width="80" class="img-fluid rounded mb-2" src="{{(!empty($getSeoData->og_image))  
                    ? asset('storage/meta/'.$getSeoData->og_image):asset('no_image.jpg')}}" alt="..." style="width:300px;" >
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
