<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Manage Footer and Top Navbar Section logo </h5>
    
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
      
   
        <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
                <h6 class="card-body-title"> 
                    <a href="{{route('view_footer_logos')}}" class="btn btn-teal active mg-b-10">Back</a>
                </h6>
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                    Add Social Media Link and logo 
                 
                  </a>
                </h6>
              </div><!-- card-header -->

              <form  wire:submit.prevent="updateFooterlogo">
                <div class="form-layout">
                  <div class="row mg-b-25">
           
              
            
                    <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label"> Section Name : <span class="tx-danger">*</span></label>
                          <select  class="form-control" wire:model="name" >
                

                            <option value="navbar"  class="form-control">Navbar</option>
                            <option value="footer" class="form-control">Footer</option>
                          </select>
                          @error('name')<span class="text-danger"> {{$message}}</span>  @enderror  
                        
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group mg-b-10-force">
                          <label class="form-control-label">Choose Logo image : <span class="tx-danger">*</span></label><br>
                          <label class="custom-file">
                            <input type="file" id="file" class="custom-file-input" wire:model="new_logo" width="100"  >
                            <span class="custom-file-control"></span>
                          </label>
                        </div>

                        <img class="img-fluid {{isset($new_logo) ? 'd-none' :  ''}}" src="{{isset($this->logo_img)
                            ? asset('storage/footer-logo/'.$this->logo_img):asset('no_image.jpg')}}" width="100" >
                         
                          @if(isset($new_logo))
                          <img src="{{$new_logo->temporaryUrl()}}" width="100"  class="img-fluid">
                          @endif
                          @error('new_logo')<span class="text-danger"> {{$message}}</span>  @enderror  
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
    {{-- ========================================================================================== --}}
           
    
          </div><!-- accordion -->

        </div><!-- card -->
        
      </div><!-- sl-pagebody -->


      <!-- modal -->
</div>


{{-- ================== --}}
