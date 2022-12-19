<div>
    {{-- The whole world belongs to you. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>
       Manage Cookie Text
          </h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
            @if(isset($getcookies) )

        
            <a href="javascript:void(0)" class="btn btn-warning active  mg-b-10"  wire:click.prevent="delete({{$getcookies->id}})">
              Trash </a>      

          
              
            <a href="{{route('admin_edit_cookie',$getcookies->id)}}"> <button class="btn btn-primary active  mg-b-10">Edit</button> </a>
           

            
            @else
            <a href="{{route('admin_add_cookie')}}"><button class="btn btn-teal active mg-b-10">Add</button> </a>

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
                   View Cookie
                  </a>
                </h6>
              </div><!-- card-header -->
           <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="row">
              <div class="col-md-12">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                  <p class="text-dark tx-bold"> Created at:  {{isset($getcookies->created_at) ? Carbon\Carbon::parse($getcookies->created_at)->diffForHumans() : "NA"}} </p>

                    </div>
                    <div class="col-md-6">
                  <p class="text-dark tx-bold"> Updated at:  {{isset($getcookies->created_at) ? Carbon\Carbon::parse($getcookies->updated_at)->diffForHumans() : "NA"}} </p>

                    </div>
                  </div>

                  <h6 class="card-body-title"><span class="text-primary"> View Cookie text  : </span>{{ isset($getcookies->text) ? $getcookies->text : "NA" }}  </h6>
                  <p class="mg-b-20 mg-sm-b-30"> <span class="text-primary">Accept Text  : </span>  {{isset($getcookies->decline)  ? $getcookies->decline : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"> <span class="text-primary">Decline Text  : </span>  {{isset($getcookies->accept)  ? $getcookies->accept : "NA"}} </p>
                </div>
              </div>
            </div>
           </div>
            </div>
       
       
          </div><!-- accordion -->
        </div><!-- card -->

    </div>
</div>
