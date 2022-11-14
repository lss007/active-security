<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5> Edit and Update Home Section Slider</h5>
      
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Edit Home Section Slider 
            <a href="{{route('viewHomesliders')}}" class="btn btn-sm btn-success" style="float: right;" >Back</a>
        </h6>
        <form  wire:submit.prevent="updateHomeSlider">
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label">Slider Title: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" wire:model="title"  placeholder="Slider Title">
                    @error('title')<span class="text-danger"> {{$message}}</span>  @enderror  
                </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label">Slider Description : <span class="tx-danger">*</span></label>
                    <textarea class="form-control" type="text" wire:model="description"  placeholder="Slider Description">
                    </textarea>
                    @error('description')<span class="text-danger"> {{$message}}</span>  @enderror  
                  </div>
                </div><!-- col-4 -->

               <div class="col-lg-6">
                 <div class="form-group">
                    <label class="form-control-label"> Button Name : </label>
                    <input class="form-control" type="text" wire:model="button_text"  placeholder="Button Name ">
                    @error('button_text')<span class="text-danger"> {{$message}}</span>  @enderror  
                  </div>
               </div><!-- col-4 -->
        
          
                
               <div class="col-lg-12">
                 <div class="form-group mg-b-10-force">
                    <label class="form-control-label"> Slider Image : <span class="tx-danger">*</span></label><br>
                      <label class="custom-file">
                          <input type="file" id="file" class="custom-file-input" wire:model="newImage" >
                          <span class="custom-file-control"></span>
                        </label>
                 </div>
                 <img class="img-fluid {{isset($newImage) ? 'd-none' :  ''}}" src="{{(!empty($this->image)) 
                    ? asset('storage/Home-slider/'.$this->image):asset('no_image.jpg')}}" width="100" >
                 
                  @if(isset($newImage))  
                  <img  src="{{$newImage->temporaryUrl()}}" width="200" > 
                  @endif
                 @error('newImage')<span class="text-danger"> {{$message}}</span>  

                 @enderror  
             </div><!-- col-4 -->
         
        
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
</div>









