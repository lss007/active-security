<div>
    {{-- Success is as dangerous as failure. --}}


    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Home page Banner</h5>
          <p>Add  Home page Banner Image or text  </p>
        </div><!-- sl-page-title -->
   @if ($errors->any())
       @foreach ($errors->all() as $error)
    
            <div class="alert alert-danger" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center justify-content-start">
    
                <i class="icon ion-ios-close alert-icon tx-24"></i>
                <span><strong>Oh snap!</strong>  {{ucwords($error)}}.</span>
              </div><!-- d-flex -->
            </div><!-- alert -->
       @endforeach
    @endif

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">  
            <a href="{{route('viewHomebanner')}}" class="btn btn-teal active mg-b-10"  >Back</a>
        </h6>
      <form  wire:submit.prevent="saveHomeBanner">
             <div class="form-layout">
               <div class="row mg-b-25">
                 <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Banner Main Heading: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" wire:model="Heading"  placeholder="Banner Heading">
                        @error('Heading')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>
                 </div><!-- col-4 -->
                 <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Banner Title: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" wire:model="Title"  placeholder="Banner Title">
                        @error('Title')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>
                </div><!-- col-4 -->
                  <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Banner Paragraph: <span class="tx-danger">*</span></label>
                      <textarea class="form-control"   wire:model="BannerParagaph" placeholder="Banner Paragraph"></textarea>
                      @error('BannerParagaph')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->
        
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label class="form-control-label">Button text: </label>
                       <input class="form-control" type="text" wire:model="buttonText"  placeholder="Button text">
                       @error('buttonText')<span class="text-danger"> {{$message}}</span>  @enderror  
                    
                     </div>
                   </div><!-- col-4 -->
                   <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">Button link: </label>
                      <input class="form-control" type="url" wire:model="button_link"  placeholder="https://www.example.com/  ">
                      @error('button_link')<span class="text-danger"> {{$message}}</span>  @enderror  
                   
                    </div>
                   </div><!-- col-4 -->
            
            <div class="col-lg-12">
              <label class="form-control-label"> Banner Image For Desktop:   <span class="tx-danger"> *</span></label><br>
                <div class="row croper_sec">
                  <div class="col-md-12">
                    <div class="image_area">
                      <form method="post">
                        <label for="upload_image1" class="cabinet uploadStyle ">  
                          <img src="" id="uploaded_image1"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                          <span>Upload Image</span>                          
                          <input type="file" name="image" class="image" id="upload_image1"  />
                        </label>
                      </form>
                    </div>
                  </div>
              @error('cropedImg')<span class="text-danger"> {{$message}}</span>  @enderror  

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
                                    <img src="" id="sample_image1" />
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
              <label class="form-control-label"> Banner Image For Tablet:   <span class="tx-danger"> *</span></label><br>
                <div class="row croper_sec">
                  <div class="col-md-12">
                    <div class="image_area">
                      <form method="post">
                        <label for="upload_image2" class="cabinet uploadStyle ">  
                          <img src="" id="uploaded_image2"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                          <span>Upload Image</span>                          
                          <input type="file" name="image" class="image" id="upload_image2"  />
                        </label>
                      </form>
                    </div>
                  </div>
              @error('cropedImg2')<span class="text-danger"> {{$message}}</span>  @enderror  

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
                                    <img src="" id="sample_image2" />
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
              <label class="form-control-label"> Banner Image For Mobile:   <span class="tx-danger"> *</span></label><br>
                <div class="row croper_sec">
                  <div class="col-md-12">
                    <div class="image_area">
                      <form method="post">
                        <label for="upload_image3" class="cabinet uploadStyle ">  
                          <img src="" id="uploaded_image3"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                          <span>Upload Image</span>                          
                          <input type="file" name="image" class="image" id="upload_image3"  />
                        </label>
                      </form>
                    </div>
                  </div>
              @error('cropedImg3')<span class="text-danger"> {{$message}}</span>  @enderror  

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



                  <!-- col-12 -->

                    {{--  
                       <!--   old model -->
                          <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header pd-y-20 pd-x-25">
                          
                                  <h5 class="modal-title tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="modalLabel">Crop Image Before Upload</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <div class="modal-body pd-25">
                           
                                  <div class="img-container">
                                      <div class="row">
                                          <div class="col-md-8">
                                              <img src="" id="sample_image" />
                                          </div>
                                          <div class="col-md-4 ">
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
                       --}}
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
       {{-- card end  --}}
    </div>
  <script>
    $(document).ready(function(){
      var $modal = $('#modal1');
      var image = document.getElementById('sample_image1');
      var cropper;
    
    
      $('#upload_image1').change(function(event){
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

            Livewire.emit('getCropImg',  base64data)
      
            $modal.modal('hide');
            $('#uploaded_image1').attr('src', base64data);
            
              
                }
          });
        });
      
    });
  </script>
  <script>
    $(document).ready(function(){
      var $modal = $('#modal2');
      var image = document.getElementById('sample_image2');
      var cropper;
    
    
      $('#upload_image2').change(function(event){
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

            Livewire.emit('getCropImg2',  base64data)
      
            $modal.modal('hide');
            $('#uploaded_image2').attr('src', base64data);
            
              
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

            Livewire.emit('getCropImg3',  base64data)
      
            $modal.modal('hide');
            $('#uploaded_image3').attr('src', base64data);
            
              
               }
          });
        });
      
    });
  </script>

</div>
