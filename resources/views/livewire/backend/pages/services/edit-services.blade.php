<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Update Services page')}} </h5>
      
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> 
            <a href="{{route('view_services')}}" class="btn btn-teal active mg-b-10"  >Back</a>
        </h6>
        <form  wire:submit.prevent="updateServiceSection">
             <div class="form-layout">
               <div class="row mg-b-25">

                <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">Select Page Category: <span class="tx-danger">*</span></label>
                      <select class="form-control" data-placeholder="Choose Category" wire:model="page_cat_id" aria-hidden="true">
                        <option label="Choose Category"></option>
                        @if(isset($pageCategory) && count($pageCategory )> 0)
                        @foreach($pageCategory as $key => $getcat)

                        <option value="{{$getcat->id}}">{{ucwords($getcat->page_cat_name)}}</option>

                        @endforeach
                        @endif
                   

                      </select>
                     @error('page_cat_id')<span class="text-danger"> {{$message}}</span>  @enderror  

                    </div>
                </div>     

                 <div class="col-lg-6">
                   <div class="form-group">
                     <label class="form-control-label">Heading: <span class="tx-danger">*</span></label>
                     <input class="form-control" type="text" wire:model="heading"  placeholder="Section Heading">
                     @error('heading')<span class="text-danger"> {{$message}}</span>  @enderror  
                 </div>
                 </div><!-- col-4 -->
                 <div class="col-lg-12">
                   <div class="form-group">
                     <label class="form-control-label"> Title : <span class="tx-danger">*</span></label>
                     <input class="form-control" type="text" wire:model="title"  placeholder="Section Title ">
                     @error('title')<span class="text-danger"> {{$message}}</span>  @enderror  
                   
                 </div>
                 </div><!-- col-4 -->
           
                 <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Section Paragraph 1: <span class="tx-danger">*</span></label>
                      <textarea class="form-control" rows="5"   wire:model="para1" placeholder="Add Section paragraph 1... "></textarea>
                      @error('para1')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Section Paragraph 2: <span class="tx-danger">*</span></label>
                      <textarea class="form-control" rows="5"   wire:model="para2" placeholder="Add Section paragraph 2..."></textarea>
                      @error('para2')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->

               
                  <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Section Paragraph 3: <span class="tx-danger">*</span></label>
                      <textarea class="form-control" rows="5"  wire:model="para3" placeholder="Add Section paragraph 3..."></textarea>
                      @error('para3')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->


                  <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Section Paragraph 4: <span class="tx-danger">*</span></label>
                      <textarea class="form-control" rows="5"  wire:model="para4" placeholder="Add Section paragraph 4... "></textarea>
                      @error('para4')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->


                  <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Section Paragraph 5: <span class="tx-danger">*</span></label>
                      <textarea class="form-control" rows="5"  wire:model="para5" placeholder="Add Section paragraph 5 optional ... "></textarea>
                      @error('para5')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->

           
                 
                  <div class="col-lg-12">
                    <label class="form-control-label"> Update Banner Image For Desktop:   <span class="tx-danger"> *</span></label><br>
                      <div class="row croper_sec">
                        <div class="col-md-12">
                          <div class="image_area">
                            <form method="post">
                              <label for="upload_service_img1" class="cabinet uploadStyle ">  
                                <img src="{{(isset($this->sec_image)) 
                                  ? asset('storage/services-section/'.$this->sec_image):asset('no_image.jpg')}}" id="uploaded_service_img1"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                <span>Upload Image</span>                          
                                <input type="file" name="image" class="image" id="upload_service_img1"  />
                              </label>
                            </form>
                          </div>
                        </div>
       
      
                        {{-- start large model  --}}
                        <div id="modal1" class="modal fade" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content tx-size-sm">
                              <div class="modal-header pd-x-20">
                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Crop Image Before Upload For Desktop</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body pd-20">
                                <div class="img-container">
                                  <div class="row">
                                      <div class="col-md-8">
                                          <img src="" id="updatesample_image1" />
                                      </div>
                                      <div class="col-md-4 pointerNone">
                                          <div class="preview"></div>
                                      </div>
                                  </div>
                              </div>
                              </div><!-- modal-body -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal" > Cancel</button>
                                <button type="button" class="btn btn-info pd-x-20"  id="crop">Crop</button>
                              </div>
                            </div>
                          </div><!-- modal-dialog -->
                        </div><!-- modal -->
                        {{-- end large model  --}}                     
                    </div>
                  </div>
                      
                   {{-- tablet --}}
                   <div class="col-lg-12">
                    <label class="form-control-label">Update Banner Image For Tablet:   <span class="tx-danger"> *</span></label><br>
                      <div class="row croper_sec">
                        <div class="col-md-12">
                          <div class="image_area">
                            <form method="post">
                              <label for="upload_service_img2" class="cabinet uploadStyle ">  
                                <img src="{{(isset($this->tabletBanner)) 
                                  ? asset('storage/services-section/'.$this->tabletBanner):asset('no_image.jpg')}}" id="uploaded_service_img2"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                <span>Upload Image</span>                          
                                <input type="file" name="image" class="image" id="upload_service_img2"  />
                              </label>
                            </form>
                          </div>
                        </div>
              
      
                        {{-- start large model  --}}
                        <div id="modal2" class="modal fade" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content tx-size-sm">
                              <div class="modal-header pd-x-20">
                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Crop Image Before Upload For Tablet</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body pd-20">
                                <div class="img-container">
                                  <div class="row">
                                      <div class="col-md-8">
                                          <img src="" id="sample_service_img2" />
                                      </div>
                                      <div class="col-md-4 pointerNone">
                                          <div class="preview"></div>
                                      </div>
                                  </div>
                              </div>
                              </div><!-- modal-body -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal" > Cancel</button>
                                <button type="button" class="btn btn-info pd-x-20"  id="crop2">Crop</button>
                              </div>
                            </div>
                          </div><!-- modal-dialog -->
                        </div><!-- modal -->
                        {{-- end large model  --}}                     
                    </div>
                  </div>
                   {{-- tablet  --}}
      
                  {{-- For mobile  --}}
                  <div class="col-lg-12">
                    <label class="form-control-label">Update Banner Image For Mobile:   <span class="tx-danger"> *</span></label><br>
                      <div class="row croper_sec">
                        <div class="col-md-12">
                          <div class="image_area">
                            <form method="post">
                              <label for="upload_image3" class="cabinet uploadStyle ">  
                                <img src="{{(isset($this->mobileBanner)) 
                                  ? asset('storage/services-section/'.$this->mobileBanner):asset('no_image.jpg')}}" id="uploaded_service_img3"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                <span>Upload Image</span>                          
                                <input type="file" name="image" class="image" id="upload_image3"  />
                              </label>
                            </form>
                          </div>
                        </div>
               
      
                        {{-- start large model  --}}
                        <div id="modal3" class="modal fade" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content tx-size-sm">
                              <div class="modal-header pd-x-20">
                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Crop Image Before Upload For Mobile</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body pd-20">
                                <div class="img-container">
                                  <div class="row">
                                      <div class="col-md-8">
                                          <img src="" id="sample_image3" />
                                      </div>
                                      <div class="col-md-4 pointerNone">
                                          <div class="preview"></div>
                                      </div>
                                  </div>
                              </div>
                              </div><!-- modal-body -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal" > Cancel</button>
                                <button type="button" class="btn btn-info pd-x-20"  id="crop3">Crop</button>
                              </div>
                            </div>
                          </div><!-- modal-dialog -->
                        </div><!-- modal -->
                        {{-- end large model  --}}                     
                    </div>
                  </div>
                  {{-- for mobile  --}}
          
     
               </div><!-- row -->
     
               <div class="form-layout-footer">
                 <button class="btn btn-info mg-r-5" type="submit" wire:loading.attr="disabled">Update Service Section</button>
                <div  wire:loading class="pd-x-20">
                    <img src="https://paladins-draft.com/img/circle_loading.gif" width="64px" height="64" >
                </div>
             
               </div><!-- form-layout-footer -->
             </div><!-- form-layout -->
      </form>
       </div> 
       {{-- card end  --}}
    </div>
    <script>
      $(document).ready(function(){
        var $modal = $('#modal1');
        var image = document.getElementById('updatesample_image1');
        var cropper;
      
      
        $('#upload_service_img1').change(function(event){
            var files = event.target.files;
            var done = function (url) {
                image.src = url;
                $modal.modal('show');
            };
        
      
            if (files && files.length > 0)
            {
      
                  reader = new FileReader();
                  reader.onload = function (event) {
                      done(reader.result);
                  };
                  reader.readAsDataURL(files[0]);
                
            }
        });
      
        $modal.on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
              // aspectRatio: 1,
              viewMode: 3,
              autoCropArea : 1,
              fillColor: '#fff',
              preview: '.preview',
            });
          
        }).on('hidden.bs.modal', function() {
              cropper.destroy();
              cropper = null;
        });
      
        $("#crop").click(function(){
            canvas = cropper.getCroppedCanvas({
                // width: 400,
                // height: 400,
                imageSmoothingEnabled: true,
                imageSmoothingQuality: 'high',
            });
  
            canvas.toBlob(function(blob) {
                //url = URL.createObjectURL(blob);
                var reader = new FileReader();
                  reader.readAsDataURL(blob); 
                  reader.onloadend = function() {
                    var base64data = reader.result;  
  
              Livewire.emit('updateServicesImg',  base64data)
        
              $modal.modal('hide');
              $('#uploaded_service_img1').attr('src', base64data);
              
                
                  }
            });
          });
        
      });
    </script>
    <script>
      $(document).ready(function(){
        var $modal = $('#modal2');
        var image = document.getElementById('sample_service_img2');
        var cropper;
      
      
        $('#upload_service_img2').change(function(event){
            var files = event.target.files;
            var done = function (url) {
                image.src = url;
                $modal.modal('show');
            };
       
      
            if (files && files.length > 0)
            {
      
                  reader = new FileReader();
                  reader.onload = function (event) {
                      done(reader.result);
                  };
                  reader.readAsDataURL(files[0]);
               
            }
        });
      
        $modal.on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
              // aspectRatio: 1,
              viewMode: 3,
              autoCropArea : 1,
              fillColor: '#fff',
              preview: '.preview',
            });
          
        }).on('hidden.bs.modal', function() {
             cropper.destroy();
             cropper = null;
        });
      
        $("#crop2").click(function(){
            canvas = cropper.getCroppedCanvas({
                // width: 400,
                // height: 400,
                imageSmoothingEnabled: true,
                imageSmoothingQuality: 'high',
            });
  
            canvas.toBlob(function(blob) {
                //url = URL.createObjectURL(blob);
                var reader = new FileReader();
                 reader.readAsDataURL(blob); 
                 reader.onloadend = function() {
                    var base64data = reader.result;  
  
              Livewire.emit('updateServicesImg2',  base64data)
        
              $modal.modal('hide');
              $('#uploaded_service_img2').attr('src', base64data);
              
                
                 }
            });
          });
        
      });
    </script>
    <script>
      $(document).ready(function(){
        var $modal = $('#modal3');
        var image = document.getElementById('sample_image3');
        var cropper;
      
      
        $('#upload_image3').change(function(event){
            var files = event.target.files;
            var done = function (url) {
                image.src = url;
                $modal.modal('show');
            };
       
      
            if (files && files.length > 0)
            {
      
                  reader = new FileReader();
                  reader.onload = function (event) {
                      done(reader.result);
                  };
                  reader.readAsDataURL(files[0]);
               
            }
        });
      
        $modal.on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
              // aspectRatio: 1,
              viewMode: 3,
              autoCropArea : 1,
              fillColor: '#fff',
              preview: '.preview',
            });
          
        }).on('hidden.bs.modal', function() {
             cropper.destroy();
             cropper = null;
        });
      
        $("#crop3").click(function(){
            canvas = cropper.getCroppedCanvas({
                // width: 400,
                // height: 400,
                imageSmoothingEnabled: true,
                imageSmoothingQuality: 'high',
            });
  
            canvas.toBlob(function(blob) {
                //url = URL.createObjectURL(blob);
                var reader = new FileReader();
                 reader.readAsDataURL(blob); 
                 reader.onloadend = function() {
                    var base64data = reader.result;  
  
              Livewire.emit('updateServicesImg3',  base64data)
        
              $modal.modal('hide');
              $('#uploaded_service_img3').attr('src', base64data);
              
                
                 }
            });
          });
        
      });
    </script>
</div>
