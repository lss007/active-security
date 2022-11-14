<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5> Home Section one</h5>
      
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> Home Section 
            <a href="{{route('manageHomeSection1')}}" class="btn btn-sm btn-success" style="float: right;" >Back</a>
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
 
                <div class="col-lg-3">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label"> Main Image:  : <span class="tx-danger">*</span></label><br>
                    <label class="custom-file">
                      <input type="file" id="file" class="custom-file-input" wire:model="main_image" >
                      <span class="custom-file-control"></span>
                    </label>
                  </div>
                  @error('main_image')<span class="text-danger"> {{$message}}</span>  @enderror  

                  <img class="img-fluid" src="{{(isset($this->main_image)) 
                    ? $main_image->temporaryUrl() :asset('no_image.jpg')}}" width="150" >
                </div><!-- col-4 -->
            
                {{-- logo 1 --}}
                <div class="col-lg-3">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label"> logo 1 Image:  : <span class="tx-danger">*</span></label><br>
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
</div>
