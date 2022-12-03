<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Update Home Clients')}} </h5>
      
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> 
            <a href="{{route('viewHomeclients')}}" class="btn btn-teal active mg-b-10"  >Back</a>
        </h6>
        <form  wire:submit.prevent="saveHomeclients">
            <div class="form-layout">
              <div class="row mg-b-25">
                {{-- <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label"> Title: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" wire:model="title"  placeholder="Main Title">
                    @error('title')<span class="text-danger"> {{$message}}</span>  @enderror  
                </div>
                </div><!-- col-4 --> --}}
          
        
        
            
                  {{-- <div class="col-lg-4">
                   <div class="form-group">
                     <label class="form-control-label"> link: <span class="tx-danger">*</span></label>
                     <input class="form-control" type="url" wire:model="button_link"  placeholder="Button link">
                     @error('button_link')<span class="text-danger"> {{$message}}</span>  @enderror  
                  
                   </div>
                 </div><!-- col-4 --> --}}
                 <div class="col-lg-12">
                  <label class="form-control-label"> Client  Image:   <span class="tx-danger">*</span></label><br>
                  <div class="row croper_sec">
            
                      <div class="col-md-12">
                        <div class="image_area">
                          <form method="post">
                            <label for="addClientImg" class="cabinet uploadStyle ">  
                              <img src="" id="uploaded_image"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                              <span>Upload Image</span>                          
                              <input type="file" name="image" class="image" id="addClientImg"  />
                            </label>
                          </form>
                        </div>
                      </div>

                     @error('getSectionCropedImg')<span class="text-danger"> {{$message}}</span>  @enderror  

                      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel">Crop Image Before Upload</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="img-container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <img src="" id="clientImages" />
                                        </div>
                                        <div class="col-md-4">
                                            <div class="preview"></div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" id="crop">Crop</button>
                              </div>
                          </div>
                        </div>
                    </div>			
                  </div>
             
                  @error('cropedImg')<span class="text-danger"> {{$message}}</span>  @enderror  
              
             
            </div><!-- col-12 -->
        
              
        
                
      
         
        
              </div><!-- row -->
        
              <div class="form-layout-footer">
                <button class="btn btn-info mg-r-5" type="submit" wire:loading.attr="disabled">Update</button>
               <div  wire:loading class="pd-x-20">
                   <img src="https://paladins-draft.com/img/circle_loading.gif" width="64px" height="64" >
               </div>
            
              </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
       </div> 
       {{-- card end  --}}
    </div>
</div>



