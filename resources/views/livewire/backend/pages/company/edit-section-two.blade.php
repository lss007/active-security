<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Update Company Section 2</h5>
      
        </div><!-- sl-page-title -->


        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
            <a href="{{route('viewCompanySections2')}}" class="btn btn-teal active mg-b-10" >Back</a>
          </h6>
      
          <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
           
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                    Add Company Section 2
                  </a>
                </h6>
              </div><!-- card-header -->

              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body">
                  <form  wire:submit.prevent="updatesections">
                    <div class="form-layout">
                      <div class="row mg-b-25">
             
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label">Select Section Number: <span class="tx-danger">*</span></label>
                              <select class="form-control" data-placeholder="Choose Section" wire:model="section_id" aria-hidden="true">
                                <option label="Choose Section"></option>
                                <option value="2">Section 2</option>
                                <option value="3">Section 3</option>
                              </select>
                             @error('section_id')<span class="text-danger"> {{$message}}</span>  @enderror  
        
                            </div>
                        </div>   


                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label"> Name : <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" wire:model="name"  placeholder="Name ">
                            @error('name')<span class="text-danger"> {{$message}}</span>  @enderror  
                          
                        </div>
                        </div><!-- col-4 -->
                  
                        <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label"> Email : <span class="tx-danger">*</span></label>
                              <input class="form-control" type="text" wire:model="email"  placeholder="email ">
                              @error('email')<span class="text-danger"> {{$message}}</span>  @enderror  
                            
                          </div>
                          </div><!-- col-4 -->
       
                          

                          
                        <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label"> Position : <span class="tx-danger">*</span></label>
                                <select class="form-control" data-placeholder="Choose Section" wire:model="position" aria-hidden="true">
                                <option label="Choose Section"></option>
                                <option value="Inhaber">Inhaber </option>
                                <option value="Bereichsleitung">Bereichsleitung</option>
                              </select>
                              @error('position')<span class="text-danger"> {{$message}}</span>  @enderror  
                            
                          </div>
                          </div><!-- col-4 -->
                         <div class="col-lg-4">
                           <div class="form-group">
                             <label class="form-control-label"> Department : <span class="tx-danger">*</span></label>
                             <input class="form-control" type="text" wire:model="department"  placeholder="Department">
                             @error('department')<span class="text-danger"> {{$message}}</span>  @enderror  
                           
                         </div>
                         </div><!-- col-4 -->
       
                         <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label"> Heading : <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" wire:model="heading"  placeholder="Heading">
                                 @error('heading')<span class="text-danger"> {{$message}}</span>  @enderror  
                            
                            </div>
                          </div><!-- col-4 -->
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label"> Title : <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" wire:model="title"  placeholder="Title">
                                 @error('title')<span class="text-danger"> {{$message}}</span>  @enderror  
                            
                            </div>
                          </div><!-- col-4 -->
                         <div class="col-lg-12">
                           <div class="form-group mg-b-10-force">
                             <label class="form-control-label">Section Paragraph 1: <span class="tx-danger">*</span></label>
                             <textarea class="form-control"  rows="5"  wire:model="para1" placeholder="Section paragraph 1"></textarea>
                             @error('para1')<span class="text-danger"> {{$message}}</span>  @enderror  
             
                           </div>
                         </div><!-- col-4 -->
       
                         <div class="col-lg-12">
                           <div class="form-group mg-b-10-force">
                             <label class="form-control-label">Section Paragraph 2: <span class="tx-danger">*</span></label>
                             <textarea class="form-control" rows="5"   wire:model="para2" placeholder="Section paragraph 2"></textarea>
                             @error('para2')<span class="text-danger"> {{$message}}</span>  @enderror  
             
                           </div>
                         </div><!-- col-4 -->
                         @if($section_id == 2)

                   
                         <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                              <label class="form-control-label">Section Paragraph 3: <span class="tx-danger">*</span></label>
                              <textarea class="form-control" rows="5"   wire:model="para3" placeholder="Section paragraph 3"></textarea>
                              @error('para3')<span class="text-danger"> {{$message}}</span>  @enderror  
              
                            </div>
                          </div><!-- col-4 -->
                          @endif
       
                    
                          <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                              <label class="form-control-label"> Choose Profile Image : <span class="tx-danger">*</span></label><br>
                              <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" wire:model="newprofile" >
                                <span class="custom-file-control"></span>
                              </label>
                            </div>
                            
                            @if(isset($newprofile)) <img id="output" src="{{$newprofile->temporaryUrl()}}" width="200" > @endif
                            @error('profile_img')<span class="text-danger"> {{$message}}</span>  @enderror  
                        
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
                    Horizontal Navigation Menu Fold Animation
                  </a>
                </h6>
              </div>
              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
                </div>
              </div>
            </div>
            <div class="card d-none">

              <div class="card-header" role="tab" id="headingThree">
                <h6 class="mg-b-0">
                  <a class="collapsed transition" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Creating CSS3 Button with Rounded Corners
                  </a>
                </h6>
              </div>
              <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
                </div>
              </div><!-- collapse -->
            </div><!-- card -->
          </div><!-- accordion -->
        </div><!-- card -->
        
 
       {{-- card end  --}}
    </div>
</div>
