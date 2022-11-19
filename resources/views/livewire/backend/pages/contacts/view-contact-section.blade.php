<div>
    {{-- The whole world belongs to you. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Contact Page Section 
          </h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
            @if(isset($fetchContactData) )
            @if($fetchContactData->status == 1 )
          
            
            <a href="javascript:void(0)" class="btn btn-success active  mg-b-10"  wire:click.prevent="inactive({{$fetchContactData->id}})">
              Inactive </a>
            @else
              <a href="javascript:void(0)" class="btn btn-info active  mg-b-10" wire:click.prevent="active({{$fetchContactData->id}})">
            Active</a>
            @endif
        
            <a href="javascript:void(0)" class="btn btn-danger active  mg-b-10"  wire:click.prevent="delete({{$fetchContactData->id}})">
              Delete </a>      

           
            <a href="{{route('edit_Contacts_section',$fetchContactData->id)}}"> <button class="btn btn-primary active  mg-b-10">Edit</button> </a>
           

            
            @else
            @if(isset($trashdata))
            <a href="javascript:void(0)" class="btn btn-warning  mg-b-10"  wire:click.prevent="restore({{$trashdata->id}})">
              Restore </a>  
              @endif
            <a href="{{route('Add_Contacts_section')}}">
                <button class="btn btn-teal active mg-b-10">Add</button> </a>
        
            @endif

          </h6>


          <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                    {{ isset($fetchContactData->heading) ? ucwords($fetchContactData->heading) : "NA" }}
                  </a>
                </h6>
              </div><!-- card-header -->
              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body">

                  <img width="80" class="img-fluid rounded mb-2" src="{{(!empty($fetchContactData->image))  
                    ? asset('storage/Contact/'.$fetchContactData->image):asset('no_image.jpg')}}" alt="..." style="width:300px;" >
                  
                  <p>  Created at:  {{isset($fetchContactData->created_at) ? Carbon\Carbon::parse($fetchContactData->created_at)->diffForHumans() : "NA"}} </p>
                  <h2 class="card-body-title">
                    <span class="text-primary">   Heading : </span>
                    {{ isset($fetchContactData->heading) ? $fetchContactData->heading : "NA" }}  </h2>
                  <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary"> Title  :</span>  {{isset($fetchContactData->title)  ? $fetchContactData->title : "NA"}} </h5>
                  <h6 class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Paragraph 1: </span>{{ isset($fetchContactData->para1) ? $fetchContactData->para1 : "NA"}} </h6>
            

                </div>
              </div>
            </div>
       
       
          </div><!-- accordion -->
        </div><!-- card -->

    </div>
</div>
