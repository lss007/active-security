<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Update Social Media  </h5>
        </div><!-- sl-page-title -->
    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> 
            <a href="{{route('view_social_media')}}"  class="btn btn-teal active mg-b-10" >
                Back
            </a>
        </h6>
       <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h6 class="mg-b-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                Update Social Media Link and logo 
              </a>
            </h6>
          </div><!-- card-header -->
          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
                <form  wire:submit.prevent="updateSocialMedia">
                    <div class="form-layout">
                      <div class="row mg-b-25">
              
                        <div class="col-lg-12 {{$category == 'custom' ? 'd-none' : ''}} " >
                          <div class="form-group">
                            <label class="form-control-label">Category : <span class="tx-danger">*</span></label>
                            <select class="form-control" data-placeholder="Choose Category" wire:model="category"    aria-hidden="true">
                             @if(isset($get_category))
                                @foreach($get_category as $cat)
                                  <option value="{{$cat->name}}">{{$cat->name}}</option>
                                 @endforeach
                              @endif
                                {{-- <option value="custom">Custom</option> --}}

                              </select>
                            </div>
                            @error('category')<span class="text-danger"> {{$message}}</span>  @enderror  
                        </div><!-- col-4 -->
                        @if($category == 'custom'  )
                        <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label">Create custom  : <span class="tx-danger">*</span></label>
                              <input class="form-control" type="text" wire:model="custom_category"  placeholder="create custom category ">
                              @error('custom_category')<span class="text-danger"> {{$message}}</span>  @enderror  
                          </div>
                          </div><!-- col-4 -->
                       @endif
                   
                         <div class="col-lg-12">
                           <div class="form-group">
                             <label class="form-control-label"> Link : <span class="tx-danger">*</span></label>
                             <input class="form-control" type="url" wire:model="link"  placeholder="Social link ">
                             @error('link')<span class="text-danger"> {{$message}}</span>  @enderror  
                           
                         </div>
                         </div><!-- col-4 -->
       
                         <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label"> Icon :  <span class="tx-success">optional</span></label>
                              <input class="form-control" type="text" wire:model="icon"  placeholder="Social icon ">
                              @error('icon')<span class="text-danger"> {{$message}}</span>  @enderror  
                            
                          </div>
                          </div><!-- col-4 -->
       
                         <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                              <label class="form-control-label">Social Logo image : <span class="tx-danger">*</span></label><br>
                              <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" wire:model="newLogo" width="100" >
                                <span class="custom-file-control"></span>
                              </label>
                            </div>
                            <img class="img-fluid {{isset($newLogo) ? 'd-none' :  ''}}" src="{{(!empty($this->logo)) 
                              ? asset('storage/social-logo/'.$this->logo):asset('no_image.jpg')}}" style="width:30px;"  >
                            @if(isset($newLogo))
                            <img  src="{{$newLogo->temporaryUrl()}}" style="width:30px;" >
                          @endif
                              @error('newLogo')<span class="text-danger"> {{$message}}</span>  @enderror  
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
{{-- ========================================================================================== --}}
       

      </div><!-- accordion -->
    </div> 
       {{-- card end  --}}
    </div>
</div>
