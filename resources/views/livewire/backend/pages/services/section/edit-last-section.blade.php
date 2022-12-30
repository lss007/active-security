<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Update Optimal Security  Section')}} </h5>
      
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> 
            <a href="{{route('view_last_section')}}" class="btn btn-teal active mg-b-10"  >Back</a>
        </h6>
        <form  wire:submit.prevent="updateLastSection">
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
                    <label class="form-control-label"> Botton  Name: optional</label>
                    <input class="form-control" type="text" wire:model="button"  placeholder="button Name  ">
                    @error('button')<span class="text-danger"> {{$message}}</span>  @enderror  
                  
                </div>
                </div><!-- col-4 -->


                <div class="col-lg-6">
                  @if($showDiv)
                  <div class="form-group">
                    <label class="form-control-label"> Custom link : </label>
                    <input class="form-control" type="url" wire:model="link"  placeholder="https://www.example.com/ ">
                    @error('link')<span class="text-danger"> {{$message}}</span>  @enderror  
                  </div>
                  @else
                  <div class="form-group">
                    <label class="form-control-label"> Button Link  : optional</label>
                    {{-- <input class="form-control" type="text" wire:model="link"  placeholder="button link  "> --}}
                    <select class="form-control" data-placeholder="Choose Section" wire:model="link" aria-hidden="true" >
                      <option label="Choose Page link "></option>
                    @if(isset($getRouteList))
                    @foreach($getRouteList as $key => $val)
                      <option value="{{$val->id}}"> {{$key+1}}) {{ucwords($val->route_name)}}</option>
                      @endforeach
                      {{-- <option value="custom" class="text-danger">Custom link</option> --}}
                      @endif
                    </select>
                    @error('link')<span class="text-danger"> {{$message}}</span>  @enderror  
                  
                </div>
                @endif
                <div class="form-group">
                  <input type="checkbox"  class=""   wire:click="$toggle('showDiv')">
                  <label class="form-control-label">Would you like to add Custom link ?<span class="tx-danger">*</span></label>
                </div>
                </div><!-- col-4 -->
                @if(!$showDiv)
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Hash Tag section <span class="tx-danger">*</span></label>
                        <select class="form-control" data-placeholder="Choose Tag" wire:model="hashTag" aria-hidden="true">
                          <option label="Choose Tag"></option>
                              @if(isset($gethashtag))
                              @foreach($gethashtag as $key => $val)
                              <option value="{{$val->section_id}}"> {{$key+1}}) Section {{ucwords($val->section_id)}}</option>
                              @endforeach
                              {{-- <option value="custom" class="text-danger">Custom link</option> --}}
                              @endif
                        </select>
                    @error('hashTag')<span class="text-danger"> {{$message}}</span>  @enderror  
                  </div>
                </div>
                @else
                @endif

               </div><!-- row -->
     
               <div class="form-layout-footer">
                 <button class="btn btn-info mg-r-5" type="submit" wire:loading.attr="disabled">Update Last Section</button>
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
