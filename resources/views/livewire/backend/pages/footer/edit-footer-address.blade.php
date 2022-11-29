<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Update contact address')}}</h5>
      
        </div><!-- sl-page-title -->
       
    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"> 
            <a href="{{route('footer_address')}}" class="btn btn-teal active mg-b-10"  >Back</a>
        </h6>
     
       

       <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h6 class="mg-b-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                {{__('dashboard.Update contact address')}}
              </a>
            </h6>
          </div><!-- card-header -->

          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
                <form  wire:submit.prevent="updateFooterContact">
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
                              <input type="file" id="file" class="custom-file-input" wire:model="newlogo" >
                              <span class="custom-file-control"></span>
                            </label>
                          </div>
                          <img class="img-fluid {{isset($newlogo) ? 'd-none' :  ''}}" src="{{(!empty($this->logo)) 
                             ? asset('storage/footer-logo/'.$this->logo):asset('no_image.jpg')}}" width="100" >
 
                                 @if(isset($newlogo)) <img id="output" src="{{$newlogo->temporaryUrl()}}" width="200" > @endif
                                 @error('logo')<span class="text-danger"> {{$message}}</span>  @enderror  
                      </div><!-- col-4 -->
                      <hr>
                         <div class="col-lg-12 my-3">
                         <div class="card-header">
                          <h6 class="mg-b-0">
                            <a  class="tx-gray-900 transition ">
                             {{__('dashboard.Update footer call, email and whatsapp info:')}}
                            </a>
                          </h6>
                        </div><!-- card-header -->
                         </div>
                         <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label"> Call To  : </label>
                            <input class="form-control" type="text" wire:model="callTo"  placeholder="Call to  ">
                            @error('callTo')<span class="text-danger"> {{$message}}</span>  @enderror  
                          
                        </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label"> Mail  To  : </label>
                            <input class="form-control" type="text" wire:model="mailTo"  placeholder="Mail to  ">
                            @error('mainTo')<span class="text-danger"> {{$message}}</span>  @enderror  
                          
                        </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label"> Whatsapp  To  :</label>
                            <input class="form-control" type="text" wire:model="WhatsappTo"  placeholder="Whatsapp to  ">
                            @error('WhatsappTo')<span class="text-danger"> {{$message}}</span>  @enderror  
                          
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
        <div class="card d-none">
          <div class="card-header" role="tab" id="headingTwo">
            <h6 class="mg-b-0">
              <a class="collapsed transition" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Update Social Media 
              </a>
            </h6>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
                <form  wire:submit.prevent="storeHomeSection2">
                    <div class="form-layout">
                      <div class="row mg-b-25">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">Category : <span class="tx-danger">*</span></label>
                            <select class="form-control " data-placeholder="Choose country"   aria-hidden="true">
                                <option label="Choose country"></option>
                                <option value="linkedin">Linkedin</option>
                                <option value="xing">Xing</option>
                                <option value="instagram">Instagram</option>
                                <option value="facebook">Facebook</option>
                                <option value="twitter">Twitter</option>
                                <option value="pinterest">Pinterest</option>
                                <option value="tumblr">Tumblr</option>
                              </select>
                            @error('category')<span class="text-danger"> {{$message}}</span>  @enderror  
                        </div>
                        </div><!-- col-4 -->
                   
                  
                    
                       
                         <div class="col-lg-6">
                           <div class="form-group">
                             <label class="form-control-label"> Link : <span class="tx-danger">*</span></label>
                             <input class="form-control" type="url" wire:model="link"  placeholder="Social link ">
                             @error('link')<span class="text-danger"> {{$message}}</span>  @enderror  
                           
                         </div>
                         </div><!-- col-4 -->
       
                         <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                              <label class="form-control-label">Social Logo image : <span class="tx-danger">*</span></label><br>
                              <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input"  >
                                <span class="custom-file-control"></span>
                              </label>
                            </div>
                                   
                                   @error('newlogo')<span class="text-danger"> {{$message}}</span>  @enderror  
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
