
<div>
    {{-- Success is as dangerous as failure. --}}


    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Update Submenu')}}  </h5>
        
        </div><!-- sl-page-title -->


    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">  
            <a href="{{route('view_Subnavbar_list')}}" class="btn btn-teal active mg-b-10"  >Back</a>
        </h6>
        <form  wire:submit.prevent="updateSubLinks">
             <div class="form-layout">
               <div class="row mg-b-25">
          
                 <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Select Main Navbar :<span class="tx-danger">*</span></label>
                        <select class="form-control" data-placeholder="Choose Section" wire:model="navbarLink" aria-hidden="true">
                            <option label="Choose Route Name"></option>
                          @if(isset($editNavlink))
                          @foreach($editNavlink as $val)
                            <option value="{{$val->id}}">{{ucwords($val->route_name)}}</option>
                            @endforeach
                            @endif
                          </select>
                        @error('navbarLink')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>
                 </div><!-- col-4 -->
           
                 <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Route Name :<span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" wire:model="routeName"  placeholder="Route Name">
                        @error('routeName')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>
                 </div><!-- col-4 -->
        
              
                   <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">Select Route :<span class="tx-danger">*</span></label>
                        <select class="form-control" data-placeholder="Choose Section" wire:model="link" aria-hidden="true">
                            <option label="Choose Route Name"></option>
                          @if(isset($editRoutelink))
                          @foreach($editRoutelink as $val)
                            <option value="{{$val->id}}">{{ucwords($val->route_name)}}</option>
                            @endforeach
                            {{-- <option value="NULL">Null</option> --}}
                     
                            @endif
                          </select>
                        @error('link')<span class="text-danger"> {{$message}}</span>  @enderror  
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
