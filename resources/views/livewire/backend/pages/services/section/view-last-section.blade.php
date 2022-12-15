<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Manage Optimal security Section')}} 
            <span class="float-right"> Total :{{isset($getServices) ?count($getServices)  : "NA" }}</span>
          </h5>
    
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
   
                <h6 class="card-body-title">      
                    <a href="{{route('add_last_footer_section')}}" class="btn btn-teal active mg-b-10">{{__('dashboard.Add Section')}} </a>
                </h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-5p">S.No </th>
                  <th class="wd-15p">Heading  </th>             
                  <th class="wd-15p">List  </th>
                  <th class="wd-10p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @if (isset($getServices) && count($getServices) > 0)
                @foreach($getServices as $key => $service)
                  <tr>
                    <td>{{ $key +1}} </td>
                   
                    <td class="tx-bold">{{isset($service->heading) ?  str_limit($service->heading, $limit=15 ) : "NA" }}</td>
                

          

                    <td class="tx-bold">
                        
                        {!! isset($service->list1) ? str_limit($service->list1, $limit=15 ) : "NA" !!} 
                    
                    </td>
                    <td class="tx-bold">
                            @if($service->status == 1 )
                            <span class="badge badge-success">Active</span>
                            @else
                            <span class="badge badge-danger">Inactive</span>
                            @endif
                    </td>
                    <td>  
                        <a href="{{route('edit_last_section',$service->id)}}" class="btn btn-sm btn-info" title="edit" >
                          <i class="fa fa-edit"></i></a>

                        <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show" data-toggle="modal" data-target="#modaldemo{{$service->id}}">
                          <i class="fa fa-eye"></i></a>

                          @if($service->status == 1 )
                          <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$service->id}})">
                          <i class="fa fa-thumbs-down"></i>
                          @else
                            <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$service->id}})">
                            <i class="fa fa-thumbs-up"></i>
                          @endif
                        <a href="javascript:void(0)"  wire:click.prevent="delete({{$service->id}})" class="btn btn-sm btn-danger" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                          <i class="fa fa-trash"></i></a>

                          {{-- Modal  --}}
                          
                          {{-- end modal  --}}

                    </td>

                  </tr>

     <!-- LARGE MODAL -->
     <div id="modaldemo{{$service->id}}" class="modal fade">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Section Preview</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-20">
            
            <h6 class=" lh-3 mg-b-20"><span class="text-primary"> Heading :</span> {{isset($service->heading) ? $service->heading : "NA" }}</h6>
            <h6 class=" lh-3 mg-b-20"><span class="text-primary"> list 1 :</span> {{isset($service->list1) ? $service->list1 : "NA" }}</h6>
            <h6 class=" lh-3 mg-b-20"><span class="text-primary"> list 2 :</span> {{isset($service->list2) ? $service->list2 : "NA" }}</h6>
            <h6 class=" lh-3 mg-b-20"><span class="text-primary"> list 3 :</span> {{isset($service->list3) ? $service->list3 : "NA" }}</h6>
            <h6 class=" lh-3 mg-b-20"><span class="text-primary"> list 4 :</span> {{isset($service->list4) ? $service->list4 : "NA" }}</h6>

            <h6 class=" lh-3 mg-b-20"><span class="text-primary"> Link  :</span> {{isset($service->link) ? $service->link : "NA" }}</h6>

           
         
            <h6 class=" lh-3 mg-b-20"><span class="text-primary"> Status :</span> 
            
              @if($service->status == 1 )
              <span class="badge badge-success">Active</span>
              @else
              <span class="badge badge-danger">Inactive</span>
              @endif
            </h6>
         

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
        </div><!-- card -->
        
      </div><!-- sl-pagebody -->


      <!-- modal -->
</div>


{{-- ================== --}}
