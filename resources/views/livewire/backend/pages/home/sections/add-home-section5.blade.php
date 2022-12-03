<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5> {{__('dashboard.Add Home Last Section')}}</h5>
      
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">
            <a href="{{route('ViewHomeSection5')}}" class="btn btn-teal active mg-b-10"  >Back</a>
        </h6>
        <form  wire:submit.prevent="saveHomeSection5">
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
                      <textarea class="form-control"   wire:model="para1" placeholder="Section paragraph"></textarea>
                      @error('para1')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Section Paragraph 2: <span class="tx-danger">*</span></label>
                      <textarea class="form-control"   wire:model="para2" placeholder="Section paragraph"></textarea>
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
                 
                <div class="col-lg-12">
             
                    <label class="form-control-label"> Main Image : <span class="tx-danger">*</span></label><br>
                    <div class="row croper_sec">
              
                        <div class="col-md-12">
                          <div class="image_area">
                            <form method="post">
                              <label for="upload_image5" class="cabinet uploadStyle ">  
                                <img src="" id="uploaded_image"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                <span>Upload Image</span>                          
                                <input type="file" name="image" class="image" id="upload_image5"  />
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
                                              <img src="" id="homesectionimg5" />
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
               
                    @error('getHomeImg5')<span class="text-danger"> {{$message}}</span>  @enderror  
                
               
        
              
              </div><!-- col-4 -->
          
     
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
        var image = document.getElementById('homesectionimg5');
        var cropper;
      
        //$("body").on("change", ".image", function(e){
        $('#upload_image5').change(function(event){
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
              Livewire.emit('getSectionImg5',  base64data)
        
              $modal.modal('hide');
              $('#uploaded_image').attr('src', base64data);
              
                
                 }
            });
          });
        
      });
    </script>
</div>
