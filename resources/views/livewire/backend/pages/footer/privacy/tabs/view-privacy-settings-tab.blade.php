<div>
  {{-- The whole world belongs to you. --}}
  <div class="sl-pagebody tx-bold">
      <div class="sl-page-title">
        <h5>Manage Privacy Settings Tabs : 
          <span class="float-right"> Total :{{isset($getAllPrivacy) ?count($getAllPrivacy) : "NA" }}</span>

        </h5>
      </div><!-- sl-page-title -->
      <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title"> <a href="{{route('add_privacy_Tabs')}}" class="btn btn-teal active mg-b-10">
                ADD </a>
                <button wire:click.prevent="deleteSE"
                onclick="confirm('Are you sure want to delete all ?') || event.stopImmediatePropagation()"
                class="btn btn-danger active mg-b-10">
            Delete Selected
        </button>
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
                          <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true"> All list</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Grundlegend</a>
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
                        <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                          <div class="row">
                              <div class="col-md-12">
  {{-- ========================== start Grundlegend left  ========================== --}}
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
                                             @if($row->tab_id == 1 && $row->cat_id == 1 )
                                                <tr>
                                                  <td>   {{$row->list}}  </td>
                                                  <td>    
                                                    <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >  <i class="fa fa-edit"></i></a>
                                                    @if($row->status == 1 )
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})"> <i class="fa fa-thumbs-down"></i>
                                                    @else
                                                      <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})"> <i class="fa fa-thumbs-up"></i>
                                                    @endif
                                                      <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >   <i class="fa fa-trash"></i></a>
                                                  </td>
                                                </tr>
                                              @endif
                                          @endforeach
                                        @endif
                                      </tbody>
                                    </table>
                                    <hr>
                                
  {{-- ========================== start Grundlegend  right  section  ========================== --}}
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
                                          @if($row->tab_id == 2 && $row->cat_id == 2 )
                                            <tr>
                                              <td> {{$row->list}}  </td>
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
                                        
                                           {{-- 2nd sec  --}}
                                           @if(isset($privacyTab))
                                           @foreach($privacyTab as $keys => $row)
                                             @if($row->tab_id == 3 && $row->cat_id == 2 )
                                               <tr>
                                                 <td> {{$row->list}}  </td>
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
                                         {{-- 3r  --}}
                                         @if(isset($privacyTab))
                                         @foreach($privacyTab as $keys => $row)
                                           @if($row->tab_id == 4 && $row->cat_id == 2 )
                                             <tr>
                                               <td> {{$row->list}}  </td>
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
{{-- ========================== end  Grundlegend  right  section  ========================== --}}

                              </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                              <div class="row">
                                <div class="col-md-12">
{{-- ========================== start Funktionalität left  ==========================--}}
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
                                         @if($row->tab_id == 1 && $row->cat_id == 1 )
                                            <tr>
                                              <td>   {{$row->list}}  </td>
                                              <td>    
                                                <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >  <i class="fa fa-edit"></i></a>
                                                @if($row->status == 1 )
                                                <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})"> <i class="fa fa-thumbs-down"></i>
                                                @else
                                                  <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})"> <i class="fa fa-thumbs-up"></i>
                                                @endif
                                                  <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >   <i class="fa fa-trash"></i></a>
                                              </td>
                                            </tr>
                                          @endif
                                      @endforeach
                                    @endif
                                    @if(isset($privacyTab))
                                    @foreach($privacyTab as $keys => $row)
                                      @if($row->tab_id == 2 && $row->cat_id == 2 )
                                        <tr>
                                          <td> {{$row->list}}  </td>
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
                                  {{-- 3rd part  --}}
                     
                     
                                    </tbody>
                                  </table>
{{-- ========================== send  Funktionalität left  ==========================--}}

                <hr>

