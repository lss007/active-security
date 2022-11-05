<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Update Home Section one</h5>
      
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Update Home Section 
            <a href="{{route('manageHomeSection1')}}" class="btn btn-sm btn-success" style="float: right;" >Back</a>
        </h6>
        <form  wire:submit.prevent="updateHomeSection1">
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
                    <div class="form-group">
                      <label class="form-control-label">Main Image : <span class="tx-danger">*</span></label>
                      <input type="file" class="form-control"   wire:model="mainimage" >
                    @error('mainimage')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>
                    @if(isset($mainimage)) <img id="output" src="{{$mainimage->temporaryUrl()}}" width="200" > @endif
                
                </div><!-- col-4 -->

                <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label">logo Image one: <span class="tx-danger">*</span></label>
                      <input type="file" class="form-control"   wire:model="logoimg1"  accept="image/*">
                    @error('logoimg1')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>
                    @if(isset($logoimg1)) <img id="output" src="{{$logoimg1->temporaryUrl()}}" width="100" > @endif
                
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label">logo Image two: <span class="tx-danger">*</span></label>
                      <input type="file" class="form-control"   wire:model="logoimg2"  accept="image/*">
                    @error('logoimg2')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>
                    @if(isset($logoimg2)) <img id="output" src="{{$logoimg2->temporaryUrl()}}" width="100" > @endif
                
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label">logo Image three: <span class="tx-danger">*</span></label>
                      <input type="file" class="form-control"   wire:model="logoimg3"  accept="image/*">
                    @error('logoimg3')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>
                    @if(isset($logoimg3)) <img id="output" src="{{$logoimg3->temporaryUrl()}}" width="100" > @endif
                
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
