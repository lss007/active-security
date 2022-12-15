<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Home Clients')}}
            <span class="float-right"> Total Clients: {{isset($viewHomeClients) ?count($viewHomeClients)  : "NA" }}</span>
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
            <a href="{{route('addHomeclients')}}" class="btn btn-teal active mg-b-10" >{{__('dashboard.Add Clients')}}</a>
        </h6>
        <div class="table-responsive">
          <table class="table table-hover table-bordered mg-b-0">
            <thead class="bg-info">
                <tr>
                  {{-- <th class="wd-15p">Title </th>--}}
                  <th class="wd-5p"> No </th> 
                  <th class="wd-20p ">Image</th>
                  <th class="wd-10p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
          @if (isset($viewHomeClients) && count($viewHomeClients) > 0)
          @foreach($viewHomeClients as $keys => $clients)
    <tr>
            <td> {{  $keys+1}}</td>
      {{-- <td> {{Str::limit($clients->name,20,$end='....')}}</td> --}}

            <td class="bg-dark">
              <img src="{{(!empty($clients->image)) 
                ? asset('storage/Home-clients/'.$clients->image):asset('no_image.jpg')}}" alt="..." width="70">
            </td>
            <td> 
              @if($clients->status == 1 )
                <span class="badge badge-success">Active</span>
              @else
                <span class="badge badge-danger">Inactive</span>
              @endif
            </td>
          <td class="text-center">  
          <a href="{{route('editHomeclients',$clients->id)}}" class="btn btn-sm btn-info" title="edit" >
            <i class="fa fa-edit"></i></a>
            <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show"
            data-toggle="modal" data-target="#modaldemo{{$clients->id}}">
              <i class="fa fa-eye"></i></a>
            @if($clients->status == 1 )
              <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive"  wire:click.prevent="inactive({{$clients->id}})">
              <i class="fa fa-thumbs-down"></i>
            @else
              <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="inactive({{$clients->id}})">
              <i class="fa fa-thumbs-up"></i>
            @endif
              <a href="javascript:void(0)"   class="btn btn-sm btn-danger" title="delete"  wire:click.prevent="deleteclient({{$clients->id}})"   onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
              <i class="fa fa-trash"></i></a>

            {{-- Modal  --}}
            
            {{-- end modal  --}}

          </td>

    </tr>
   <!-- LARGE MODAL -->
   <div id="modaldemo{{$clients->id}}" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Client Logo Preview</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20 bg-dark">

          <img width="200" class="img-fluid" src="{{(!empty($clients->image))  
            ? asset('storage/Home-clients/'.$clients->image):asset('no_image.jpg')}}" alt="..." >
          
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

            Showing {{ $viewHomeClients->firstItem() }} to {{ $viewHomeClients->lastItem() }} of total {{$viewHomeClients->total()}}
          </p>
      
          
          {{ $viewHomeClients->links() }}
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
            
                <td>   
                  <img width="100" class="img-fluid" src="{{(!empty($trashed->image)) 
                    ? asset('storage/Home-clients/'.$trashed->image):asset('no_image.jpg')}}" alt="..." >
                    </td>
                <td> {{isset($trashed->link) ? str_limit($trashed->link , $limit=20 ) : "NA" }}</td>
 
      
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
