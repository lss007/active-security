<div>
    {{-- The whole world belongs to you. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Manage Privacy Settings text : 
          </h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">
                <a href="" class="btn btn-teal active mg-b-10">
                  ADD </a>
                @if(isset($privacyTab))
             
         
    
      
                <a href="javascript:void(0)" class="btn btn-success active  mg-b-10"  >
                  Inactive </a>
            
                  <a href="javascript:void(0)" class="btn btn-info active  mg-b-10" >
                Active</a>
             
                <a href=""> <button class="btn btn-primary active  mg-b-10">Edit</button> </a>
                  @else
                 
                  @endif
                
                  <a href="javascript:void(0)" class="btn btn-warning  mg-b-10"  >
                    Restore </a>  
                 
                    <a href="javascript:void(0)" class="btn btn-danger active  mg-b-10" >
                      Delete </a>     
             
               

              </h6>
  
            <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                  <h6 class="mg-b-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                     Privacy Tab 
                    </a>
                  </h6>
                </div><!-- card-header -->
  
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-body">
                     
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Grundlegend</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Funktionalität</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Analytik</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-advertising-tab" data-toggle="pill" href="#pills-advertising" role="tab" aria-controls="pills-advertising" aria-selected="false">Werbung</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                  <h5>Diese Website wird:</h5>
                                  <ol class="list-group">
                                    @if(isset($privacyTab))
                                    @foreach($privacyTab as $row)
                                    @if($row->tabs == 1 && $row->cat ==1 )
                                    <li class="tx-bold">{{$row->list}}</li>
                                    @endif
                                    @endforeach
                                      @endif
                                  </ol>
                                </div>
                                <div class="col-md-6">
                                  
                                  <h5>Diese Website wird nicht:</h5>
                                  <ol class="list-group">
                                    @if(isset($privacyTab))
                                    @foreach($privacyTab as $row)
                                    @if($row->tabs == 1 && $row->cat == 2 )
                                    <li class="tx-bold">{{$row->list}}</li>
                                    @endif
                                    @endforeach
                                      @endif
                                  </ol>
                                </div>
                            </div>
                         
                          
                          </div>
                          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                           
                            <div class="row">
                              <div class="col-md-6">
                                <h5>Funktionalität:</h5>
                            
                              </div>
                             
                          </div>
                          </div>
                          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row">
                              <div class="col-md-6">
                                <h5>Analytik:</h5>
                          
                              </div>
                             
                          </div>
                          </div>
    
                          <div class="tab-pane fade" id="pills-advertising" role="advertising" aria-labelledby="pills-advertising-tab">
                            <div class="row">
                              <div class="col-md-6">
                                <h5>Werbung:</h5>
                           
                              </div>
                            
                          </div>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                  <h6 class="mg-b-0">
                    <a class="collapsed transition" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Privacy Tab
                    </a>
                  </h6>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
                  </div>
                </div>
              </div>
 
            </div><!-- accordion -->
          </div><!-- card -->

    </div>
</div>
