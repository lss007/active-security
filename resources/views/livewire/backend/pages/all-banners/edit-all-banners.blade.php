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
                  <div class="form-group">
                    <label class="form-control-label">Button link: </label>
                    <input class="form-control" type="url" wire:model="button_link"  placeholder="https://www.example.com/  ">
                    @error('button_link')<span class="text-danger"> {{$message}}</span>  @enderror  
                 
                  </div>
                </div><!-- col-4 -->
            
                 {{-- <div class="col-lg-12">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label"> Banner Image:  : <span class="tx-danger">*</span></label><br>
                    <label class="custom-file">
                      <input type="file" id="file" class="custom-file-input" wire:model="NewBanner" >
                      <span class="custom-file-control"></span>
                    </label>
                  </div>
                  <img class="img-fluid {{isset($NewBanner) ? 'd-none' :  ''}}" src="{{(!empty($this->bannerImage)) 
                    ? asset('storage/All-banner/'.$this->bannerImage):asset('no_image.jpg')}}" width="200" >
          
                    @if(isset($NewBanner)) 
                       <img id="output" src="{{$NewBanner->temporaryUrl()}}" width="200" >
                    @endif
                </div><!-- col-4 --> --}}

             

                 <!-- crop image col-12 -->
             <div class="col-lg-12">
 
              <label class="form-control-label"> Update Banner Image:   <span class="tx-danger">*</span></label><br>
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
</div>
