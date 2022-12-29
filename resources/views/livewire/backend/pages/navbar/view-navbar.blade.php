<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>
            {{__('dashboard.Manage menu')}}
            <span class="float-right"> Total Navbar: {{isset($viewSiteNavbar) ?count($viewSiteNavbar)  : "NA" }}</span>
          </h5>
        
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div class="col-lg-12">
            <div class="form-group">
               <label class="form-control-label"> Search here : </label>
               <input class="form-control" placeholder="Search" type="text" wire:model="search">  <br> 

             </div>
          </div><!-- col-4 -->
          <h6 class="card-body-title"> 
            <button wire:click.prevent="deleteSE"
            onclick="confirm('Are you sure want to delete all ?') || event.stopImmediatePropagation()"
            class="btn btn-danger active mg-b-10">
        {{__('dashboard.Delete selected')}}
    </button>
            <a href="{{route('add_navbar_list')}}" class="btn btn-teal active mg-b-10" >
            {{__('dashboard.Add menu item')}}
            </a>
        </h6>
        <div class="table-responsive">
          <table class="table table-hover table-bordered mg-b-0"  wire:sortable="updateTaskOrder">
            <thead class="bg-info">
                <tr>
                  {{-- <th class="wd-15p">Title </th>--}}
                  <th class="wd-5p"> No </th> 
                  <th class="wd-20p ">Route Name</th>
                  {{-- <th class="wd-20p ">Route link</th> --}}
                  <th class="wd-10p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
          @if (isset($viewSiteNavbar) && count($viewSiteNavbar) > 0)
          @foreach($viewSiteNavbar as $keys => $value)
      <tr wire:sortable.item="{{ $value->id }}" wire:key="task-{{ $value->id }}">
            <td>           
               <input type="checkbox" wire:model="selectedUser" value="{{ $value->id }}">
               {{  $keys+1}}</td>
      {{-- <td> {{Str::limit($value->route_name,20,$end='....')}}</td> --}}

            <td >
                {{isset($value->route_name) ? $value->route_name : "NA"}}
                <br>
                Created at:
                {{Carbon\Carbon::parse($value->created_at)->diffForHumans()}}
            </td>
            {{-- <td >
              {{isset($value->routeName->route_link) ? $value->routeName->route_link : "NA"}}
          </td> --}}
            
            <td> 
              @if($value->status == 1 )
                <span class="badge badge-success">Active</span>
              @else
                <span class="badge badge-danger">Inactive</span>
              @endif
            </td>
          <td class="text-center">  
          <a href="{{route('edit_navbar_list',$value->id)}}" class="btn btn-sm btn-info" title="edit" >
            <i class="fa fa-edit"></i></a>
            <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show"
            data-toggle="modal" data-target="#modaldemo{{$value->id}}">
              <i class="fa fa-eye"></i></a>
            @if($value->status == 1 )
              <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive"  wire:click.prevent="inactive({{$value->id}})">
              <i class="fa fa-thumbs-down"></i>
            @else
              <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$value->id}})">
              <i class="fa fa-thumbs-up"></i>
            @endif
              <a href="javascript:void(0)"   class="btn btn-sm btn-danger" title="delete"  wire:click.prevent="delete({{$value->id}})"   onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
              <i class="fa fa-trash"></i></a>

            {{-- Modal  --}}
            
            {{-- end modal  --}}

          </td>

    </tr>
   <!-- LARGE MODAL -->
   <div id="modaldemo{{$value->id}}" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">  Preview</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20 ">

<span class="text-primary"> Route Name: </span>
          {{isset($value->route_name) ? $value->route_name : "NA"}}
          <br>
          <span class="text-primary">   Created at: </span>
          {{Carbon\Carbon::parse($value->created_at)->diffForHumans()}}
          
        </div><!-- modal-body -->
       
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->

       @endforeach
    @else
  
@endif
                

              </tbody>
            </table>
          </div><!-- table-wrapper -->
          <p>

            Showing {{ $viewSiteNavbar->firstItem() }} to {{ $viewSiteNavbar->lastItem() }} of total {{$viewSiteNavbar->total()}}
          </p>
      
          
          {{ $viewSiteNavbar->links() }}
          @if (isset($trashdata) && count($trashdata) > 0)
          <div class="card pd-20 pd-sm-40">
          <h4>Restore Deleted data   </h4>
      
          <div class="table-responsive mg-t-25">
        
          <table class="table table-hover table-bordered mg-b-0">
            <thead class="bg-danger">
              <tr>
      
                <th class="wd-20p">Image</th>
                <th class="wd-20p">Link</th>
            
                <th class="wd-20p">Action</th>
      
              </tr>
            </thead>
            <tbody>
            
              @foreach($trashdata as $keys => $trashed)
              <tr>
            
                <td >   
                
                    {{isset($trashed->route_name) ? $trashed->route_name : "NA"}}
                    </td>
                <td>          {{isset($trashed->routeName->route_link) ? $trashed->routeName->route_link : "NA"}}</td>
 
      
                <td>
      
                  <button class="btn btn-primary disabled mg-b-10"  wire:click.prevent="restore({{$trashed->id}})">Restore</button>
      
                  <button class="btn btn-danger  mg-b-10" wire:click.prevent="fulleDelete({{$trashed->id}})">Delete</button>
      
              </td>
              </tr>
              @endforeach
            
      
      
            </tbody>
          </table>
          </div>
   
          </div>
      
          @endif
        </div><!-- card -->
        
      </div><!-- sl-pagebody -->


      <!-- modal -->
</div>


  
{{-- ================== --}}
