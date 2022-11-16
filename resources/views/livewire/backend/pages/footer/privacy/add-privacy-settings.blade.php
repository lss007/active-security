<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Privacy Settings </h5>
      
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">
                <a href="{{route('view_privacy_settings')}}" class="btn btn-teal active mg-b-10">
                  Back </a>
               
              </h6>
  
            <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
              <div class="card">
             

              
                <div class="card-header" role="tab" id="headingOne">
                  <h6 class="mg-b-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                       Add Top Paragraph text
                    </a>
                  </h6>
                </div><!-- card-header -->
             
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
               
                  <div class="card-body">
                    <form  wire:submit.prevent="storePrivacyPara">
                        <div class="form-layout">
                          <div class="row mg-b-25">
                       
                          
                             <div class="col-lg-12">
                               <div class="form-group mg-b-10-force">
                                 <label class="form-control-label"> Paragraph : <span class="tx-danger">*</span></label>
                                 <textarea class="form-control"  rows="5"  wire:model="paragraph" placeholder=" Paragraph.. "></textarea>
                                 @error('paragraph')<span class="text-danger"> {{$message}}</span>  @enderror  
                 
                               </div>
                             </div><!-- col-4 -->
                             <div class="col-lg-12">
                                <div class="form-group">
                                  <label class="form-control-label"> Title : <span class="tx-danger">*</span></label>
                                     <input class="form-control" type="text" wire:model="title"  placeholder="Title">
                                     @error('title')<span class="text-danger"> {{$message}}</span>  @enderror  
                                
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
                </div>
             

              </div>
             
    
            </div><!-- accordion -->
          </div><!-- card -->
        
 
       {{-- card end  --}}
    </div>
</div>
