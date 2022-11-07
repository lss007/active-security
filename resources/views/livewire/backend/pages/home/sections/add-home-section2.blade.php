<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Home Section Two</h5>
      
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> Home Section 
            <a href="{{route('viewHomeSection2')}}" class="btn btn-sm btn-success" style="float: right;" >Back</a>
        </h6>
        <form  wire:submit.prevent="storeHomeSection2">
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
                    <input class="form-control" type="url" wire:model="buttonLink"  placeholder="Button Name ">
                    @error('buttonLink')<span class="text-danger"> {{$message}}</span>  @enderror  
                  
                </div>
                </div><!-- col-4 -->
                 
                <div class="col-lg-12">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label"> Main Image : <span class="tx-danger">*</span></label><br>
                  
                    <label class="custom-file">
                      <input type="file" id="file" class="custom-file-input" wire:model="Image" >
                      <span class="custom-file-control"></span>
                    </label>

           
                  </div>
                  @if(isset($main_image)) <img id="output" src="{{$main_image->temporaryUrl()}}" width="200" > @endif
                  @error('Image')<span class="text-danger"> {{$message}}</span>  @enderror  
              
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
