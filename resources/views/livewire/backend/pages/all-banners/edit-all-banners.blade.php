<div>
  {{-- Success is as dangerous as failure. --}}
  
  <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>{{__('dashboard.Update Banner')}} </h5>

      </div><!-- sl-page-title -->

  <div class="card pd-20 pd-sm-40">
      <h6 class="card-body-title">  
          <a href="{{route('view_all_banner')}}" class="btn btn-teal active mg-b-10"  >Back</a>
      </h6>
      <form  wire:submit.prevent="updateallBanner">
           <div class="form-layout">
             <div class="row mg-b-25">
              <div class="col-lg-6">
                  <div class="form-group mg-b-10-force" wire:ignore>
                    <label class="form-control-label"> Section Page Name : <span class="tx-danger">*</span></label>
                    <select  class="form-control" wire:model="pageCatId" >
                      <option selected class="form-control">Choose Page Category </option>
                      @if(isset($getPageCategory))
                          @foreach($getPageCategory as $category )
                              <option value="{{$category->id}}"  class="form-control">{{$category->page_cat_name}}</option>
                          @endforeach
                      @endif
                    </select>
                    
                  </div>
                  @error('pageCatId')<span class="tx-danger"> {{$message}}</span>  @enderror  
              </div><!-- col-4 -->
          
               <div class="col-lg-6">
                 <div class="form-group">
                   <label class="form-control-label">Banner Main Heading: <span class="tx-danger">*</span></label>
                   <input class="form-control" type="text" wire:model="Heading"  placeholder="Heading">
                   @error('Heading')<span class="text-danger"> {{$message}}</span>  @enderror  
                 
               </div>
               </div><!-- col-4 -->
               <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Banner Title: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" wire:model="Title"  placeholder="Banner Title">
                  @error('Title')<span class="text-danger"> {{$message}}</span>  @enderror  
              </div>
              </div><!-- col-4 -->
               {{-- <div class="col-lg-12">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Banner Paragraph: <span class="tx-danger">*</span></label>
                    <textarea class="form-control"   wire:model="BannerParagaph"> 
            
                    </textarea>
                    @error('BannerParagaph')<span class="text-danger"> {{$message}}</span>  @enderror  
    
                  </div>
                </div><!-- col-4 --> --}}
      
                 <div class="col-lg-6">
                   <div class="form-group">
                     <label class="form-control-label">Button text: </label>
                     <input class="form-control" type="text" wire:model="buttonText"  placeholder="Button text">
                     @error('buttonText')<span class="text-danger"> {{$message}}</span>  @enderror  
                  
                   </div>
                 </div><!-- col-4 -->

                 <div class="col-lg-6">
                  @if($showcustomDiv)
                  <div class="form-group">
                    <label class="form-control-label"> Custom link : </label>
                    <input class="form-control" type="url" wire:model="button_link"  placeholder="https://www.example.com/ ">
                    @error('button_link')<span class="text-danger"> {{$message}}</span>  @enderror  
                  </div>
                  @else
                  <div class="form-group">
                    <label class="form-control-label">Button link: </label>
                    {{-- <input class="form-control" type="url" wire:model="button_link"  placeholder="https://www.example.com/  "> --}}
                    <select class="form-control" data-placeholder="Choose Section" wire:model="button_link" aria-hidden="true" 
                    onchange='Livewire.emit("editSection", this.value)'
                    >
                       <option label="Choose Page link "></option>
                     @if(isset($getRouteList))
                     @foreach($getRouteList as $key => $val)
                       <option value="{{$val->id}}"> {{$key+1}}) {{ucwords($val->route_name)}}</option>
                       @endforeach
                  
                       @endif
                     </select>

                    @error('button_link')<span class="text-danger"> {{$message}}</span>  @enderror  
                 
                  </div>
              @endif
                  <div class="form-group">
                    <input type="checkbox"  class=""   wire:click="$toggle('showcustomDiv')">
                    <label class="form-control-label">Would you like to add Custom link ?<span class="tx-danger">*</span></label>
                  </div>
                </div><!-- col-4 -->
            @if(!$showcustomDiv)
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
                @else
                @endif

             

                 <!-- crop image col-12 -->
             <div class="col-lg-12">
 
              <label class="form-control-label">  Banner Image For Desktop:   <span class="tx-danger">*</span></label><br>
              <div class="row croper_sec">
        
                  <div class="col-md-12">
                    <div class="image_area">
                      <form method="post">
                        <label for="uploadallBannerImg" class="cabinet uploadStyle ">  
                          <img src="{{(isset($this->bannerImage))? asset('storage/All-banner/'.$this->bannerImage):asset('no_image.jpg')}}" id="uploaded_image"  class="wd-- img-responsive img-fluid rounded"
                           wire:ignore  style="max-height: auto ; width:200px;"/> 
                          <span>Upload Banner Image</span>                          
                          <input type="file" name="image" class="image" id="uploadallBannerImg"  />
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
                                        <img src="" id="editallBannerImg" />
                                    </div>
                                    <div class="col-md-4 ">
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
         
              @error('bannerCropedImg')<span class="text-danger"> {{$message}}</span>  @enderror  
          
          </div>
          <!-- crop image col-12 -->

                   {{-- tablet --}}
                   <div class="col-lg-12">
                    <label class="form-control-label"> Banner Image For Tablet:   <span class="tx-danger"> *</span></label><br>
                      <div class="row croper_sec">
                        <div class="col-md-12">
                          <div class="image_area">
                            <form method="post">
                              <label for="upload_editallBannerImg2" class="cabinet uploadStyle ">  
                                <img src="{{(isset($this->tablet_banner))? asset('storage/All-banner/'.$this->tablet_banner):asset('no_image.jpg')}}" id="uploaded_img2"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                <span>Upload Image</span>                          
                                <input type="file" name="image" class="image" id="upload_editallBannerImg2"  />
                              </label>
                            </form>
                          </div>
                        </div>
                    @error('updateCropedImg2')<span class="text-danger"> {{$message}}</span>  @enderror  
      
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
                                          <img src="" id="editallBannerImg2" />
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
                  <div class="col-lg-12">
                    <label class="form-control-label"> Banner Image For Mobile:   <span class="tx-danger"> *</span></label><br>
                      <div class="row croper_sec">
                        <div class="col-md-12">
                          <div class="image_area">
                            <form method="post">
                              <label for="upload_editallBannerImg3" class="cabinet uploadStyle ">  
                                <img src="{{(isset($this->mobile_banner))? asset('storage/All-banner/'.$this->mobile_banner):asset('no_image.jpg')}}"" id="uploaded_img3"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                <span>Upload Image</span>                          
                                <input type="file" name="image" class="image" id="upload_editallBannerImg3"  />
                              </label>
                            </form>
                          </div>
                        </div>
                    @error('updateCropedImg3')<span class="text-danger"> {{$message}}</span>  @enderror  
      
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
                                          <img src="" id="editallBannerImg3" />
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
               <button class="btn btn-info mg-r-5" type="submit" wire:loading.attr="disabled">Update Banner</button>
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
      var image = document.getElementById('editallBannerImg');
      var cropper;
    
      //$("body").on("change", ".image", function(e){
      $('#uploadallBannerImg').change(function(event){
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

            Livewire.emit('updateAllBannerImg',base64data)
      
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
        var image = document.getElementById('editallBannerImg2');
        var cropper;
      
      
        $('#upload_editallBannerImg2').change(function(event){
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
  
              Livewire.emit('updateAllBannerImg2',  base64data)
        
              $modal.modal('hide');
              $('#uploaded_img2').attr('src', base64data);
              
                
                 }
            });
          });
        
      });
    </script>
    <script>
      $(document).ready(function(){
        var $modal = $('#modal3');
        var image = document.getElementById('editallBannerImg3');
        var cropper;
      
      
        $('#upload_editallBannerImg3').change(function(event){
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
  
              Livewire.emit('updateAllBannerImg3',  base64data)
        
              $modal.modal('hide');
              $('#uploaded_img3').attr('src', base64data);
              
                
                 }
            });
          });
        
      });
    </script>
</div>