{{-- ========================== start Funktionalität right  ==========================--}}
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
                                    @if($row->tab_id == 3 && $row->cat_id == 2 )
                                      <tr>
                                        <td> {{$row->list}}  </td>
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
                                      @if(isset($privacyTab))
                                      @foreach($privacyTab as $keys => $row)
                                        @if($row->tab_id == 3 && $row->cat_id == 2 )
                                          <tr>
                                            <td> {{$row->list}}  </td>
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
                                    {{-- 4th part  --}}
                                    @if(isset($privacyTab))
                                    @foreach($privacyTab as $keys => $row)
                                      @if($row->tab_id == 4 && $row->cat_id == 2 )
                                        <tr>
                                          <td> {{$row->list}}  </td>
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
{{-- ========================== end Funktionalität right  ==========================--}}

                                </div>
                            </div>

                         
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                              {{-- <h5>Analytik:</h5> --}}
                              <div class="row">
                                <div class="col-md-12">
{{--========================== start  Analytik left  ==========================--}}
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
                                             @if($row->tab_id == 1 && $row->cat_id == 1 )
                                                <tr>
                                                  <td>     {{$row->list}}  </td>
                                                  <td>    

                                                    <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >  <i class="fa fa-edit"></i></a>
                                                    @if($row->status == 1 )
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})"> <i class="fa fa-thumbs-down"></i>
                                                    @else
                                                      <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})"> <i class="fa fa-thumbs-up"></i>
                                                    @endif
                                                      <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >   <i class="fa fa-trash"></i></a>
                                                  </td>
                                                </tr>
                                              @endif
                                          @endforeach
                                        @endif
                                        {{-- 2nd part  --}}
                                        @if(isset($privacyTab))
                                        @foreach($privacyTab as $keys => $row)
                                           @if($row->tab_id == 2 && $row->cat_id == 2 )
                                              <tr>
                                                <td>   {{$row->list}}  </td>
                                                <td>    
                                                  <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >  <i class="fa fa-edit"></i></a>
                                                  @if($row->status == 1 )
                                                  <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})"> <i class="fa fa-thumbs-down"></i>
                                                  @else
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})"> <i class="fa fa-thumbs-up"></i>
                                                  @endif
                                                    <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >   <i class="fa fa-trash"></i></a>
                                                </td>
                                              </tr>
                                            @endif
                                        @endforeach
                                      @endif
                                      {{-- 3rd part  --}}
                                      @if(isset($privacyTab))
                                      @foreach($privacyTab as $keys => $row)
                                         @if($row->tab_id == 3 && $row->cat_id == 2 )
                                            <tr>
                                              <td>   {{$row->list}}  </td>
                                              <td>    
                                                <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" >  <i class="fa fa-edit"></i></a>
                                                @if($row->status == 1 )
                                                <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})"> <i class="fa fa-thumbs-down"></i>
                                                @else
                                                  <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})"> <i class="fa fa-thumbs-up"></i>
                                                @endif
                                                  <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >   <i class="fa fa-trash"></i></a>
                                              </td>
                                            </tr>
                                          @endif
                                      @endforeach
                                    @endif
                                        </tbody>
                                      </table>
{{--========================== end  Analytik left  ==========================--}}
            
        <hr>

