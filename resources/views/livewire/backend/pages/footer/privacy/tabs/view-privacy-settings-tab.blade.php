<div>
    {{-- The whole world belongs to you. --}}
    <div class="sl-pagebody tx-bold">
        <div class="sl-page-title">
          <h5>Manage Privacy Settings Tabs : 
            <span class="float-right"> Total : {{isset($privacyTab) ?count($privacyTab)  : "NA" }}</span>
          </h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title"> <a href="{{route('add_privacy_Tabs')}}" class="btn btn-teal active mg-b-10">
                  ADD </a></h6>
  
            <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
              <div class="card">
        
  
                <table class="table table-hover table-bordered mg-b-0">
                  <thead class="bg-info">
                    <tr>
                      <th width="80%">Paragraphs</th>
                      <th  width="20%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(isset($privacyTab))
                         @foreach($privacyTab as $keys => $row)
                            <tr>
                               
                              <td> {{$keys+1}}  {{$row->list}}  </td>
                              <td>    

                                <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >
                                <i class="fa fa-edit"></i></a>
                                @if($row->status == 1 )
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})">
                                <i class="fa fa-thumbs-down"></i>
                                @else
                                  <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">
                                  <i class="fa fa-thumbs-up"></i>
                                @endif
                                  <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >
                                    <i class="fa fa-trash"></i></a>
                              </td>
                            </tr>
                        
                        @endforeach
                     @endif
                       @if(isset($trashdata)  && count($trashdata) > 0 )
                       <tr><th>Restore</th></tr>
                        @foreach($trashdata as $val)
                          <tr>
                              <td> {{$val->list}}  </td>
                              <td>     
                                <a href="javascript:void(0)"  wire:click.prevent="restore({{ $val->id}})" class="btn btn-sm btn-success" title="Restore"  >
                                <i class="fa fa-trash"></i></a>
                     
                                <a href="javascript:void(0)"  wire:click.prevent="fulleDelete({{ $val->id}})" class="btn btn-sm btn-danger" title="Full Delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                                <i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                       @endforeach
                      @endif
                  </tbody>
                </table>
              </div>
       
 
            </div><!-- accordion -->
          </div><!-- card -->

    </div>
</div>
