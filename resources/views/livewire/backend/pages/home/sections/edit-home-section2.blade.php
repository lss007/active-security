<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Update Home Section two')}}</h5>
      
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">
            <a href="{{route('viewHomeSection2')}}" class="btn btn-teal active mg-b-10"  >Back</a>
        </h6>
        <form  wire:submit.prevent="updateHomeSection2">
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Heading: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" wire:model="heading"  placeholder="Heading">
                    @error('heading')<span class="text-danger"> {{$message}}</span>  @enderror  
                </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label"> Title : <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" wire:model="title"  placeholder="Title ">
                    @error('title')<span class="text-danger"> {{$message}}</span>  @enderror  
                  
                </div>
                </div><!-- col-4 -->
          
                <div class="col-lg-6">
                   <div class="form-group mg-b-10-force">
                     <label class="form-control-label">Section Paragraph 1: <span class="tx-danger">*</span></label>
                     <textarea class="form-control" rows="5"   wire:model="para1" placeholder="Section paragraph"></textarea>
                     @error('para1')<span class="text-danger"> {{$message}}</span>  @enderror  
     
                   </div>
                 </div><!-- col-4 -->

                 <div class="col-lg-6">
                   <div class="form-group mg-b-10-force">
                     <label class="form-control-label">Section Paragraph 2: <span class="tx-danger">*</span></label>
                     <textarea class="form-control" rows="5"  wire:model="para2" placeholder="Section paragraph"></textarea>
                     @error('para2')<span class="text-danger"> {{$message}}</span>  @enderror  
     
                   </div>
                 </div><!-- col-4 -->

                 {{-- <div class="col-lg-12">
                      <div class="form-group mg-b-10-force">
                        <div id="summernote" wire:model="para1">Hello, universe!</div>
                     </div>
                 </div> --}}
     


               <div class="col-lg-6">
                 <div class="form-group">
                   <label class="form-control-label"> Button Name : <span class="tx-danger">*</span></label>
                   <input class="form-control" type="text" wire:model="buttonName"  placeholder="Button Name ">
                   @error('buttonName')<span class="text-danger"> {{$message}}</span>  @enderror  
                 
               </div>
               </div><!-- col-4 -->

               <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label"> Button Link : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="url" wire:model="buttonLink"  placeholder="https://www.example.com/  ">
                  @error('buttonLink')<span class="text-danger"> {{$message}}</span>  @enderror  
                
              </div>
              </div><!-- col-4 -->
       
                
         
         
            <!--for Desktop -->
            <div class="col-lg-4">
              <label class="form-control-label"> Image For Desktop  <span class="tx-danger">*</span></label><br>
              <div class="row croper_sec">
        
                  <div class="col-md-12">
                    <div class="image_area">
                      <form method="post">
                        <label for="update_sec_img" class="cabinet uploadStyle ">  
                          <img src="{{(isset($this->Image))? asset('storage/Home-section/'.$this->Image):asset('no_image.jpg')}}" id="uploaded_image"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:100px;"/> 
                          <span>Upload Image</span>                          
                          <input type="file" name="image" class="image" id="update_sec_img"  />
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
                                        <img src="" id="edithomesec21img" />
                                    </div>
                                    <div class="col-md-4">
                                        <div class="preview pointerNone"></div>
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
         
    
          
         
        </div><!-- col-12 -->
            <!--for Desktop -->
            {{--for tablet --}}
              <div class="col-lg-4">
                <label class="form-control-label">  Image For Tablet:   <span class="tx-danger"> *</span></label><br>
                  <div class="row croper_sec">
                    <div class="col-md-12">
                      <div class="image_area">
                        <form method="post">
                          
                          <label for="update_sec2_img2" class="cabinet uploadStyle ">  
                            <img src="{{(isset($this->tabletImg))? asset('storage/Home-section/'.$this->tabletImg):asset('no_image.jpg')}}" id="uploaded_sec2_img2"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:100px;"/> 
                            <span>Upload Image</span>                          
                            <input type="file" name="image" class="image" id="update_sec2_img2"  />
                          </label>
                        </form>
                      </div>
                    </div>
                

                    {{-- start large model  --}}
                    <div id="editsecmodal2" class="modal fade" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
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
                                      <img src="" id="edithomesec2img2" />
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
            {{--for Tablet  --}}
            {{-- For mobile  --}}
              <div class="col-lg-4">
                <label class="form-control-label">  Image For Mobile:   <span class="tx-danger"> *</span></label><br>
                  <div class="row croper_sec">
                    <div class="col-md-12">
                      <div class="image_area">
                        <form method="post">
                          <label for="upload_sec_img3" class="cabinet uploadStyle ">  
                            <img src="{{(isset($this->mobileImg))? asset('storage/Home-section/'.$this->mobileImg):asset('no_image.jpg')}}" id="uploaded_sec2_img3"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:100px;"/> 
                            <span>Upload Image</span>                          
                            <input type="file" name="image" class="image" id="upload_sec_img3"  />
                          </label>
                        </form>
                      </div>
                    </div>

                    {{-- start large model  --}}
                    <div id="homemodal3" class="modal fade" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
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
                                      <img src="" id="homesec2img3" />
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
      
        var $modal = $('#modal');
        var image = document.getElementById('edithomesec21img');
        var cropper;
      
        //$("body").on("change", ".image", function(e){
        $('#update_sec_img').change(function(event){
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
              autoCropArea : 1,
              viewMode: 3,
              preview: '.preview'
              
            });
        }).on('hidden.bs.modal', function() {
             cropper.destroy();
             cropper = null;
        });
      
        $("#crop").click(function(){
            canvas = cropper.getCroppedCanvas({
                aspectRatio: 1,
                fillColor: '#fff',
                imageSmoothingEnabled: false,
                imageSmoothingQuality: 'high',
            });

            canvas.toBlob(function(blob) {
                var reader = new FileReader();
                 reader.readAsDataURL(blob); 
                 reader.onloadend = function() {
                    var base64data = reader.result;  
                  console.log(base64data);
              Livewire.emit('editSection2Img',  base64data)
        
              $modal.modal('hide');
              $('#uploaded_image').attr('src', base64data);
              
                
                 }
            });
          });
        
      });
    </script>
      <script>
        $(document).ready(function(){
          var $modal = $('#editsecmodal2');
          var image = document.getElementById('edithomesec2img2');
          var cropper;
          $('#update_sec2_img2').change(function(event){
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
                  imageSmoothingEnabled: true,
                  imageSmoothingQuality: 'high',
              });
              canvas.toBlob(function(blob) {
                  var reader = new FileReader();
                    reader.readAsDataURL(blob); 
                    reader.onloadend = function() {
                      var base64data = reader.result;  
                Livewire.emit('editSection2Img2',  base64data)
                $modal.modal('hide');
                $('#uploaded_sec2_img2').attr('src', base64data);
                    }
              });
            });
        });
      </script>
      <script>
        $(document).ready(function(){
          var $modal = $('#homemodal3');
          var image = document.getElementById('homesec2img3');
          var cropper;
          $('#upload_sec_img3').change(function(event){
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
                  imageSmoothingEnabled: true,
                  imageSmoothingQuality: 'high',
              });
              canvas.toBlob(function(blob) {
                  var reader = new FileReader();
                    reader.readAsDataURL(blob); 
                    reader.onloadend = function() {
                      var base64data = reader.result;  
                Livewire.emit('editSection2Img3',  base64data)
                $modal.modal('hide');
                $('#uploaded_sec2_img3').attr('src', base64data);
                    }
              });
            });
          
        });
      </script>
</div>
