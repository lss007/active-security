<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Update Services Pages Banner  </h5>
    
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <h6 class="card-body-title"> 
                <a href="{{route('view_services_banner')}}" class="btn btn-teal active mg-b-10">Back</a>
            </h6>
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                  UpdateServices Pages Banner
                  </a>
                </h6>
              </div><!-- card-header -->
      
              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body">
                  <form  wire:submit.prevent="updatebottombanner">
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
                                <input type="file"  class="custom-file-input" wire:model="newBaner" width="100"  >
                                <span class="custom-file-control"></span>
                              </label>
                            </div>
                            <img class="img-fluid {{isset($newBaner) ? 'd-none' :  ''}}" src="{{(!empty($this->banner)) 
                              ? asset('storage/services-banner/'.$this->banner):asset('no_image.jpg')}}" style="width:200px;"  >
                            @if(isset($newBaner))
                            <img  src="{{$newBaner->temporaryUrl()}}" style="width:200px;" >
                          @endif
                        
                           @error('banner')<span class="text-danger"> {{$message}}</span>  @enderror  <br>
                           
                          
                        
    
                          </div><!-- col-4 -->
        
                      </div><!-- row -->
          
                      <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5" type="submit" wire:loading.attr="disabled">Update Banner</button>
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
           

        </div><!-- card -->
        
      </div><!-- sl-pagebody -->


      <!-- modal -->
</div>


{{-- ================== --}}
