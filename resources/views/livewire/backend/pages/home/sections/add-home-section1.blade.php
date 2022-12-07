<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5> {{__('dashboard.Home section one')}}</h5>
      
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> 
            <a href="{{route('manageHomeSection1')}}" class="btn btn-teal active mg-b-10"  >Back</a>
        </h6>
        <form  wire:submit.prevent="saveHomeSection1">
             <div class="form-layout">
               <div class="row mg-b-25">
                 <div class="col-lg-6">
                   <div class="form-group">
                     <label class="form-control-label">Main Heading: <span class="tx-danger">*</span></label>
                     <input class="form-control" type="text" wire:model="heading"  placeholder=" Main Heading">
                     @error('heading')<span class="text-danger"> {{$message}}</span>  @enderror  
                 </div>
                 </div><!-- col-4 -->
                 <div class="col-lg-6">
                   <div class="form-group">
                     <label class="form-control-label">Main SubHeading : <span class="tx-danger">*</span></label>
                     <input class="form-control" type="text" wire:model="sub_heading"  placeholder=" Main SubHeading ">
                     @error('sub_heading')<span class="text-danger"> {{$message}}</span>  @enderror  
                   
                 </div>
                 </div><!-- col-4 -->
           
                 <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Section Paragraph: <span class="tx-danger">*</span></label>
                      <textarea class="form-control"   wire:model="paragraph" placeholder="Section paragraph"></textarea>
                      @error('paragraph')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->
 
                <div class="col-lg-12">
                      <label class="form-control-label"> Section Image:   <span class="tx-danger">*</span></label><br>
                      <div class="row croper_sec">
                
                          <div class="col-md-12">
                            <div class="image_area">
                              <form method="post">
                                <label for="upload_image" class="cabinet uploadStyle ">  
                                  <img src="" id="uploaded_image"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                  <span>Upload Image</span>                          
                                  <input type="file" name="image" class="image" id="upload_image"  />
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
                                                <img src="" id="homesection1img" />
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
                 
                      @error('cropedImg')<span class="text-danger"> {{$message}}</span>  @enderror  
                  
                 
                </div><!-- col-12 -->
            
                {{-- logo 1 --}}
                <div class="col-lg-3">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label"> logo 1 Image : <span class="tx-danger">*</span></label><br>
                    <label class="custom-file">
                      <input type="file" id="file" class="custom-file-input" wire:model="logo1" >
                      <span class="custom-file-control"></span>
                    </label>
                  </div>

                  @error('logo1')<span class="text-danger"> {{$message}}</span>  @enderror  

                  <img class="img-fluid" src="{{(isset($this->logo1)) 
                    ? $logo1->temporaryUrl() :asset('no_image.jpg')}}" width="150" >
                </div><!-- col-4 -->
                {{-- end logo 1 --}}

                {{-- logo 1 --}}
                <div class="col-lg-3">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label"> logo 2 Image:  : <span class="tx-danger">*</span></label><br>
                  <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input" wire:model="logo2" >
                    <span class="custom-file-control"></span>
                  </label>
                </div>
                @error('logo2')<span class="text-danger"> {{$message}}</span>  @enderror  

                <img class="img-fluid" src="{{(isset($this->logo2)) 
                  ? $logo2->temporaryUrl() :asset('no_image.jpg')}}" width="150" >
              </div><!-- col-4 -->
              {{-- end logo 1 --}}


                 {{-- logo 1 --}}
                <div class="col-lg-3">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label"> logo 3 Image:  : <span class="tx-danger">*</span></label><br>
                    <label class="custom-file">
                      <input type="file" id="file" class="custom-file-input" wire:model="logo3" >
                      <span class="custom-file-control"></span>
                    </label>
                  </div>
                  @error('logo3')<span class="text-danger"> {{$message}}</span>  @enderror  

                  <img class="img-fluid" src="{{(isset($this->logo3)) 
                    ? $logo3->temporaryUrl() :asset('no_image.jpg')}}" width="150" >
                </div><!-- col-4 -->
                {{-- end logo 1 --}}

           
          
           

                 

          
     
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
        var image = document.getElementById('homesection1img');
        var cropper;
      
        //$("body").on("change", ".image", function(e){
        $('#upload_image').change(function(event){
            var files = event.target.files;
            var done = function (url) {
                image.src = url;
                $modal.modal('show');
            };
            //var reader;
            //var file;
            //var url;
      
            if (files && files.length > 0)
            {
                /*file = files[0];
                if(URL)
                {
                  done(URL.createObjectURL(file));
                }
                else if(FileReader)
                {*/
                  reader = new FileReader();
                  reader.onload = function (event) {
                      done(reader.result);
                  };
                  reader.readAsDataURL(files[0]);
                //}
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
                // width: 400,
                // height: 400,
                aspectRatio: 1,
                fillColor: '#fff',
                imageSmoothingEnabled: false,
                imageSmoothingQuality: 'high',
            });

            canvas.toBlob(function(blob) {
                //url = URL.createObjectURL(blob);
                var reader = new FileReader();
                 reader.readAsDataURL(blob); 
                 reader.onloadend = function() {
                    var base64data = reader.result;  
                  console.log(base64data);
              Livewire.emit('getSection1Img',  base64data)
        
              $modal.modal('hide');
              $('#uploaded_image').attr('src', base64data);
              
                
                 }
            });
          });
        
      });
    </script>
</div>
