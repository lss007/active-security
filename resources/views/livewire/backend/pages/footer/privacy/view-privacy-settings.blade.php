<div>
    {{-- The whole world belongs to you. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Manage privacy settings text')}} : 
          </h5>
        </div><!-- sl-page-title -->


        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Privacy Settings </h6>
          
  
            <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">

              <div class="card">
                
                <div class="card-header" role="tab" id="headingOne">
                  <h6 class="mg-b-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                      {{ isset($getPrivacy->title) ? ucwords($getPrivacy->title) : "NA" }}
                    </a>
                  </h6>
                </div><!-- card-header -->
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                  <div class="card-body">
                    <h6 class="card-body-title">
                   
                      @if(isset($getPrivacy))
                   
                      @if($getPrivacy->status == 1 )
          
            
                      <a href="javascript:void(0)" class="btn btn-success active  mg-b-10"  wire:click.prevent="inactive({{$getPrivacy->id}})">
                        Inactive </a>
                      @else
                        <a href="javascript:void(0)" class="btn btn-info active  mg-b-10" wire:click.prevent="active({{$getPrivacy->id}})">
                      Active</a>
                      @endif
                      <a href="{{route('edit_privacy_settings',$getPrivacy->id)}}"> <button class="btn btn-primary active  mg-b-10">Edit</button> </a>
                        @else
                        <a href="{{route('add_privacy_settings')}}" class="btn btn-teal active mg-b-10">
                          ADD </a>
                        @endif
                        @if(isset($trashdata))
                        <a href="javascript:void(0)" class="btn btn-warning  mg-b-10"  wire:click.prevent="restore({{$trashdata->id}})">
                          Restore </a>  
                     @else
                          <a href="javascript:void(0)" class="btn btn-danger active  mg-b-10" wire:click.prevent="delete(1)">
                            Delete </a>     
                            @endif
                     

                    </h6>
                    <p>  Created at:  {{isset($getPrivacy->created_at) ? Carbon\Carbon::parse($getPrivacy->created_at)->diffForHumans() : "NA"}} </p>
          
                    <p class="mg-b-20 mg-sm-b-30 tx-bold"><span class="text-primary"> Paragraph 1: </span>{{ isset($getPrivacy->paragraph) ? $getPrivacy->paragraph : "NA"}} </p>
                    <p class="mg-b-20 mg-sm-b-30 tx-bold"><span class="text-primary">  Title : </span>{{ isset($getPrivacy->title) ? $getPrivacy->title : "NA"}} </p>
                  </div>
                </div>
              </div>


       

              
            </div><!-- accordion -->
          </div><!-- card -->
    </div>
</div>
