<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Update Services Pages Banner')}}  </h5>
    
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
                    {{__('dashboard.Update Services Pages Banner')}}
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
                        <div class="col-lg-4">
                          <label class="form-control-label"> Banner Image For Desktop:   <span class="tx-danger"> *</span></label><br>
                            <div class="row croper_sec">
                              <div class="col-md-12">
                                <div class="image_area">
                                  <form method="post">
                                    <label for="edit_banner_up_img1" class="cabinet uploadStyle ">  
                                      <img src="{{(isset($this->banner)) 
                                        ? asset('storage/services-banner/'.$this->banner):asset('no_image.jpg')}}" id="edit_banner_load_img1"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                      <span>Upload Image</span>                          
                                      <input type="file" name="image" class="image" id="edit_banner_up_img1"  />
                                    </label>
                                  </form>
                                </div>
                              </div>
               
            
                              {{-- start large model  --}}
                              <div id="banner_modal1" class="modal fade" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
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
                                                <img src="" id="edit_sample_image1" />
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
                         <div class="col-lg-4">
                          <label class="form-control-label"> Banner Image For Tablet:   <span class="tx-danger"> *</span></label><br>
                            <div class="row croper_sec">
                              <div class="col-md-12">
                                <div class="image_area">
                                  <form method="post">
                                    <label for="banner__upload_img2" class="cabinet uploadStyle ">  
                                      <img src="{{(isset($this->tabletBanner)) 
                                        ? asset('storage/services-banner/'.$this->tabletBanner):asset('no_image.jpg')}}" id="banner_uploaded_img2"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                      <span>Upload Image</span>                          
                                      <input type="file" name="image" class="image" id="banner__upload_img2"  />
                                    </label>
                                  </form>
                                </div>
                              </div>
                      
            
                              {{-- start large model  --}}
                              <div id="banner_modal2" class="modal fade" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
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
                                                <img src="" id="edit_banner_img2" />
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
                        <div class="col-lg-4">
                          <label class="form-control-label"> Banner Image For Mobile:   <span class="tx-danger"> *</span></label><br>
                            <div class="row croper_sec">
                              <div class="col-md-12">
                                <div class="image_area">
                                
                                          
                                  <form method="post">
                                    <label for="edit_upload_img3" class="cabinet uploadStyle ">  
                                      <img src="{{(isset($this->mobileBanner)) 
                                        ? asset('storage/services-banner/'.$this->mobileBanner):asset('no_image.jpg')}}" id="edit_uploaded_img3"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                      <span>Upload Image</span>                          
                                      <input type="file" name="image" class="image" id="edit_upload_img3"  />
                                    </label>
                                  </form>
                                </div>
                              </div>
                  
            
                              {{-- start large model  --}}
                              <div id="banner_modal3" class="modal fade" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
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
                                                <img src="" id="edit_banner_img3" />
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

      <script>
        $(document).ready(function(){
          var $modal = $('#banner_modal1');
          var image = document.getElementById('edit_sample_image1');
          var cropper;
          $('#edit_banner_up_img1').change(function(event){
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
    
                Livewire.emit('editBottomBanner1',  base64data)
          
                $modal.modal('hide');
                $('#edit_banner_load_img1').attr('src', base64data);
                    }
              });
            });
          
        });
      </script>
      <script>
        $(document).ready(function(){
          var $modal = $('#banner_modal2');
          var image = document.getElementById('edit_banner_img2');
          var cropper;
          $('#banner__upload_img2').change(function(event){
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
                Livewire.emit('editBottomBanner2',  base64data)
                $modal.modal('hide');
                $('#banner_uploaded_img2').attr('src', base64data);
                   }
              });
            });
          
        });
      </script>
      <script>
        $(document).ready(function(){
          var $modal = $('#banner_modal3');
          var image = document.getElementById('edit_banner_img3');
          var cropper;
          $('#edit_upload_img3').change(function(event){
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
    
                Livewire.emit('editBottomBanner3',  base64data)
          
                $modal.modal('hide');
                $('#edit_uploaded_img3').attr('src', base64data);
                
                  
                   }
              });
            });
          
        });
      </script>
</div>


{{-- ================== --}}
