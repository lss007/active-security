<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Privacy Settings Tabs </h5>
      
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">
                <a href="{{route('view_privacy_Tabs')}}" class="btn btn-teal active mg-b-10"> Back </a>
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
                    <form  wire:submit.prevent="storePrivacytab">
                        <div class="form-layout">
                          <div class="row mg-b-25">
                       
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="form-control-label">Select Tab: <span class="tx-danger">*</span></label>
                                  <select class="form-control" data-placeholder="Choose Tab" wire:model="tabs" aria-hidden="true">
                                    <option label="Choose Tab"></option>
                                    @if(isset($privacyMenu))
                                        @foreach($privacyMenu as $key => $val)
                                          <option value="{{ $val->id}}">{{$key+1}} {{$val->name}}</option>
                                        @endforeach
                                    @endif
                                  </select>
                                 @error('tabs')<span class="text-danger"> {{$message}}</span>  @enderror  
                                </div>
                            </div>   


                            {{-- <div class="col-lg-6">
                              <div class="form-group" >
                                <label class="form-control-label">Select Tab: <span class="tx-danger">*</span></label>
                              
                                  @foreach ($privacyMenu as $key =>  $node)                                   
                                    <div class="" >
                                      <label class="ckbox" >
                                        <input type="checkbox" id="{{ $node->id }}" wire:model="tabs.{{$node->id }}" value="{{ $node->id }}" >
                                        <span class="tx-bold">{{ $node->name }} </span>
                                      </label>
                                    </div>
                                   @endforeach
                              
                               @error('tabs')<span class="text-danger"> {{$message}}</span>  @enderror  
          
                              </div>
                          </div>    --}}

                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="form-control-label">Select Category : <span class="tx-danger">*</span></label>
                                  <select class="form-control" data-placeholder="Choose Section" wire:model="cat" aria-hidden="true">
                                    <option label="Choose Category"></option>
                                    @if($tabs == 1)
                                    <option value="1">1 Diese Website wird</option>
                                    @else
                                    <option value="2">2 Diese Website wird nicht</option>
                                    @endif
                                  </select>
                                 @error('cat')<span class="text-danger"> {{$message}}</span>  @enderror  
                                </div>
                            </div>  

                              <!-- col-10 -->
  
                         
                              <div class="col-lg-10">
                                <label class="form-control-label"> Add List text  : <span class="tx-danger">*</span></label>
                              </div>
                              <div class="col-md-2">
                                <label class="form-control-label"> Add New  </label>
                              </div>
                            


                      
                             <div class="col-lg-10">
                                <div class="form-group">
                                <textarea class="form-control" type="text" wire:model="list.0" placeholder="Add list  ">                    
                                </textarea>
                                     @error('list.0')<span class="text-danger"> {{$message}}</span>  @enderror  
                                
                                </div>
                              </div>
                              <!-- col-10 -->
                                    <!-- col-10 -->
                             <div class="col-lg-2">
                              <div class="form-group">
                                    <button class="btn btn-info" wire:click.prevent="add({{$i}})"> Add Paragraph</button>
                              </div>
                            </div>

                     
                            <!-- col-10 -->
                            @foreach($inputs as $key => $value)
                              <div class="col-lg-10">
                                 <div class="form-group">
                                   <textarea class="form-control" type="text" wire:model="list.{{ $value }}" placeholder="Add list {{ $key+1}}"> 
                                  </textarea>
                                      @error('list.'.$value)<span class="text-danger"> {{$message}}</span>  @enderror  
                                 </div>
                               </div>
                               <!-- col-10 -->
                                     <!-- col-10 -->
                              <div class="col-lg-2">
                               <div class="form-group">
                                     <button class="btn btn-danger" wire:click.prevent="remove({{$key}})">  Remove</button>
                               </div>
                             </div>
 
                         
                            @endforeach

                            

                              {{-- <div class="col-lg-3">
                                <div class="form-group">
                                  <label class="form-control-label"> Show on All    : <span class="tx-danger">*</span></label>
                                     <input class="form-control" type="checkbox" wire:model="alltab" value="0" >
                                </div>
                              </div><!-- col-4 --> --}}
                     
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
