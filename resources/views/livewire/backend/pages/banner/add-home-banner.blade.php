<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Home page Banner</h5>
          <p>Add  Home page Banner Image or text  </p>
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">  
            <a href="{{route('viewHomebanner')}}" class="btn btn-teal active mg-b-10"  >Back</a>
        </h6>
        <form  wire:submit.prevent="saveHomeBanner">
             <div class="form-layout">
               <div class="row mg-b-25">
              
            
                 <div class="col-lg-12">
                   <div class="form-group">
                     <label class="form-control-label">Banner Main Heading: <span class="tx-danger">*</span></label>
                     <input class="form-control" type="text" wire:model="Heading"  placeholder="Heading">
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
                      <textarea class="form-control"   wire:model="BannerParagaph"> 
              
                      </textarea>
                      @error('BannerParagaph')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->
        
                   <div class="col-lg-4">
                     <div class="form-group">
                       <label class="form-control-label">Button text: </label>
                       <input class="form-control" type="text" wire:model="buttonText"  placeholder="Button text">
                       @error('buttonText')<span class="text-danger"> {{$message}}</span>  @enderror  
                    
                     </div>
                   </div><!-- col-4 -->
                   {{-- <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Button link: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="url" wire:model="button_link"  placeholder="Button link">
                      @error('button_link')<span class="text-danger"> {{$message}}</span>  @enderror  
                   
                    </div>
                  </div><!-- col-4 --> --}}
                   <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Banner Image: <span class="tx-danger">*</span></label>
                      <input type="file" class="form-control"   wire:model="bannerImage" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" accept="image/*">
                    @error('bannerImage')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>
                    @if(isset($bannerImage))
                    <img id="output" src="{{$bannerImage->temporaryUrl()}}" width="200" >
                  @endif
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
</div>
