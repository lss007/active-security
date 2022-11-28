<div>
    {{-- Success is as dangerous as failure. --}}
  
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5> {{__('dashboard.Update Route')}}</h5>
      
        </div><!-- sl-page-title -->


        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
            <a href="{{route('view_route_list')}}" class="btn btn-teal active mg-b-10" >Back</a>
          </h6>
      
          <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
           
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                    {{__('dashboard.Update Route')}}
                  </a>
                </h6>
              </div><!-- card-header -->

              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body">
                  <form  wire:submit.prevent="updateRouteName">
                    <div class="form-layout">
                      <div class="row mg-b-25">

                         <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label"> Route Name : <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" wire:model="RouteName"  placeholder="Route Name">
                                 @error('RouteName')<span class="text-danger"> {{$message}}</span>  @enderror  
                            </div>
                          </div><!-- col-4 -->

                          <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label">Actual  Route Link : <span class="tx-danger">*</span></label>
                                 <input class="form-control" type="text" wire:model="RouteLink"  placeholder="Actual  Route Link">
                                 @error('RouteLink')<span class="text-danger"> {{$message}}</span>  @enderror  
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
