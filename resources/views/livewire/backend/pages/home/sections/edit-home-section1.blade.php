<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Update Home Section one')}}</h5>
      
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
                      <input type="file" class="form-control"   wire:model="main_img" >
                    @error('main_img')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>
                    {{-- for hidden old image if change   --}}
                    @if(isset($main_img))
                    @else

                    <img class="img-fluid " src="{{(!empty($this->main_image)) 
                      ? asset('storage/Home-section/'.$this->main_image):asset('no_image.jpg')}}" width="200" >
                     
                    @endif
                    {{-- for hidden old image if change   --}}


                    @if(isset($main_img))
                         <img src="{{$main_img->temporaryUrl()}}" width="200"  class="img-fluid">
                     @endif
                </div><!-- col-4 -->

                <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label">logo Image one: <span class="tx-danger">*</span></label>
                      <input type="file" class="form-control"   wire:model="logoImg1"  accept="image/*">
                    @error('logoImg1')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>
                    <img class="img-fluid {{isset($logoImg1) ? 'd-none' :  ''}}" src="{{(!empty($this->logo1)) 
                      ? asset('storage/Home-section/'.$this->logo1):asset('no_image.jpg')}}" width="100" >
                    @if(isset($logoImg1))
                    <img src="{{$logoImg1->temporaryUrl()}}" width="100"  class="img-fluid">
                    @endif
                
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label">logo Image two: <span class="tx-danger">*</span></label>
                      <input type="file" class="form-control"   wire:model="logoImg2"  accept="image/*">
                    @error('logoImg2')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>
                    <img class="img-fluid {{isset($logoImg2) ? 'd-none' :  ''}}" src="{{(!empty($this->logo2)) 
                      ? asset('storage/Home-section/'.$this->logo2):asset('no_image.jpg')}}" width="100" >
                    @if(isset($logoImg2))
                    <img src="{{$logoImg2->temporaryUrl()}}" width="100"  class="img-fluid">
                    @endif
                
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label">logo Image three: <span class="tx-danger">*</span></label>
                      <input type="file" class="form-control"   wire:model="logoImg3"  accept="image/*">
                    @error('logoImg3')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>

                    <img class="img-fluid {{isset($logoImg3) ? 'd-none' :  ''}}" src="{{(!empty($this->logo3)) 
                      ? asset('storage/Home-section/'.$this->logo3):asset('no_image.jpg')}}" width="100" >
                   
                    @if(isset($logoImg3))
                    <img src="{{$logoImg3->temporaryUrl()}}" width="100"  class="img-fluid">
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
