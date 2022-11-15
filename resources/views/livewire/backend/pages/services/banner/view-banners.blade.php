<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Manage Services Pages Banner  </h5>
    
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                   Add Manage Services Pages Banner
                  </a>
                </h6>
              </div><!-- card-header -->
      
              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body">
                  <form  wire:submit.prevent="savebottombanner">
                    <div class="form-layout">
                      <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force" wire:ignore>
                              <label class="form-control-label"> Section Page Name : <span class="tx-danger">*</span></label>
                              <select  class="form-control" wire:model="pageCatId" >
                                <option selected class="form-control">Choose Page Category </option>
                                @if(isset($getPCategory))
                                    @foreach($getPCategory as $category )
                                        <option value="{{$category->id}}"  class="form-control">{{$category->page_cat_name}}</option>
                                    @endforeach
                                @endif
                              </select>
                              
                            </div>
                            @error('pageCatId')<span class="tx-danger"> {{$message}}</span>  @enderror  
                        </div><!-- col-4 -->


                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label"> Banner Text : <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control"  wire:model="heading" placeholder="Banner text" >
                                @error('heading')<span class="tx-danger"> {{$message}}</span>  @enderror  
                          </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                              <label class="form-control-label">Choose Banner image : <span class="tx-danger">*</span></label><br>
                              <label class="custom-file">
                                <input type="file"  class="custom-file-input" wire:model="banner" width="100"  >
                                <span class="custom-file-control"></span>
                              </label>
                            </div>
                            @error('banner')<span class="text-danger"> {{$message}}</span>  @enderror  <br>
                            <img class="img-fluid " src="{{isset($banner)?  $banner->temporaryUrl() :asset('no_image.jpg')}}" width="200" >
                           
                          
                        
    
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
                  <th class="wd-15p">Banner Image </th>
                  <th class="wd-15p">Page Category </th>
                  <th class="wd-15p"> Heading </th>

                  <th class="wd-10p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @if (isset($allBanners) && count($allBanners) > 0)
                @foreach($allBanners as $key => $banner)
                  <tr>
                    <td>{{ $key +1}} </td>
                    <td>
                      <img src="{{(!empty($banner->banner)) ? asset('storage/services-banner/'.$banner->banner):asset('no_image.jpg')}}" alt="..." style=" width:100%">
                    </td>
                    <td>{{isset($banner->page_cat_name) ? $banner->page_cat_name : "NA" }}</td>
                    <td>{!! isset($banner->heading) ?str_limit($banner->heading, $limit=15 ) : "NA" !!} </td>
                    <td>
                            @if($banner->status == 1 )
                            <span class="badge badge-success">Active</span>
                            @else
                            <span class="badge badge-danger">Inactive</span>
                            @endif
                    </td>
                    <td>  
                        <a href="{{route('edit_services_banner',$banner->id )}}" class="btn btn-sm btn-info" title="edit" >
                          <i class="fa fa-edit"></i></a>

                        <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show" data-toggle="modal" data-target="#modaldemo{{$banner->id}}">
                          <i class="fa fa-eye"></i></a>

                          @if($banner->status == 1 )
                          <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$banner->id}})">
                          <i class="fa fa-thumbs-down"></i>
                          @else
                            <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$banner->id}})">
                            <i class="fa fa-thumbs-up"></i>
                          @endif
                        <a href="javascript:void(0)"  wire:click.prevent="delete({{$banner->id}})" class="btn btn-sm btn-danger" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                          <i class="fa fa-trash"></i></a>

                          {{-- Modal  --}}
                          
                          {{-- end modal  --}}

                    </td>

                  </tr>

     <!-- LARGE MODAL -->
     <div id="modaldemo{{$banner->id}}" class="modal fade">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Banner Preview</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-20">
            <h6 class=" lh-3 mg-b-20"><span class="text-primary">Page Category :</span> {{isset($banner->page_cat_name) ? $banner->page_cat_name : "NA" }} </h6>
            <h6 class=" lh-3 mg-b-20"><span class="text-primary">Banner Heading :</span> {{isset($banner->heading) ? $banner->heading : "NA" }}</h6>
        
            <h6 class=" lh-3 mg-b-20"><span class="text-primary">Banner Status :</span> 
            
              @if($banner->status == 1 )
              <span class="badge badge-success">Active</span>
              @else
              <span class="badge badge-danger">Inactive</span>
              @endif
            </h6>
         
     
             <hr> 
            <img width="300" class="img-fluid" src="{{(!empty($banner->banner))  
              ? asset('storage/services-banner/'.$banner->banner):asset('no_image.jpg')}}" alt="..." style="width:100" >
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
