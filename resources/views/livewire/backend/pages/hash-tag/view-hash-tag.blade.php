<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5> Manage All Hash Tags
        
            <span class="float-right"> Total : {{isset($viewallhashtag) ?$viewallhashtag->total()  : "NA" }}</span>
          </h5>
    
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div class="col-lg-12">
            <div class="form-group">
               <label class="form-control-label"> Search  : </label>
               <input class="form-control" placeholder="Search" type="text" wire:model="search">  <br> 

             </div>
          </div><!-- col-4 -->
          <h6 class="card-body-title">    

            <a href="{{route('add_Allhashtag')}}" class="btn btn-teal active mg-b-10"  > Add </a>
        </h6>


        <div class="table-responsive">
          <table class="table table-hover table-bordered mg-b-0">
            <thead class="bg-info">
              <tr>
                  
                <th class="wd-10p ">S.no  </th>

                <th class="wd-10p ">Page Name </th>
                <th class="wd-15p">Section no </th>

       
               
                <th class="wd-20p">Action</th>
              </tr>
            </thead>
            <tbody>
              @if(isset($viewallhashtag))
              @foreach($viewallhashtag as $value)
              <tr>
                <td class="text-center">
                  {{  $viewallhashtag->firstItem() + $loop->index  }} 
             
                    </td>
                    <td >  {{isset($value->route_name )? Str::limit($value->route_name,20,$end='....') : "NA"}}</td>
                <td > 
                  {{Str::limit($value->section_id,20,$end='....')}}
                </td>


          
          <td class="text-center">  
            {{-- <a href="{{route('edit_Allhashtag',$value->id)}}" class="btn btn-sm btn-info" title="edit" >
              <i class="fa fa-edit"></i>
            </a> --}}
       
            @if($value->status == 1 )
            <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$value->id}})">
            <i class="fa fa-thumbs-down"></i>
            @else
              <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$value->id}})">
              <i class="fa fa-thumbs-up"></i>
            @endif
          <a href="javascript:void(0)"  wire:click.prevent="delete({{$value->id}})" class="btn btn-sm btn-danger" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
            <i class="fa fa-trash"></i></a>

            </td>

            </tr>
                  <!-- LARGE MODAL -->
        
              @endforeach
            @else
            <tr>
              <td  class="text-center text-danger">
                <span>No record found</span>
            
              </td>
            </tr>
            @endif
            
            </tbody>
          </table>
        </div><!-- table-responsive -->
        <p>

          Showing {{ $viewallhashtag->firstItem() }} to {{ $viewallhashtag->lastItem() }} of total {{$viewallhashtag->total()}}
        </p>
    
        
        {{ $viewallhashtag->links() }}
    {{--============================== start trashed data ============================== --}}
    @if (isset($trashdatas ) && count($trashdatas) > 0)
    <div class="card pd-20 pd-sm-40">
      <h2>Restore Deleted Banner   </h2>
      <div class="table-responsive mg-t-25">
        <table class="table table-hover table-bordered mg-b-0">
          <thead class="bg-danger">
            <tr>
        
              <th class="wd-15p">Image</th>
              <th class="wd-60p">Title</th>
     
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
          
            @foreach($trashdatas as $keys => $trashed)
            <tr>
        
              <td>  
             
                <img src="{{(!empty($trashed->banner_image)) 
                  ? asset('storage/All-banner/'.$trashed->banner_image):asset('no_image.jpg')}}" alt="..." width="100">
                
                 
                </td>
              <td>  {{Str::limit($value->title,50,$end='....')}}</td>

              <td>

                <button class="btn btn-primary disabled mg-b-10"  wire:click.prevent="restore({{$trashed->id}})">Restore</button>

                <button class="btn btn-danger  mg-b-10" wire:click.prevent="fulleDelete({{$trashed->id}})">Delete</button>

            </td>
            </tr>
            @endforeach
        

        
          </tbody>
        </table>
      </div>
      {{ $trashdatas->links("pagination::bootstrap-4") }}
    </div>

    @endif  
 
    {{--============================== end trashed data ============================== --}}
        </div><!-- card -->
        
      </div><!-- sl-pagebody -->


      <!-- modal -->
</div>


{{-- ================== --}}
