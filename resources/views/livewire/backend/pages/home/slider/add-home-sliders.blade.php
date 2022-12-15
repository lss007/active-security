<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5> {{__('dashboard.Add Home Section Slider')}}</h5>
        </div><!-- sl-page-title -->
    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> 
            <a href="{{route('viewHomesliders')}}" class="btn btn-teal active mg-b-10" >Back</a>
        </h6>
        <form  wire:submit.prevent="storeHomeSlider">
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label">Slider Title: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" wire:model="title"  placeholder="Slider Title">
                    @error('title')<span class="text-danger"> {{$message}}</span>  @enderror  
                </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label">Slider Description : <span class="tx-danger">*</span></label>
                    <textarea class="form-control" type="text" wire:model="description"  placeholder="Slider Description">
                    </textarea>
                    @error('description')<span class="text-danger"> {{$message}}</span>  @enderror  
                  </div>
                </div><!-- col-4 -->

               <div class="col-lg-6">
                 <div class="form-group">
                    <label class="form-control-label"> Button Name : </label>
                    <input class="form-control" type="text" wire:model="button_text"  placeholder="Button Name ">
                    @error('button_text')<span class="text-danger"> {{$message}}</span>  @enderror  
                  </div>
               </div><!-- col-4 -->
        
               <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Button Page link: <span class="tx-danger">*</span></label>
                  <select class="form-control" data-placeholder="Choose Section" wire:model="link" aria-hidden="true">
                    <option label="Choose Page link "></option>
                  @if(isset($getRouteName))
                  @foreach($getRouteName as $val)
                    <option value="{{$val->route_link}}">{{ucwords($val->route_name)}}</option>
                    @endforeach
                    @endif
                  </select>
                 @error('link')<span class="text-danger"> {{$message}}</span>  @enderror  
  
                </div>
            </div> 
                
      
          {{-- for desktop --}}
          <div class="col-lg-4">
              <label class="form-control-label"> Slider Image For Desktop:    <span class="tx-danger">*</span></label><br>
              <div class="row croper_sec">
                  <div class="col-md-12">
                    <div class="image_area">
                      <form method="post">
                        <label for="upload_slider_image" class="cabinet uploadStyle ">  
                          <img src="" id="uploaded_image"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                          <span>Upload Image</span>                          
                          <input type="file" name="image" class="image" id="upload_slider_image"  />
                        </label>
                      </form>
                    </div>
                  </div>
                  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
                                        <img src="" id="slider_image" />
                                    </div>
                                    <div class="col-md-4 ">
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
              @error('sliderCropedImg')<span class="text-danger"> {{$message}}</span>  @enderror  
          </div>
          {{-- for desktop  --}}

          {{-- for tablet --}}
          <div class="col-lg-4">
            <label class="form-control-label">Slider  Image For Tablet:   <span class="tx-danger"> *</span></label><br>
              <div class="row croper_sec">
                <div class="col-md-12">
                  <div class="image_area">
                    <form method="post">
                      <label for="upload_slider_img2" class="cabinet uploadStyle ">  
                        <img src="" id="uploaded_slider_img2"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                        <span>Upload Image</span>                          
                        <input type="file" name="image" class="image" id="upload_slider_img2"  />
                      </label>
                    </form>
                  </div>
                </div>
                @error('sliderCropedImg2')<span class="text-danger"> {{$message}}</span>  @enderror  

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
                                  <img src="" id="slider_image2" />
                              </div>
                              <div class="col-md-4 pointerNone">
                                  <div class="preview"></div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <!-- modal-body -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal" > Cancel</button>
                        <button type="button" class="btn btn-info pd-x-20"  id="crop2">Crop</button>
                      </div>
                    </div>
                  </div>
                  <!-- modal-dialog -->
                </div>
                <!-- modal -->
                {{-- end large model  --}}                     
            </div>
          </div>
          {{-- for tablet  --}}

          {{-- For mobile  --}}
          <div class="col-lg-4">
            <label class="form-control-label">Slider Image For Mobile:   <span class="tx-danger"> *</span></label><br>
              <div class="row croper_sec">
                <div class="col-md-12">
                  <div class="image_area">
                    <form method="post">
                      <label for="upload_slider_img3" class="cabinet uploadStyle ">  
                        <img src="" id="uploaded_slider_img3"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                        <span>Upload Image</span>                          
                        <input type="file" name="image" class="image" id="upload_slider_img3"  />
                      </label>
                    </form>
                  </div>
                </div>
            @error('sliderCropedImg3')<span class="text-danger"> {{$message}}</span>  @enderror  

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
                                  <img src="" id="slider_image3" />
                              </div>
                              <div class="col-md-4 pointerNone">
                                  <div class="preview"></div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <!-- modal-body -->
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
              </div>
              <!-- row -->
        
              <div class="form-layout-footer">
                <button class="btn btn-info mg-r-5" type="submit" wire:loading.attr="disabled">Publish</button>
              <div  wire:loading class="pd-x-20">
                   <img src="https://paladins-draft.com/img/circle_loading.gif" width="64px" height="64" >
              </div>
              </div>
              <!-- form-layout-footer -->

            </div>
            <!-- form-layout -->
        </form>
       </div> 
       {{-- card end  --}}
    </div>
    <script>
      $(document).ready(function(){
        var $modal = $('#modal');
        var image = document.getElementById('slider_image');
        var cropper;
        //$("body").on("change", ".image", function(e){
        $('#upload_slider_image').change(function(event){
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
              // fillColor: '#fff',
              preview: '.preview',
            });
        }).on('hidden.bs.modal', function() {
             cropper.destroy();
             cropper = null;
        });
        $("#crop").click(function(){
            canvas = cropper.getCroppedCanvas({
                imageSmoothingEnabled: true,
                imageSmoothingQuality: 'high',
            });
            canvas.toBlob(function(blob) {
                //url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob); 
                reader.onloadend = function() {
                var base64data = reader.result;  
              Livewire.emit('addSliderImg',  base64data)
              $modal.modal('hide');
              $('#uploaded_image').attr('src', base64data);
                 }
            });
          });
      });
    </script>
      <script>
        $(document).ready(function(){
          var $modal = $('#modal2');
          var image = document.getElementById('slider_image2');
          var cropper;
          $('#upload_slider_img2').change(function(event){
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
                  //  url = URL.createObjectURL(blob);
                  var reader = new FileReader();
                  reader.readAsDataURL(blob); 
                  reader.onloadend = function() {
                  var base64data = reader.result;  
                Livewire.emit('addSliderImg2',  base64data)
                $modal.modal('hide');
                $('#uploaded_slider_img2').attr('src', base64data);
                   }
              });
            });
        });
      </script>
      <script>
        $(document).ready(function(){
          var $modal = $('#modal3');
          var image = document.getElementById('slider_image3');
          var cropper;
          $('#upload_slider_img3').change(function(event){
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
                  //  url = URL.createObjectURL(blob);
                  var reader = new FileReader();
                  reader.readAsDataURL(blob); 
                  reader.onloadend = function() {
                  var base64data = reader.result;  
                Livewire.emit('addSliderImg3',  base64data)
                $modal.modal('hide');
                $('#uploaded_slider_img3').attr('src', base64data);
                   }
              });
            });
        });
      </script>
</div>









