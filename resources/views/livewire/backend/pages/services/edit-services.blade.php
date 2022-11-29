<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Update Services page')}} </h5>
      
        </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> 
            <a href="{{route('view_services')}}" class="btn btn-teal active mg-b-10"  >Back</a>
        </h6>
        <form  wire:submit.prevent="updateServiceSection">
             <div class="form-layout">
               <div class="row mg-b-25">

                <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">Select Page Category: <span class="tx-danger">*</span></label>
                      <select class="form-control" data-placeholder="Choose Category" wire:model="page_cat_id" aria-hidden="true">
                        <option label="Choose Category"></option>
                        @if(isset($pageCategory) && count($pageCategory )> 0)
                        @foreach($pageCategory as $key => $getcat)

                        <option value="{{$getcat->id}}">{{ucwords($getcat->page_cat_name)}}</option>

                        @endforeach
                        @endif
                   

                      </select>
                     @error('page_cat_id')<span class="text-danger"> {{$message}}</span>  @enderror  

                    </div>
                </div>     

                 <div class="col-lg-6">
                   <div class="form-group">
                     <label class="form-control-label">Heading: <span class="tx-danger">*</span></label>
                     <input class="form-control" type="text" wire:model="heading"  placeholder="Section Heading">
                     @error('heading')<span class="text-danger"> {{$message}}</span>  @enderror  
                 </div>
                 </div><!-- col-4 -->
                 <div class="col-lg-12">
                   <div class="form-group">
                     <label class="form-control-label"> Title : <span class="tx-danger">*</span></label>
                     <input class="form-control" type="text" wire:model="title"  placeholder="Section Title ">
                     @error('title')<span class="text-danger"> {{$message}}</span>  @enderror  
                   
                 </div>
                 </div><!-- col-4 -->
           
                 <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Section Paragraph 1: <span class="tx-danger">*</span></label>
                      <textarea class="form-control" rows="5"   wire:model="para1" placeholder="Add Section paragraph 1... "></textarea>
                      @error('para1')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Section Paragraph 2: <span class="tx-danger">*</span></label>
                      <textarea class="form-control" rows="5"   wire:model="para2" placeholder="Add Section paragraph 2..."></textarea>
                      @error('para2')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->

               
                  <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Section Paragraph 3: <span class="tx-danger">*</span></label>
                      <textarea class="form-control" rows="5"  wire:model="para3" placeholder="Add Section paragraph 3..."></textarea>
                      @error('para3')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->


                  <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Section Paragraph 4: <span class="tx-danger">*</span></label>
                      <textarea class="form-control" rows="5"  wire:model="para4" placeholder="Add Section paragraph 4... "></textarea>
                      @error('para4')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->


                  <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Section Paragraph 5: <span class="tx-danger">*</span></label>
                      <textarea class="form-control" rows="5"  wire:model="para5" placeholder="Add Section paragraph 5 optional ... "></textarea>
                      @error('para5')<span class="text-danger"> {{$message}}</span>  @enderror  
      
                    </div>
                  </div><!-- col-4 -->

           
                 
                <div class="col-lg-12">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label"> Choose Section Image : <span class="tx-danger">*</span></label><br>
                  
                    <label class="custom-file">
                      <input type="file" id="file" class="custom-file-input" wire:model="newImg" >
                      <span class="custom-file-control"></span>
                    </label>

           
                  </div>
                  <img class="img-fluid {{isset($newImg) ? 'd-none' :  ''}}" src="{{(!empty($this->sec_image)) 
                    ? asset('storage/services-section/'.$this->sec_image):asset('no_image.jpg')}}" width="100" >
                 
                  @if(isset($newImg)) <img id="output" src="{{$newImg->temporaryUrl()}}" width="200" > @endif
                  @error('newImg')<span class="text-danger"> {{$message}}</span>  @enderror  
              
              </div><!-- col-4 -->
          
     
               </div><!-- row -->
     
               <div class="form-layout-footer">
                 <button class="btn btn-info mg-r-5" type="submit" wire:loading.attr="disabled">Update Service Section</button>
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
