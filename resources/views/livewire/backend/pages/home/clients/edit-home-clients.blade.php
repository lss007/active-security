<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Update Home Clients')}} </h5>
      
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> 
            <a href="{{route('viewHomeclients')}}" class="btn btn-teal active mg-b-10"  >Back</a>
        </h6>
        <form  wire:submit.prevent="saveHomeclients">
            <div class="form-layout">
              <div class="row mg-b-25">
                {{-- <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label"> Title: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" wire:model="title"  placeholder="Main Title">
                    @error('title')<span class="text-danger"> {{$message}}</span>  @enderror  
                </div>
                </div><!-- col-4 --> --}}
                {{-- <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label"> link: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="url" wire:model="button_link"  placeholder="Button link">
                    @error('button_link')<span class="text-danger"> {{$message}}</span>  @enderror  
                  </div>
                </div><!-- col-4 --> --}}
                  {{-- <div class="col-lg-4">
                   <div class="form-group">
                     <label class="form-control-label"> Client Image: <span class="tx-danger">*</span></label>
                     <input class="form-control" type="url" wire:model="button_link"  placeholder="Button link">
                     @error('button_link')<span class="text-danger"> {{$message}}</span>  @enderror  
                   </div>
                 </div><!-- col-4 --> --}}
                 <div class="col-lg-12">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label"> Edit/Update Client Image:<span class="tx-danger">*</span></label><br>
                    <label class="custom-file">
                      <input type="file" id="file" class="custom-file-input" wire:model="clientIng"   >
                      <span class="custom-file-control"></span>
                    </label>
                  </div>
                  <img class="img-fluid bg-dark p-2 {{isset($clientIng) ? 'd-none' :  ''}}" src="{{(!empty($this->image)) 
                    ? asset('storage/Home-clients/'.$this->image):asset('no_image.jpg')}}" width="100" >
                  @if(isset($clientIng))
                   <img id="output" src="{{$clientIng->temporaryUrl()}}" width="150" class="bg-dark p-2" > @endif
                  @error('newimage')<span class="text-danger"> {{$message}}</span>  @enderror 
              
                  <div class="row croper_sec">
                      <div class="col-md-12">
                        <div class="image_area">
                          <form method="post">
                            <label for="addClientImg" class="cabinet uploadStyle ">  
                              <img src="{{(isset($this->image))? asset('storage/Home-clients/'.$this->image):asset('no_image.jpg')}}" id="uploaded_image"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                              <span>Upload Image</span>                          
                              <input type="file" name="image" class="image" id="addClientImg"  />
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
                                            <img src="" id="clientImages" />
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
            </div><!-- col-12 -->
              </div><!-- row -->
              <div class="form-layout-footer">
                <button class="btn btn-info mg-r-5" type="submit" wire:loading.attr="disabled">Update</button>
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
        var image = document.getElementById('clientImages');
        var cropper;
      
        //$("body").on("change", ".image", function(e){
        $('#addClientImg').change(function(event){
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
                //}
            }
        });
      
        $modal.on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
              autoCropArea : 1,
              preview: '.preview',
              fillColor: 'red',
              
            });
        }).on('hidden.bs.modal', function() {
             cropper.destroy();
             cropper = null;
        });
      
        $("#crop").click(function(){
            canvas = cropper.getCroppedCanvas({
              // width: 400,
              // height: 400,
              // aspectRatio: 1,
              // width: 577,
              // height: 377,
              // minWidth: 256,
              // minHeight: 256,
              maxWidth: 5472,
              maxHeight: 3648,
              // fillColor: '#fff',
              imageSmoothingEnabled: true,
              imageSmoothingQuality: 'high',
            });

            canvas.toBlob(function(blob) {
                //url = URL.createObjectURL(blob);
                var reader = new FileReader();
                 reader.readAsDataURL(blob); 
                 reader.onloadend = function() {
                    var base64data = reader.result;  
                  // console.log(base64data);
              Livewire.emit('editClinetImage',  base64data)
        
              $modal.modal('hide');
              $('#uploaded_image').attr('src', base64data);
              document.getElementById("uploaded_image").style.backgroundColor = "black";
          
                
                 }
            });
          });
        
      });
    </script> 
</div>



