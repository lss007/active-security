<div>
  {{-- Success is as dangerous as failure. --}}
  
  <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update Home Page Banner</h5>
        <p>Update  Home page Banner Image or text  </p>
      </div><!-- sl-page-title -->

  <div class="card pd-20 pd-sm-40">
      <h6 class="card-body-title">  
          <a href="{{route('viewHomebanner')}}" class="btn btn-teal active mg-b-10"  >Back</a>
      </h6>
      <form  wire:submit.prevent="updateHomeBanner">
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
                    <label class="form-control-label">Button Link: </label>
                    <input class="form-control" type="url" wire:model="button_link"  placeholder="https://www.example.com/">
                    @error('button_link')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                  </div>
                </div><!-- col-4 -->
            
                         
                <div class="col-lg-12">
                  {{-- <div class="form-group mg-b-10-force">

                    <label class="form-control-label"> Banner Image:  : <span class="tx-danger">*</span></label><br>
                    <label class="custom-file">
                      <input type="file" id="file" class="custom-file-input" wire:model="new_Image" >
                      <span class="custom-file-control"></span>
                    </label>
                  </div>
                  
                  <img class="img-fluid {{isset($new_Image) ? 'd-none' :  ''}}" src="{{(!empty($this->bannerImage)) 
                    ? asset('storage/Home-banner/'.$this->bannerImage):asset('no_image.jpg')}}" width="200" >

                  @if(isset($new_Image)) <img id="output" src="{{$new_Image->temporaryUrl()}}" width="200" > @endif
                  @error('new_Image')<span class="text-danger"> {{$message}}</span>  @enderror   --}}
              <label class="form-control-label"> Banner Image:  : <span class="tx-danger">*</span></label><br>
                    <div class="row croper_sec">
              
                        <div class="col-md-12">
                          <div class="image_area">
                            <form method="post">
                              <label for="upload_image" class="cabinet uploadStyle "> 
                                <img src="" id="uploaded_image" class="img-responsive img-circle" wire:ignore /> 
                                <span>Upload Image</span>                          
                                <input type="file" name="image" class="image" id="upload_image"  />
                              </label>
                            </form>
                          </div>
                        </div>
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
                                              <img src="" id="sample_image" />
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
    
      /*function readURL(input)
      {
          if(input.files && input.files[0])
          {
            var reader = new FileReader();
        
            reader.onload = function(event) {
                $('#uploaded_image').attr('src', event.target.result);
                $('#uploaded_image').removeClass('img-circle');
                $('#upload_image').after('<div align="center" id="crop_button_area"><br /><button type="button" class="btn btn-primary" id="crop">Crop</button></div>')
            }
            reader.readAsDataURL(input.files[0]); // convert to base64 string
          }
        }
    
        $("#upload_image").change(function() {
          readURL(this);
          var image = document.getElementById("uploaded_image");
          cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
          });
      });*/
    
      
      var $modal = $('#modal');
      var image = document.getElementById('sample_image');
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
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
          });
      }).on('hidden.bs.modal', function() {
           cropper.destroy();
           cropper = null;
      });
    
      $("#crop").click(function(){
          canvas = cropper.getCroppedCanvas({
              width: 400,
              height: 400,
          });
    
          canvas.toBlob(function(blob) {
              //url = URL.createObjectURL(blob);
              var reader = new FileReader();
               reader.readAsDataURL(blob); 
               reader.onloadend = function() {
                  var base64data = reader.result;  

            Livewire.emit('editHomeBannerImg',  base64data)
      
            $modal.modal('hide');
            $('#uploaded_image').attr('src', base64data);
            
                  // $.ajax({
                  //   url: "upload.php",
                  //     method: "POST",                	
                  //     data: {image: base64data},
                  //     success: function(data){
            
                  //         console.log(data);
                  //         $modal.modal('hide');
                  //         $('#uploaded_image').attr('src', data);
                  //         alert("success upload image");
                  //     }
                  //   });
               }
          });
        });
      
    });
  </script>
</div>
