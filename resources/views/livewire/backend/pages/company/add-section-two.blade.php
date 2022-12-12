<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Add company profile section')}}</h5>
      
        </div><!-- sl-page-title -->


        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
            <a href="{{route('viewCompanySections2')}}" class="btn btn-teal active mg-b-10" >Back</a>
          </h6>
      
          <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
           
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                    {{__('dashboard.Add company profile section')}}
                  </a>
                </h6>
              </div><!-- card-header -->

              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body">
                  <form  wire:submit.prevent="saveCompanysection2">
                    <div class="form-layout">
                      <div class="row mg-b-25">
             
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label">Select Section Number: <span class="tx-danger">*</span></label>
                              <select class="form-control" data-placeholder="Choose Section" wire:model="section_id" aria-hidden="true">
                                <option label="Choose Section"></option>
                                <option value="2">Section 2</option>
                                <option value="3">Section 3</option>
                              </select>
                             @error('section_id')<span class="text-danger"> {{$message}}</span>  @enderror  
        
                            </div>
                        </div>   


                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label"> Name : <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" wire:model="name"  placeholder="Name ">
                            @error('name')<span class="text-danger"> {{$message}}</span>  @enderror  
                          
                        </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label"> Position : <span class="tx-danger">*</span></label>
                              <select class="form-control" data-placeholder="Choose Section" wire:model="position" aria-hidden="true">
                              <option label="Choose Section"></option>
                              <option value="Inhaber">Inhaber </option>
                              <option value="Bereichsleitung">Bereichsleitung</option>
                            </select>
                            @error('position')<span class="text-danger"> {{$message}}</span>  @enderror  
                          
                        </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label"> Department : <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" wire:model="department"  placeholder="Department">
                            @error('department')<span class="text-danger"> {{$message}}</span>  @enderror  
                          
                        </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label"> Email : <span class="tx-danger">*</span></label>
                              <input class="form-control" type="text" wire:model="email"  placeholder="email ">
                              @error('email')<span class="text-danger"> {{$message}}</span>  @enderror  
                            
                          </div>
                          </div><!-- col-4 -->
       
                          

                          
                    
                    
       
                         <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label">Section Heading : <span class="tx-danger">*</span></label>
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
                           <div class="form-group mg-b-10-force">
                             <label class="form-control-label">Section Paragraph 2: <span class="tx-danger">*</span></label>
                             <textarea class="form-control" rows="5"   wire:model="para2" placeholder="Section paragraph 2"></textarea>
                             @error('para2')<span class="text-danger"> {{$message}}</span>  @enderror  
             
                           </div>
                         </div><!-- col-4 -->
                         @if($section_id == 2)

                   
                         <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                              <label class="form-control-label">Section Paragraph 3: <span class="tx-danger">*</span></label>
                              <textarea class="form-control" rows="5"   wire:model="para3" placeholder="Section paragraph 3"></textarea>
                              @error('para3')<span class="text-danger"> {{$message}}</span>  @enderror  
              
                            </div>
                          </div><!-- col-4 -->
                          @endif
       

                          <div class="col-lg-4">
                            <label class="form-control-label">  Image For Desktop:   <span class="tx-danger"> *</span></label><br>
                              <div class="row croper_sec">
                                <div class="col-md-12">
                                  <div class="image_area">
                                    <form method="post">
                                      <label for="upload_company_img1" class="cabinet uploadStyle ">  
                                        <img src="" id="uploaded_company_img1"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                        <span>Upload Image</span>                          
                                        <input type="file" name="image" class="image" id="upload_company_img1"  />
                                      </label>
                                    </form>
                                  </div>
                                </div>
                            @error('companyCropedImg')<span class="text-danger"> {{$message}}</span>  @enderror  
              
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
                                                  <img src="" id="company_image1" />
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
                                      <label for="upload_company_img2" class="cabinet uploadStyle ">  
                                        <img src="" id="uploaded_company_img2"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                        <span>Upload Image</span>                          
                                        <input type="file" name="image" class="image" id="upload_company_img2"  />
                                      </label>
                                    </form>
                                  </div>
                                </div>
                            @error('companyCropedImg2')<span class="text-danger"> {{$message}}</span>  @enderror  
              
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
                                                  <img src="" id="company_image2" />
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
                                      <label for="upload_company_img3" class="cabinet uploadStyle ">  
                                        <img src="" id="uploaded_company_img3"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                        <span>Upload Image</span>                          
                                        <input type="file" name="image" class="image" id="upload_company_img3"  />
                                      </label>
                                    </form>
                                  </div>
                                </div>
                            @error('companyCropedImg3')<span class="text-danger"> {{$message}}</span>  @enderror  
              
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
                                                  <img src="" id="company_image3" />
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
            <div class="card d-none">
              <div class="card-header" role="tab" id="headingTwo">
                <h6 class="mg-b-0">
                  <a class="collapsed transition" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Horizontal Navigation Menu Fold Animation
                  </a>
                </h6>
              </div>
              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
                </div>
              </div>
            </div>
            <div class="card d-none">

              <div class="card-header" role="tab" id="headingThree">
                <h6 class="mg-b-0">
                  <a class="collapsed transition" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Creating CSS3 Button with Rounded Corners
                  </a>
                </h6>
              </div>
              <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
                </div>
              </div><!-- collapse -->
            </div><!-- card -->
          </div><!-- accordion -->
        </div><!-- card -->
        
 
       {{-- card end  --}}
    </div>
    <script>
      $(document).ready(function(){
        var $modal = $('#modal1');
        var image = document.getElementById('company_image1');
        var cropper;
        $('#upload_company_img1').change(function(event){
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
              Livewire.emit('CropCompanyImg',  base64data)
              $modal.modal('hide');
              $('#uploaded_company_img1').attr('src', base64data);
                  }
            });
          });
      });
    </script>
    <script>
      $(document).ready(function(){
        var $modal = $('#modal2');
        var image = document.getElementById('company_image2');
        var cropper;
        $('#upload_company_img2').change(function(event){
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
              Livewire.emit('CropCompanyImg2',  base64data)
              $modal.modal('hide');
              $('#uploaded_company_img2').attr('src', base64data);
                 }
            });
          });
      });
    </script>
    <script>
      $(document).ready(function(){
        var $modal = $('#modal3');
        var image = document.getElementById('company_image3');
        var cropper;
        $('#upload_company_img3').change(function(event){
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
              Livewire.emit('CropCompanyImg3',  base64data)
              $modal.modal('hide');
              $('#uploaded_company_img3').attr('src', base64data);
                 }
            });
          });
        
      });
    </script>
</div>
