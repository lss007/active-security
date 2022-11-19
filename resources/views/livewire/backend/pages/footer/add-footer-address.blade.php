<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Contact Address</h5>
      
        </div><!-- sl-page-title -->
       
    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> 
            <a href="{{route('footer_address')}}" class="btn btn-sm btn-success"  >Back</a>
        </h6>
     
       

       <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h6 class="mg-b-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                Add Footer Contact Address
              </a>
            </h6>
          </div><!-- card-header -->

          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
                <form  wire:submit.prevent="storeFooterContact">
                    <div class="form-layout">
                      <div class="row mg-b-25">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" wire:model="name"  placeholder="Name">
                            @error('name')<span class="text-danger"> {{$message}}</span>  @enderror  
                        </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">Vat ID: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" wire:model="vatid"  placeholder="Vat ID">
                            @error('vatid')<span class="text-danger"> {{$message}}</span>  @enderror  
                        </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">Telefon: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" wire:model="telefon"  placeholder="telefon">
                            @error('telefon')<span class="text-danger"> {{$message}}</span>  @enderror  
                        </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label"> Fax : <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" wire:model="fax"  placeholder="fax ">
                            @error('fax')<span class="text-danger"> {{$message}}</span>  @enderror  
                          
                        </div>
                        </div><!-- col-4 -->
                  
                        <div class="col-lg-12">
                           <div class="form-group">
                             <label class="form-control-label"> Email : <span class="tx-danger">*</span></label>
                             <input class="form-control" type="email" wire:model="email"  placeholder="email ">
                             @error('email')<span class="text-danger"> {{$message}}</span>  @enderror  
                           
                         </div>
                         </div><!-- col-4 -->
                         <div class="col-lg-12">
                           <div class="form-group mg-b-10-force">
                             <label class="form-control-label">Footer Contact Address: <span class="tx-danger">*</span></label>
                             <textarea class="form-control"   wire:model="address" placeholder="Contact address"></textarea>
                             @error('address')<span class="text-danger"> {{$message}}</span>  @enderror  
             
                           </div>
                         </div><!-- col-4 -->
       
       
                       <div class="col-lg-12">
                         <div class="form-group mg-b-10-force">
                           <label class="form-control-label">Footer Logo Image : <span class="tx-danger">*</span></label><br>
                           <label class="custom-file">
                             <input type="file" id="file" class="custom-file-input" wire:model="logo" >
                             <span class="custom-file-control"></span>
                           </label>
                         </div>
                                @if(isset($logo)) <img id="output" src="{{$logo->temporaryUrl()}}" width="200" > @endif
                                @error('logo')<span class="text-danger"> {{$message}}</span>  @enderror  
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
    </div> 
       {{-- card end  --}}
    </div>
</div>




