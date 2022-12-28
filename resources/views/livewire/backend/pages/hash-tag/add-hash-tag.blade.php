<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Hash Tag </h5>
  
        </div><!-- sl-page-title -->
  
    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">  
            <a href="{{route('view_Allhashtag')}}" class="btn btn-teal active mg-b-10"  >Back</a>
        </h6>
        <form  wire:submit.prevent="saveHashtag">
             <div class="form-layout">
               <div class="row mg-b-25">
                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force" wire:ignore>
                      <label class="form-control-label"> Section Page Name : <span class="tx-danger">*</span></label>
                      <select  class="form-control" wire:model="pageId" >
                        <option selected class="form-control">Choose Page Category </option>
                        @if(isset($getPageCategory))
                            @foreach($getPageCategory as  $Key => $category )
                                <option value="{{$category->id}}"  class="form-control">{{$Key+1 }}) {{ucwords($category->route_name)	}}</option>
                            @endforeach
                        @endif
                      </select>
                      
                    </div>
                    @error('pageId')<span class="tx-danger"> {{$message}}</span>  @enderror  
                </div><!-- col-4 -->
            
        
                   <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">Total number of  Section: </label>
                      <input class="form-control" type="text" wire:model="sectionId"  placeholder="Total Section">
                      
                    </div>
                    @error('sectionId')<span class="text-danger"> {{$message}}</span>  @enderror  
                  </div><!-- col-4 -->
              
            
  
               
  
    
          
     
               </div><!-- row -->
     
               <div class="form-layout-footer">
                 <button class="btn btn-info mg-r-5" type="submit" wire:loading.attr="disabled">Update </button>
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
  