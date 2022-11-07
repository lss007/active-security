<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Update  Home Banner</h5>
          <p>Update Home page Banner Image or text  </p>
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> Update Banner  
            <a href="{{route('viewHomebanner')}}" class="btn btn-sm btn-success" style="float: right;" >Back</a>
        </h6>
        <form  wire:submit.prevent="updateHomeBanner">
             <div class="form-layout">
               <div class="row mg-b-25">
                 <div class="col-lg-6">
                   <div class="form-group">
                     <label class="form-control-label">Main Title: <span class="tx-danger">*</span></label>
                     <input class="form-control" type="text" wire:model="mainTitle"  placeholder="Main Title">
                     @error('mainTitle')<span class="text-danger"> {{$message}}</span>  @enderror  
                 </div>
                 </div><!-- col-4 -->
                 <div class="col-lg-6">
                   <div class="form-group">
                     <label class="form-control-label">Main Subtitle: <span class="tx-danger">*</span></label>
                     <input class="form-control" type="text" wire:model="mainSubTitle"  placeholder="Main Subtitle ">
                     @error('mainSubTitle')<span class="text-danger"> {{$message}}</span>  @enderror  
                   
                 </div>
                 </div><!-- col-4 -->
                 <div class="col-lg-12">
                   <div class="form-group">
                     <label class="form-control-label">Heading: <span class="tx-danger">*</span></label>
                     <input class="form-control" type="text" wire:model="heading"  placeholder="Heading">
                     @error('heading')<span class="text-danger"> {{$message}}</span>  @enderror  
                   
                 </div>
                 </div><!-- col-4 -->
                 <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Banner Paragraph: <span class="tx-danger">*</span></label>
                      <textarea class="form-control"   wire:model="bannerParagaph"> 
              
                      </textarea>
                      @error('bannerParagaph')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->
        
                   <div class="col-lg-4">
                     <div class="form-group">
                       <label class="form-control-label">Button text: <span class="tx-danger">*</span></label>
                       <input class="form-control" type="text" wire:model="buttonText"  placeholder="Button text">
                       @error('buttonText')<span class="text-danger"> {{$message}}</span>  @enderror  
                    
                     </div>
                   </div><!-- col-4 -->
                   <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Button link: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="url" wire:model="button_link"  placeholder="Button link">
                      @error('button_link')<span class="text-danger"> {{$message}}</span>  @enderror  
                   
                    </div>
                  </div><!-- col-4 -->
                   <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Banner Image: <span class="tx-danger">*</span></label>
                      <input type="file" class="form-control"   wire:model="banner_Image" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" accept="image/*">
                    @error('banner_Image')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>
                    @if(isset( $this->bannerImage))

                    <img id="output" src="{{asset('storage/Home-banner/'.$this->bannerImage)}}" width="200" height="50">
                  @endif
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
