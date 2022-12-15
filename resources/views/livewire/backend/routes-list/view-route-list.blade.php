<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5> {{__('dashboard.Route list')}}</h5>
    
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40 mg-t-50">
            <h6 class="card-body-title">    
                <a href="{{route('add_route_list')}}" class="btn btn-teal active mg-b-10"  > {{__('dashboard.Add Route')}} </a>
            </h6>
  
            <div class="table-responsive">
              <table class="table table-hover table-bordered mg-b-0">
                <thead class="bg-info">
                  <tr>
                  <th >S.no </th>
                  <th >Route Name </th>
                  <th >Route Link </th>
                  <th >Created at  </th>
                  <th >Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if (isset($getNameList))
                    @foreach($getNameList as  $keys => $getNameList)
               
                  <tr>
                   
                    <td>{{ $keys+1}}</td>
                    <td class="tx-bold"> {{Str::limit($getNameList->route_name,30,$end='....')}}</td>
                    <td class="tx-bold"> {{Str::limit($getNameList->route_link,30,$end='....')}}</td>
                    <td class="tx-bold">   {{Carbon\Carbon::parse($getNameList->created_at)->diffForHumans()}}</td>
    
                    <td>  
                        <a href="{{route('edit_route_list',$getNameList->id)}}" class="btn btn-sm btn-info" title="edit" >
                            <i class="fa fa-edit"></i></a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show" data-toggle="modal" data-target="#modaldemo{{$getNameList->id}}">
                            <i class="fa fa-eye"></i></a>
                            @if($getNameList->status == 1 )
                            <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$getNameList->id}})">
                            <i class="fa fa-thumbs-down"></i>
                            @else
                            <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$getNameList->id}})">
                            <i class="fa fa-thumbs-up"></i>
                            @endif
                            {{-- <a href="javascript:void(0)"  wire:click="delete({{$getNameList->id}})" class="btn btn-sm btn-danger " title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                                <i class="fa fa-trash"></i></a> --}}
                    

   

                    {{-- Modal  --}}
                    
                    {{-- end modal  --}}

                            </td>

                                    <!-- LARGE MODAL -->
                <div id="modaldemo{{$getNameList->id}}" class="modal fade">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content tx-size-sm">
                        <div class="modal-header pd-x-20">
                            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Route Preview</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body pd-20">
                            <h5 class=" lh-3 mg-b-20"><span class="text-primary"> Route Name :</span> {{isset($getNameList->route_name) ? $getNameList->route_name : "NA" }}</h5>
                        
                            <h6 class=" lh-3 mg-b-20"> <span class="text-primary">Route link :</span>{{isset($getNameList->route_link) ? $getNameList->route_link : "NA"}}</h6>
    
                        
                    
            
                                    </div><!-- modal-body -->
             
                                </div>
                            </div><!-- modal-dialog -->
                </div><!-- modal -->
                  </tr>

                  @endforeach
              
                  @endif
  
            
             
                </tbody>
              </table>
             
            </div><!-- table-responsive -->
  
          </div><!-- card -->
        <div class="card pd-20 pd-sm-40">


        
   

    {{--============================== start trashed data ============================== --}}

    @if (isset($trashdata) && count($trashdata) > 0)
    <div class="card pd-20 pd-sm-40 d-none">
    <h4>Restore Deleted Route   </h4>
    <div class="table-responsive mg-t-25">
    <table class="table table-hover table-bordered mg-b-0">
      <thead class="bg-danger">
        <tr>

      <th>S.no</th>
          <th class="wd-20p">Route Name</th>
          <th class="wd-40p">Route Link</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>
      
        @foreach($trashdata as $keys => $trashed)
        <tr>
      
          <td>   
        {{$keys+1}}
              </td>
              

          <td> {{isset($trashed->route_name) ? str_limit($trashed->route_name , $limit=20 ) : "NA" }}</td>
          <td> {!!str_limit($trashed->route_link, $limit=40 ) !!}</td>

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
    {{--============================== end trashed data ============================== --}}
        </div><!-- card -->
        
      </div><!-- sl-pagebody -->


      <!-- modal -->
</div>


{{-- ================== --}}
