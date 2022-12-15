<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Manage Footer and Top Navbar Section logo')}}
            <span class="float-right">Total :{{isset($get_logo) ? count($get_logo): "NA" }}</span>
          </h5>
    
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                   {{__('dashboard.Manage or Add Footer Logo')}}
                  </a>
                </h6>
              </div><!-- card-header -->
      
              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body">
                  <form  wire:submit.prevent="saveFooterlogo">
                    <div class="form-layout">
                      <div class="row mg-b-25">
               
                       
                
                        <div class="col-lg-6" wire:ignore>
                            <div class="form-group">
                              <label class="form-control-label"> Section Name : <span class="tx-danger">*</span></label>
                              <select  class="form-control " wire:model="name" >
                                <option selected class="form-control" disabled>Choose Category </option>
                                <option value="navbar"  class="form-control">Navbar</option>
                                <option value="footer" class="form-control">Footer</option>
                              </select>
                              @error('name')<span class="text-danger"> {{$message}}</span>  @enderror  
                            
                          </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                              <label class="form-control-label">Choose Logo image : <span class="tx-danger">*</span></label><br>
                              <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" wire:model="logo_img" width="100" multiple >
                                <span class="custom-file-control"></span>
                              </label>
                            </div>
                            <img class="img-fluid  {{isset($logo_img) ? 'd-none' :  ''}}" src="{{asset('no_image.jpg')}}" width="100" >
                           
                              @if(isset($logo_img))
                              @foreach($logo_img as $val)
                              <img  src="{{$val->temporaryUrl()}}" width="100" > 
                              @endforeach
                              @endif
                        
    
                              @error('logo_img')<span class="text-danger"> {{$message}}</span>  @enderror  
                        </div><!-- col-4 -->
                
                      
                
                        
                
                 
                
                      </div><!-- row -->
                
                      <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5" type="submit" wire:loading.attr="disabled">Publish</button>
                       <div  wire:loading class="pd-x-20">
                           <img src="https://paladins-draft.com/img/circle_loading.gif" width="64px" height="64" >
                       </div>
                    
                      </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
        
              
      
      
      
                </div>
              </div>
            </div>
          
      
          </div><!-- accordion -->


    {{-- ========================================================================================== --}}
           
    
     

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">S.No </th>
                  <th class="wd-15p">Image </th>
                  <th class="wd-15p">Category </th>
        
                  <th class="wd-10p">Status</th>
                  <th class="wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
                @if (isset($get_logo) && count($get_logo) > 0)
                @foreach($get_logo as $key => $row)
                  <tr>
                    <td>{{ $key +1}} </td>
                    <td>
                      <img src="{{(!empty($row->logo_img)) ? asset('storage/footer-logo/'.$row->logo_img):asset('no_image.jpg')}}" alt="..." style="height: 10%; width:30%">
                    </td>
                    <td class="tx-bold">{{ ucwords($row->name)}} </td>
                    <td>
                            @if($row->status == 1 )
                            <span class="badge badge-success tx-bold">Active</span>
                            @else
                            <span class="badge badge-danger tx-bold">Inactive</span>
                            @endif
                    </td>
                    <td>  
                        <a href="{{route('edit_footer_logos',$row->id )}}" class="btn btn-sm btn-info" title="edit" >
                          <i class="fa fa-edit"></i></a>

                        <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show" data-toggle="modal" data-target="#modaldemo{{$row->id}}">
                          <i class="fa fa-eye"></i></a>

                          @if($row->status == 1 )
                          <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})">
                          <i class="fa fa-thumbs-down"></i>
                          @else
                            <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">
                            <i class="fa fa-thumbs-up"></i>
                          @endif
                        <a href="javascript:void(0)"  wire:click.prevent="delete({{$row->id}})" class="btn btn-sm btn-danger" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                          <i class="fa fa-trash"></i></a>

                          {{-- Modal  --}}
                          
                          {{-- end modal  --}}

                    </td>

                  </tr>

     <!-- LARGE MODAL -->
     <div id="modaldemo{{$row->id}}" class="modal fade">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Image Preview</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-20">
            <h6 class=" lh-3 mg-b-20"><span class="text-primary">Section Name :</span> {{isset($row->name) ? $row->name : "NA" }}</h6>
        
         
     
             <hr> 
            <img width="300" class="img-fluid" src="{{(!empty($row->logo_img))  
              ? asset('storage/footer-logo/'.$row->logo_img):asset('no_image.jpg')}}" alt="..." style="width:200px" >
          </div><!-- modal-body -->
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

@endforeach
@else
  
@endif
                

              </tbody>
            </table>


            @if (isset($trashdata) && count($trashdata) > 0)
            <div class="card pd-20 pd-sm-40">
              <h4>Restore Deleted Logos   </h4>
              <div class="table-responsive mg-t-25">
              <table class="table table-hover table-bordered mg-b-0">
                <thead class="bg-danger">
                  <tr>
          
                    <th class="wd-15p">Image</th>
              
                    <th>Action</th>
          
                  </tr>
                </thead>
                <tbody>
                
                  @foreach($trashdata as $keys => $trashed)
                  <tr>
                
                    <td>   
                      <img width="300" class="img-fluid" src="{{(!empty($trashed->logo_img))  
                      ? asset('storage/footer-logo/'.$trashed->logo_img):asset('no_image.jpg')}}" alt="..." >
                        </td>
                 
          
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
          </div><!-- table-wrapper -->
        </div><!-- card -->
        
      </div><!-- sl-pagebody -->


      <!-- modal -->
</div>


{{-- ================== --}}