{{--========================== start   Analytik right  ==========================--}}
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
                                 @if($row->tab_id == 4 && $row->cat_id == 2 )
                                  <tr>
                                    <td>  {{$row->list}}  </td>
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
{{--========================== end   Analytik right  ==========================--}}

                                </div>
                            </div>
                        </div>
  
                        <div class="tab-pane fade" id="pills-advertising" role="advertising" aria-labelledby="pills-advertising-tab">
                         
                              {{-- <h5>Werbung:</h5> --}}
                              <div class="row">
                                <div class="col-md-12">
                            {{--========================== start  Werbung left ==========================--}}
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
                                          @if($row->tab_id == 1 && $row->cat_id == 1 )
                                            <tr>
                                              <td>   {{$row->list}} 
                                              </td>
                                              <td>    
                                                <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" > <i class="fa fa-edit"></i></a>
                                                @if($row->status == 1 )
                                                <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})"> <i class="fa fa-thumbs-down"></i>
                                                @else
                                                  <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">  <i class="fa fa-thumbs-up"></i>
                                                @endif
                                                  <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >  <i class="fa fa-trash"></i></a>
                                              </td>
                                            </tr>
                                            @endif
                                          @endforeach
                                        @endif
                                        {{-- 2nd part  --}}
                                        @if(isset($privacyTab))
                                        @foreach($privacyTab as $keys => $row)
                                        @if($row->tab_id == 2 && $row->cat_id == 2 )
                                          <tr>
                                            <td>   {{$row->list}} 
                                            </td>
                                            <td>    
                                              <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" > <i class="fa fa-edit"></i></a>
                                              @if($row->status == 1 )
                                              <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})"> <i class="fa fa-thumbs-down"></i>
                                              @else
                                                <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">  <i class="fa fa-thumbs-up"></i>
                                              @endif
                                                <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >  <i class="fa fa-trash"></i></a>
                                            </td>
                                          </tr>
                                          @endif
                                        @endforeach
                                      @endif
                                      {{-- 3rd part  --}}
                                      @if(isset($privacyTab))
                                      @foreach($privacyTab as $keys => $row)
                                      @if($row->tab_id == 3 && $row->cat_id == 2 )
                                        <tr>
                                          <td>   {{$row->list}} 
                                          </td>
                                          <td>    
                                            <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" > <i class="fa fa-edit"></i></a>
                                            @if($row->status == 1 )
                                            <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})"> <i class="fa fa-thumbs-down"></i>
                                            @else
                                              <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">  <i class="fa fa-thumbs-up"></i>
                                            @endif
                                              <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >  <i class="fa fa-trash"></i></a>
                                          </td>
                                        </tr>
                                        @endif
                                      @endforeach
                                    @endif
                                    {{-- 4th part --}}
                                    @if(isset($privacyTab))
                                    @foreach($privacyTab as $keys => $row)
                                    @if($row->tab_id == 4 && $row->cat_id == 2 )
                                      <tr>
                                        <td>   {{$row->list}} 
                                        </td>
                                        <td>    
                                          <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" > <i class="fa fa-edit"></i></a>
                                          @if($row->status == 1 )
                                          <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})"> <i class="fa fa-thumbs-down"></i>
                                          @else
                                            <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">  <i class="fa fa-thumbs-up"></i>
                                          @endif
                                            <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >  <i class="fa fa-trash"></i></a>
                                        </td>
                                      </tr>
                                      @endif
                                    @endforeach
                                  @endif
                                        </tbody>
                                      </table>
                                      {{--========================== end  Werbung left ==========================--}}

                           
                          <hr>
                       
                                  {{--========================== start  Werbung right ==========================--}}
                       
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
                              
                              @if($row->tab_id == 4 && $row->cat_id == 0 )
                              <tr>  
                                <td>   {{$row->list}} 
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
                                {{--========================== end  Werbung right ==========================--}}
                           
                                
                              
                                </div>
                             
                            </div>
                         
                         
                        </div>


                        <div class="tab-pane fade show active" id="pills-all" role="all" aria-labelledby="pills-all-tab">
                         
                          {{-- <h5>Werbung:</h5> --}}
                          <div class="row">
                            <div class="col-md-12">
                        {{--========================== start  Werbung left ==========================--}}
                                  <table class="table table-hover table-bordered mg-b-0">
                                    <thead class="bg-info">
                                      <tr>
                                     
                                        <th width="80%">All Created List & for Multiple Delete </th>

                                        <th  width="20%">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($getAllPrivacy))
                                      @foreach($getAllPrivacy as $keys => $row)
                                    
                                        <tr>
                                          <td>  <input type="checkbox" wire:model="selectedlist" value="{{ $row->id }}"> {{$row->list}} 
                                          </td>
                                          <td>    
                                            <a href="{{route('edit_privacy_Tabs',$row->id)}}" class="btn btn-sm btn-info" title="edit" > <i class="fa fa-edit"></i></a>
                                            @if($row->status == 1 )
                                            <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$row->id}})"> <i class="fa fa-thumbs-down"></i>
                                            @else
                                              <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$row->id}})">  <i class="fa fa-thumbs-up"></i>
                                            @endif
                                              <a href="javascript:void(0)"  wire:click.prevent="delete({{ $row->id}})" class="btn btn-sm btn-info" title="delete"  >  <i class="fa fa-trash"></i></a>
                                          </td>
                                        </tr>
                                    
                                      @endforeach
                                    @endif
                     
                                    </tbody>
                                  </table>
                                  {{--========================== end  Werbung left ==========================--}}

                       
                      <hr>

                   
                            {{--========================== end  Werbung right ==========================--}}
                       
                            
                          
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
