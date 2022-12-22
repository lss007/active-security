<div>
  {{-- The whole world belongs to you. --}}
  <div class="sl-pagebody tx-bold">
      <div class="sl-page-title">
        <h5>Manage Privacy Settings Tabs : 
        </h5>
      </div><!-- sl-page-title -->
      <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title"> <a href="{{route('add_privacy_Tabs')}}" class="btn btn-teal active mg-b-10">
                ADD </a></h6>
                <table class="table table-hover table-bordered mg-b-0">
                  <thead class="bg-info">
                    <tr>
                      <th width="80%">Paragraphs</th>
                      <th  width="20%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(isset($privacyTab))
                         @foreach($privacyTab as $keys => $row)
                            <tr>
                              <td> {{$keys+1}}  {{$row->list}}  </td>
                              <td>    
                                <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >
                                <i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show" data-toggle="modal" data-target="#modaldemo{{$row->id}}">
                                  <i class="fa fa-eye"></i>
                                </a>
                                
                                @if($row->status == 1 )
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})">
                                <i class="fa fa-thumbs-down"></i>
                                @else
                                  <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">
                                  <i class="fa fa-thumbs-up"></i>
                                @endif
                                  <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >
                                    <i class="fa fa-trash"></i></a>
                              </td>
                            </tr>
                                          <!-- LARGE MODAL -->
                  <div id="modaldemo{{$row->id}}" class="modal fade">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content tx-size-sm">
                        <div class="modal-header pd-x-20">
                          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"> Preview</h6>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body pd-20">
                          <h5 class=" lh-3 mg-b-20"><span class="text-primary">Paragraph  :</span>   {{isset($row->list )? $row->list : "NA"}}</h5>
                          @if($row->tabs == 1  )
                          <h5 class=" lh-3 mg-b-20"><span class="text-primary">Tab  :</span>Grundlegend</h5>
                          @elseif($row->tabs == 2  )
                          <h5 class=" lh-3 mg-b-20"><span class="text-primary">Tab  :</span>Funktionalität</h5>
                          @elseif($row->tabs == 3  )
                          <h5 class=" lh-3 mg-b-20"><span class="text-primary">Tab  :</span>Analytik</h5>
                          @elseif($row->tabs == 4  )
                          <h5 class=" lh-3 mg-b-20"><span class="text-primary">Tab  :</span>Werbung</h5>
                          @else
                          <h5 class=" lh-3 mg-b-20"><span class="text-primary">Tab  :</span>NA</h5>

                          
                          @endif
                            {{-- Funktionalität 2
                            Analytik 3
                            Werbung 4 --}}

                      </div><!-- modal-body -->
                    
                    </div>
                  </div><!-- modal-dialog -->
                  </div><!-- modal -->

                        @endforeach
                     @endif
                       @if(isset($trashdata)  && count($trashdata) > 0 )
                       <tr><th>Restore</th></tr>
                        @foreach($trashdata as $val)
                          <tr>
                              <td> {{$val->list}}  </td>
                              <td>     
                                <a href="javascript:void(0)"  wire:click.prevent="restore({{ $val->id}})" class="btn btn-sm btn-success" title="Restore"  >
                                <i class="fa fa-trash"></i></a>
                     
                                <a href="javascript:void(0)"  wire:click.prevent="fulleDelete({{ $val->id}})" class="btn btn-sm btn-danger" title="Full Delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                                <i class="fa fa-trash"></i></a>
                              </td>
                          </tr>
                       @endforeach
                      @endif
                  </tbody>
                </table>
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
                              <div class="col-md-12">
                                
                                    <table class="table table-hover table-bordered mg-b-0">
                                      <thead class="bg-info">
                                        <tr>
                                          <th width="80%">Diese Website wird</th>
                                          <th  width="20%">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @if(isset($privacyTab))
                                             @foreach($privacyTab as $keys => $row)
                                                <tr>
                                                    @if($row->tabs == 1 && $row->cat ==1 )
                                                  <td> {{$keys+1}}  {{$row->list}}  </td>
                                                  <td>    

                                                    <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >
                                                    <i class="fa fa-edit"></i></a>

                                                    <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show" data-toggle="modal" data-target="#modaldemo{{$row->id}}">
                                                      <i class="fa fa-eye"></i>
                                                    </a>
                                                    @if($row->status == 1 )
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})">
                                                    <i class="fa fa-thumbs-down"></i>
                                                    @else
                                                      <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">
                                                      <i class="fa fa-thumbs-up"></i>
                                                    @endif
                                                      <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >
                                                        <i class="fa fa-trash"></i></a>
                                                  </td>
                                                </tr>
                                               @endif
                                                                                     <!-- LARGE MODAL -->
                  <div id="modaldemo{{$row->id}}" class="modal fade">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content tx-size-sm">
                        <div class="modal-header pd-x-20">
                          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"> Preview</h6>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body pd-20">
                          <h5 class=" lh-3 mg-b-20"><span class="text-primary">Paragraph  :</span>   {{isset($row->list )? $row->list : "NA"}}</h5>
                          @if($row->tabs == 1 && $row->cat ==1 )
                          <h5 class=" lh-3 mg-b-20"><span class="text-primary">Tab  :</span>Grundlegend</h5>
                            @endif
                          
                            {{-- Funktionalität 2
                            Analytik 3
                            Werbung 4 --}}

                      </div><!-- modal-body -->
                    
                    </div>
                  </div><!-- modal-dialog -->
                </div><!-- modal -->
                                            @endforeach
                                         @endif
                                           @if(isset($trashdata)  && count($trashdata) > 0 )
                                           <tr><th>Restore</th></tr>
                                            @foreach($trashdata as $val)
                                              <tr>
                                                  <td> {{$val->list}}  </td>
                                                  <td>     
                                                    <a href="javascript:void(0)"  wire:click.prevent="restore({{ $val->id}})" class="btn btn-sm btn-success" title="Restore"  >
                                                    <i class="fa fa-trash"></i></a>
                                         
                                                    <a href="javascript:void(0)"  wire:click.prevent="fulleDelete({{ $val->id}})" class="btn btn-sm btn-danger" title="Full Delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                                                    <i class="fa fa-trash"></i></a>
                                                  </td>
                                              </tr>
                                           @endforeach
                                          @endif
                                      </tbody>
                                    </table>
                                    <hr>
                                
                                
                                    <table class="table table-hover table-bordered mg-b-0">
                                      <thead class="bg-danger">
                                        <tr>
                                          <th width="80%">Diese Website wird nicht:</th>
                                          <th  width="20%">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @if(isset($privacyTab))
                                        @foreach($privacyTab as $keys => $row)
                                          <tr>
                                            @if($row->tabs == 1 && $row->cat == 2 )
                                            <td> {{$keys+1}} {{$row->list}}  </td>
                                              <td>    
                                                <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >
                                                <i class="fa fa-edit"></i></a>
                                                @if($row->status == 1 )
                                                <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})">
                                                <i class="fa fa-thumbs-down"></i>
                                                @else
                                                  <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">
                                                  <i class="fa fa-thumbs-up"></i>
                                                @endif
                                                <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                                                  <i class="fa fa-trash"></i></a>
                                              </td>
                                          </tr>
                                        @endif
                                        @endforeach
                                          @endif
                                      </tbody>
                                    </table>
                              </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                              {{-- <h5>Funktionalität:</h5> --}}
                              <div class="row">
                                <div class="col-md-12">
                                  <table class="table table-hover table-bordered mg-b-0">
                                    <thead class="bg-info">
                                      <tr>
                                        <th width="80%">Diese Website wird</th>
                                        <th  width="20%">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @if(isset($privacyTab))
                                      @foreach($privacyTab as $keys => $row)
                                      <tr>
                                        
                                          @if($row->tabs == 2 && $row->cat ==1 )
                                        <td> {{$keys+1}}
                                          {{$row->list}} 
                                      
                                        </td>
                                        <td>    
                                          <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >
                                          <i class="fa fa-edit"></i></a>
                                          @if($row->status == 1 )
                                          <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})">
                                          <i class="fa fa-thumbs-down"></i>
                                          @else
                                            <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">
                                            <i class="fa fa-thumbs-up"></i>
                                          @endif
                                            <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >
                                              <i class="fa fa-trash"></i></a>
                                        </td>
                                      </tr>
                                      @endif
                                      @endforeach
                                        @endif
                                        @if(isset($trashdata) && count($trashdata) > 0  )
                                      <tr><th>Restore</th></tr>
                                        @foreach($trashdata as $val)
                                      <tr>
                                        <td> {{$val->list}}  </td>
                                        <td>     
                                          <a href="javascript:void(0)"  wire:click.prevent="restore({{ $val->id}})" class="btn btn-sm btn-success" title="delete"  >
                                            <i class="fa fa-trash"></i></a>
                                            <a href="javascript:void(0)"  wire:click.prevent="fulleDelete({{ $val->id}})" class="btn btn-sm btn-danger" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                                              <i class="fa fa-trash"></i></a>
                                        </td>
                                    
                                      </tr>
                                          @endforeach
                                      @endif
                                    </tbody>
                                  </table>
                                <hr>
                                <table class="table table-hover table-bordered mg-b-0">
                                  <thead class="bg-danger">
                                    <tr>
                                      <th width="80%">Diese Website wird nicht:</th>
                                      <th  width="20%">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @if(isset($privacyTab))
                                    @foreach($privacyTab as $keys => $row)
                                    <tr>
                                        @if($row->tabs == 2 && $row->cat == 2 )
                                       <td> {{$keys+1}} {{$row->list}} </td>
                                      <td>    
                                        <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >
                                        <i class="fa fa-edit"></i></a>
                                        @if($row->status == 1 )
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})">
                                        <i class="fa fa-thumbs-down"></i>
                                        @else
                                          <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">
                                          <i class="fa fa-thumbs-up"></i>
                                        @endif
                                        <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                                          <i class="fa fa-trash"></i></a>
                                      </td>
                                    </tr>
                                      @endif
                                      @endforeach
                                      @endif
                                  </tbody>
                                </table>
                                </div>
                            </div>

                         
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                              {{-- <h5>Analytik:</h5> --}}
                              <div class="row">
                                <div class="col-md-12">
                                      <table class="table table-hover table-bordered mg-b-0">
                                        <thead class="bg-info">
                                          <tr>
                                            <th width="80%">Diese Website wird</th>
                                            <th  width="20%">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @if(isset($privacyTab))
                                            @foreach($privacyTab as $keys => $row)
                                                <tr>
                                                @if($row->tabs == 3 && $row->cat ==1 )
                                                  <td> {{$keys+1}}
                                                    {{$row->list}} 
                                                
                                                  </td>
                                                  <td>    
                                                    <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >
                                                    <i class="fa fa-edit"></i></a>
                                                    @if($row->status == 1 )
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})">
                                                    <i class="fa fa-thumbs-down"></i>
                                                    @else
                                                      <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">
                                                      <i class="fa fa-thumbs-up"></i>
                                                    @endif
                                                      <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >
                                                        <i class="fa fa-trash"></i></a>
                                                  </td>
                                                </tr>
                                                @endif
                                             @endforeach
                                          @endif
                                            @if(isset($trashdata) && count($trashdata) > 0  )
                                          <tr><th>Restore</th></tr>
                                    
                                            @foreach($trashdata as $val)
                                          <tr>
                                         
                                            <td> {{$val->list}}  </td>
                                            <td>     
                                              <a href="javascript:void(0)"  wire:click.prevent="restore({{ $val->id}})" class="btn btn-sm btn-success" title="delete"  >
                                                <i class="fa fa-trash"></i></a>
                                                <a href="javascript:void(0)"  wire:click.prevent="fulleDelete({{ $val->id}})" class="btn btn-sm btn-danger" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                                                  <i class="fa fa-trash"></i></a>
                                            </td>
                                        
                                          </tr>
                                             @endforeach
                                         @endif
                                        </tbody>
                                      </table>
                           
                          <hr>
                       
                       
                          <table class="table table-hover table-bordered mg-b-0">
                            <thead class="bg-danger">
                              <tr>
                                <th width="80%">Diese Website wird nicht:</th>
                                <th  width="20%">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if(isset($privacyTab))
                                 @foreach($privacyTab as $keys => $row)
                                  <tr>
                                  @if($row->tabs == 3 && $row->cat == 2 )
                                    <td> {{$keys+1}} {{$row->list}}  </td>
                                    <td>    
                                      <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >
                                      <i class="fa fa-edit"></i></a>
                                      @if($row->status == 1 )
                                      <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})">
                                      <i class="fa fa-thumbs-down"></i>
                                      @else
                                        <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">
                                        <i class="fa fa-thumbs-up"></i>
                                      @endif
                                      <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                                        <i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>
                                  @endif
                                @endforeach
                            @endif
                            </tbody>
                          </table>
                                </div>
                            </div>
                        </div>
  
                        <div class="tab-pane fade" id="pills-advertising" role="advertising" aria-labelledby="pills-advertising-tab">
                         
                              {{-- <h5>Werbung:</h5> --}}
                              <div class="row">
                                <div class="col-md-12">
                                  
                                      <table class="table table-hover table-bordered mg-b-0">
                                        <thead class="bg-info">
                                          <tr>
                                            <th width="80%">Diese Website wird</th>
                                            <th  width="20%">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($privacyTab))
                                          @foreach($privacyTab as $keys => $row)
                                            <tr>
                                            @if($row->tabs == 4 && $row->cat ==1 )
                                              <td> {{$keys+1}}  {{$row->list}} 
                                              </td>
                                              <td>    
                                                <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >
                                                <i class="fa fa-edit"></i></a>
                                                @if($row->status == 1 )
                                                <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})">
                                                <i class="fa fa-thumbs-down"></i>
                                                @else
                                                  <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">
                                                  <i class="fa fa-thumbs-up"></i>
                                                @endif
                                                  <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >
                                                    <i class="fa fa-trash"></i></a>
                                              </td>
                                              @endif
                                            </tr>
                                          @endforeach
                                        @endif

                                            @if(isset($trashdata) && count($trashdata) > 0  )
                                          <tr><th>Restore</th></tr>
                                    
                                            @foreach($trashdata as $val)
                                          <tr>
                                         
                                            <td> {{$val->list}}  </td>
                                            <td>     
                                              <a href="javascript:void(0)"  wire:click.prevent="restore({{ $val->id}})" class="btn btn-sm btn-success" title="delete"  >
                                                <i class="fa fa-trash"></i></a>
                                                <a href="javascript:void(0)"  wire:click.prevent="fulleDelete({{ $val->id}})" class="btn btn-sm btn-danger" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                                                  <i class="fa fa-trash"></i></a>
                                            </td>
                                        
                                          </tr>
                                             @endforeach
                                         @endif
                                        </tbody>
                                      </table>
                           
                          <hr>
                       
                       
                          <table class="table table-hover table-bordered mg-b-0">
                            <thead class="bg-danger">
                              <tr>
                                <th width="80%">Diese Website wird nicht:</th>
                                <th  width="20%">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if(isset($privacyTab))
                              @foreach($privacyTab as $keys => $row)
                              
                              <tr>
                                
                                @if($row->tabs == 4 && $row->cat == 2 )
                                <td> {{$keys+1}}
                                  {{$row->list}} 
                              
                                </td>
                                <td>    
                                  <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >
                                  <i class="fa fa-edit"></i></a>
                                  @if($row->status == 1 )
                                  <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})">
                                  <i class="fa fa-thumbs-down"></i>
                                  @else
                                    <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">
                                    <i class="fa fa-thumbs-up"></i>
                                  @endif
                                  <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                                    <i class="fa fa-trash"></i></a>
                                </td>
                              
                              </tr>
                              @endif
                              @endforeach
                                @endif
                          
                        
                            </tbody>
                          </table>
                           
                                
                              
                                </div>
                             
                            </div>
                         
                         
                        </div>
                      </div>
                    </div>
              </div>
            </div>
     

          </div><!-- accordion -->
        </div><!-- card -->

  </div>
</div>
