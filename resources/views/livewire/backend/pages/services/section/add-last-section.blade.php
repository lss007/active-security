<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Optimal security Section </h5>
      
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> 
            <a href="{{route('view_last_section')}}" class="btn btn-teal active mg-b-10"  >Back</a>
        </h6>
        <form  wire:submit.prevent="storeLastSection">
             <div class="form-layout">
               <div class="row mg-b-25">

             

                 <div class="col-lg-6">
                   <div class="form-group">
                     <label class="form-control-label">Heading: <span class="tx-danger">*</span></label>
                     <input class="form-control" type="text" wire:model="heading"  placeholder="Section Heading">
                     @error('heading')<span class="text-danger"> {{$message}}</span>  @enderror  
                 </div>
                 </div><!-- col-4 -->
                 <div class="col-lg-6">
                   <div class="form-group">
                     <label class="form-control-label"> list 1 : <span class="tx-danger">*</span></label>
                     <input class="form-control" type="text" wire:model="list1"  placeholder="List 1 ">
                     @error('list1')<span class="text-danger"> {{$message}}</span>  @enderror  
                   
                 </div>
                 </div><!-- col-4 -->
          
                 <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label"> list 2 : <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" wire:model="list2"  placeholder="List 2 ">
                    @error('list2')<span class="text-danger"> {{$message}}</span>  @enderror  
                  
                </div>
                </div><!-- col-4 -->

                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label"> list 3 : <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" wire:model="list3"  placeholder="List 3 ">
                    @error('list3')<span class="text-danger"> {{$message}}</span>  @enderror  
                  
                </div>
                </div><!-- col-4 -->


                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label"> list 4 : <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" wire:model="list4"  placeholder="List 4">
                    @error('list4')<span class="text-danger"> {{$message}}</span>  @enderror  
                  
                </div>
                </div><!-- col-4 -->

                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label"> Button name  : optional</label>
                    <input class="form-control" type="text" wire:model="button"  placeholder="button Name  ">
                    @error('button')<span class="text-danger"> {{$message}}</span>  @enderror  
                  
                </div>
                </div><!-- col-4 -->
     

                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label"> Button Link  : optional</label>
                    <input class="form-control" type="text" wire:model="link"  placeholder="button link  ">
                    @error('link')<span class="text-danger"> {{$message}}</span>  @enderror  
                  
                </div>
                </div><!-- col-4 -->
               </div><!-- row -->
     
               <div class="form-layout-footer">
                 <button class="btn btn-info mg-r-5" type="submit" wire:loading.attr="disabled">Publish Last Section</button>
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
