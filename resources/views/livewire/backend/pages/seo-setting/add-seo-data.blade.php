<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Seo Data</h5>
        </div><!-- sl-page-title -->
    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> 
            <a href="{{route('view_seo_setting')}}"  class="btn btn-teal active mg-b-10" >
                Back
            </a>
        </h6>
       <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                    Add Seo Data
                </a>
                </h6>
            </div><!-- card-header -->
          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
                <form  wire:submit.prevent="storeSeoData">
                    <div class="form-layout">
                      <div class="row mg-b-25">
                         <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label">Meta  Title : </label>
                              <input class="form-control" type="text" wire:model="title"  placeholder="Meta  Title ">
                              @error('title')<span class="text-danger"> {{$message}}</span>  @enderror  
                            </div>
                          </div><!-- col-6-->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                              <label class="form-control-label">Description  : <span class="tx-danger">*</span></label>
                              <textarea class="form-control" rows="5"   wire:model="description" placeholder="Meta description "></textarea>
                              @error('description')<span class="text-danger"> {{$message}}</span>  @enderror  
                            </div>
                        </div><!-- col-4 -->
                          
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label"> Meta keywords : </label>
                              <input class="form-control" type="text" wire:model="keywords"  placeholder="Meta keywords ">
                              @error('keywords')<span class="text-danger"> {{$message}}</span>  @enderror  
                            </div>
                        </div><!-- col-6-->

                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label"> Author : </label>
                              <input class="form-control" type="text" wire:model="author"  placeholder="Author ">
                              @error('author')<span class="text-danger"> {{$message}}</span>  @enderror  
                            </div>
                        </div><!-- col-6-->

                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label"> Site Name : </label>
                              <input class="form-control" type="text" wire:model="site_name"  placeholder=" Site Name ">
                              @error('site_name')<span class="text-danger"> {{$message}}</span>  @enderror  
                            </div>
                        </div><!-- col-6-->
                     
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label"> Og Title : </label>
                              <input class="form-control" type="text" wire:model="og_title"  placeholder="Og Title  ">
                              @error('og_title')<span class="text-danger"> {{$message}}</span>  @enderror  
                            </div>
                        </div><!-- col-6-->

                        <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label"> Og Description: </label>
                              <input class="form-control" type="text" wire:model="og_description"  placeholder="Og Description">
                              @error('og_description')<span class="text-danger"> {{$message}}</span>  @enderror  
                            </div>
                        </div><!-- col-6-->

                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <label class="form-control-label"> Og Image :   <span class="tx-danger"> *</span></label><br>
                                  <div class="row croper_sec">
                                    <div class="col-md-12">
                                      <div class="image_area">
                                        <form method="post">
                                          <label for="upload_og_img" class="cabinet uploadStyle ">  
                                            <img src="" id="uploaded_job_img1"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                            <span>Upload Image</span>                          
                                            <input type="file" name="image" class="image" id="upload_og_img"  />
                                          </label>
                                        </form>
                                      </div>
                                    </div>
                                @error('cropedOgImg')<span class="text-danger"> {{$message}}</span>  @enderror  
                  
                                    {{-- start large model  --}}
                                    <div id="og_img_modal" class="modal fade" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
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
                                                      <img src="" id="og_image" />
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
                        </div><!-- col-6-->



                          
                      

                      </div><!-- row -->
            
                      <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5" type="submit" wire:loading.attr="disabled">Save</button>
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
    <script>
        $(document).ready(function(){
          var $modal = $('#og_img_modal');
          var image = document.getElementById('og_image');
          var cropper;
          $('#upload_og_img').change(function(event){
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
                  width: 300,
                  height: 200,
                  imageSmoothingEnabled: true,
                  imageSmoothingQuality: 'high',
              });
              canvas.toBlob(function(blob) {
                  //url = URL.createObjectURL(blob);
                  var reader = new FileReader();
                    reader.readAsDataURL(blob); 
                    reader.onloadend = function() {
                      var base64data = reader.result;  
                Livewire.emit('CropogImg',  base64data)
                $modal.modal('hide');
                $('#uploaded_job_img1').attr('src', base64data);
                    }
              });
            });
        });
      </script>
</div>
