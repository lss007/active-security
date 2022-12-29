<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Update the job page content')}}</h5>
      
        </div><!-- sl-page-title -->


        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
            <a href="{{route('view_job_section')}}" class="btn btn-teal active mg-b-10" >Back</a>
          </h6>
      
          <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
           
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                    {{__('dashboard.Update the job page content')}}
                  </a>
                </h6>
              </div><!-- card-header -->

              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body">
                  <form  wire:submit.prevent="updatejobsection">
                    <div class="form-layout">
                      <div class="row mg-b-25">
                         <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label"> Heading : <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" wire:model="heading"  placeholder="Heading">
                                 @error('heading')<span class="text-danger"> {{$message}}</span>  @enderror  
                            
                            </div>
                          </div><!-- col-4 -->
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label"> Title : <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" wire:model="title"  placeholder="Title">
                                 @error('title')<span class="text-danger"> {{$message}}</span>  @enderror  
                            
                            </div>
                          </div><!-- col-4 -->
                         <div class="col-lg-12">
                           <div class="form-group mg-b-10-force">
                             <label class="form-control-label">Section Paragraph 1: <span class="tx-danger">*</span></label>
                             <textarea class="form-control"  rows="5"  wire:model="para1" placeholder="Section paragraph 1"></textarea>
                             @error('para1')<span class="text-danger"> {{$message}}</span>  @enderror  
             
                           </div>
                         </div><!-- col-4 -->
                         <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label"> Title : <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" wire:model="title2"  placeholder="Title 2">
                                 @error('title2')<span class="text-danger"> {{$message}}</span>  @enderror  
                            
                            </div>
                          </div><!-- col-4 -->
                         <div class="col-lg-12">
                           <div class="form-group mg-b-10-force">
                             <label class="form-control-label">Section Paragraph 2: <span class="tx-danger">*</span></label>
                             <textarea class="form-control" rows="5"   wire:model="para2" placeholder="Section paragraph 2"></textarea>
                             @error('para2')<span class="text-danger"> {{$message}}</span>  @enderror  
             
                           </div>
                         </div><!-- col-4 -->
                

                         <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label"> Button Name : <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" wire:model="button_name"  placeholder="Button Name ">
                                 @error('button_name')<span class="text-danger"> {{$message}}</span>  @enderror  
                            
                            </div>
                          </div><!-- col-4 -->
                      
                          <div class="col-lg-6">
                            @if($showDiv)
                            <div class="form-group">
                              <label class="form-control-label"> Custom link : </label>
                              <input class="form-control" type="url" wire:model="button_link"  placeholder="https://www.example.com/ ">
                              @error('button_link')<span class="text-danger"> {{$message}}</span>  @enderror  
                            </div>
                            @else
                            <div class="form-group">
                              <label class="form-control-label"> Button Link : <span class="tx-danger">*</span></label>
                                 {{-- <input class="form-control" type="text" wire:model="button_link"  placeholder="Button Name "> --}}
                                 <select class="form-control" data-placeholder="Choose Section" wire:model="button_link" aria-hidden="true" 
                                 onchange='Livewire.emit("selectSection", this.value)'
                                 >
                                    <option label="Choose Page link "></option>
                                  @if(isset($getRouteList))
                                  @foreach($getRouteList as $key => $val)
                                    <option value="{{$val->id}}"> {{$key+1}}) {{ucwords($val->route_name)}}</option>
                                    @endforeach
                                    {{-- <option value="custom" class="text-danger">Custom link</option> --}}
                                    @endif
                                  </select>
                                 @error('button_link')<span class="text-danger"> {{$message}}</span>  @enderror  
                            </div>
                            @endif

                            <div class="form-group">
                              <input type="checkbox"  class=""   wire:click="$toggle('showDiv')">
                              <label class="form-control-label">Would you like to add Custom link ?<span class="tx-danger">*</span></label>
                            </div>
                          </div><!-- col-4 -->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label">Hash Tag section <span class="tx-danger">*</span></label>
                                  <select class="form-control" data-placeholder="Choose Tag" wire:model="hashTag" aria-hidden="true">
                                    <option label="Choose Tag"></option>
                                        @if(isset($gethashtag))
                                        @foreach($gethashtag as $key => $val)
                                        <option value="{{$val->section_id}}"> {{$key+1}}) Section {{ucwords($val->section_id)}}</option>
                                        @endforeach
                                        {{-- <option value="custom" class="text-danger">Custom link</option> --}}
                                        @endif
                                  </select>
                              @error('hashTag')<span class="text-danger"> {{$message}}</span>  @enderror  
                            </div>
                          </div>   
                          <div class="col-lg-4">
                            <label class="form-control-label">  Image For Desktop:   <span class="tx-danger"> *</span></label><br>
                              <div class="row croper_sec">
                                <div class="col-md-12">
                                  <div class="image_area">
                                    <form method="post">
                                      <label for="update_job_img1" class="cabinet uploadStyle ">  
                                        <img src="{{(isset($this->Image))? asset('storage/job/'.$this->Image):asset('no_image.jpg')}}" id="store_job_img1"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:100px;"/> 
                                        <span>Upload Image</span>                          
                                        <input type="file" name="image" class="image" id="update_job_img1"  />
                                      </label>
                                    </form>
                                  </div>
                                </div>
                            @error('jobCropedImg')<span class="text-danger"> {{$message}}</span>  @enderror  
              
                                {{-- start large model  --}}
                                <div id="jobmodal1" class="modal fade" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
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
                                                  <img src="" id="edit_job_image1" />
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
                            <label class="form-control-label">  Image For Tablet:   <span class="tx-danger"> *</span></label><br>
                              <div class="row croper_sec">
                                <div class="col-md-12">
                                  <div class="image_area">
                                    <form method="post">
                                      <label for="update_job_img2" class="cabinet uploadStyle ">  
                                        <img src="{{(isset($this->tabletBanner))? asset('storage/job/'.$this->tabletBanner):asset('no_image.jpg')}}" id="store_job_img2"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                        <span>Upload Image</span>                          
                                        <input type="file" name="image" class="image" id="update_job_img2"  />
                                      </label>
                                    </form>
                                  </div>
                                </div>
                            @error('jobCropedImg2')<span class="text-danger"> {{$message}}</span>  @enderror  
              
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
                                                  <img src="" id="edit_job_image2" />
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
                            <label class="form-control-label">  Image For Mobile:   <span class="tx-danger"> *</span></label><br>
                              <div class="row croper_sec">
                                <div class="col-md-12">
                                  <div class="image_area">
                                    <form method="post">
                                      <label for="update_job_img3" class="cabinet uploadStyle ">  
                                        <img src="{{(isset($this->mobileBanner))? asset('storage/job/'.$this->mobileBanner):asset('no_image.jpg')}}" id="store_job_img3"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                        <span>Upload Image</span>                          
                                        <input type="file" name="image" class="image" id="update_job_img3"  />
                                      </label>
                                    </form>
                                  </div>
                                </div>
                            @error('jobCropedImg3')<span class="text-danger"> {{$message}}</span>  @enderror  
              
                                {{-- start large model  --}}
                                <div id="jobmodal3" class="modal fade" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
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
                                                  <img src="" id="edit_job_image3" />
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
              </div>
            </div>
   
           
          </div><!-- accordion -->
        </div><!-- card -->
        
 
       {{-- card end  --}}
    </div>
    <script>
      $(document).ready(function(){
        var $modal = $('#jobmodal1');
        var image = document.getElementById('edit_job_image1');
        var cropper;
        $('#update_job_img1').change(function(event){
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
              Livewire.emit('updateJobImg',  base64data)
              $modal.modal('hide');
              $('#store_job_img1').attr('src', base64data);
                  }
            });
          });
      });
    </script>
    <script>
      $(document).ready(function(){
        var $modal = $('#modal2');
        var image = document.getElementById('edit_job_image2');
        var cropper;
        $('#update_job_img2').change(function(event){
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
              Livewire.emit('updateJobImg2',  base64data)
              $modal.modal('hide');
              $('#store_job_img2').attr('src', base64data);
                 }
            });
          });
      });
    </script>
    <script>
      $(document).ready(function(){
        var $modal = $('#jobmodal3');
        var image = document.getElementById('edit_job_image3');
        var cropper;
        $('#update_job_img3').change(function(event){
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
              Livewire.emit('updateJobImg3',  base64data)
              $modal.modal('hide');
              $('#store_job_img3').attr('src', base64data);
                 }
            });
          });
        
      });
    </script>
</div>
