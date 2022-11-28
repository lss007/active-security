<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5> {{__('dashboard.Add Clients')}}</h5>
      
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> 
            <a href="{{route('viewHomeclients')}}" class="btn btn-teal active mg-b-10" >Back</a>
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
                  <div class="col-lg-12">
                   <div class="form-group">
                     <label class="form-control-label">Choose Client Image: <span class="tx-danger">*</span></label>
                     <input type="file" class="form-control"   wire:model="image"  multiple>
                   @error('image')<span class="text-danger"> {{$message}}</span>  @enderror  
                   </div>
             
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



