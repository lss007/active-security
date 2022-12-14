<div>
    {{-- Stop trying to control. --}}
  
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Manage Privacy page Body Content')}} 
            <span class="float-right"> Total :{{isset($viewPrivacyPageText) ?count($viewPrivacyPageText) : "NA" }}</span>
          </h5>
         
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">      
   
                        
         
            <a href="{{route('addfooter_Privacytext')}}"><button class="btn btn-teal active mg-b-10">Add Privacy Text</button> </a>
       
        </h6>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                
                  <th class="wd-10p">Heading </th>
                  <th class="wd-10p">Title</th>
                  <th class="wd-10p"> Paragraph 1 </th>
            
                  <th class="wd-10p">Status</th>
                  <th class="wd-10p">Action</th>
                </tr>
              </thead>
              <tbody>
                @if (isset($viewPrivacyPageText) && count($viewPrivacyPageText) > 0)
                @foreach($viewPrivacyPageText as $getrow)
                <tr>
                  <td>
                    {{isset($getrow->heading) ?  str_limit($getrow->heading, $limit=20 ) : "NA" }}
                     </td>
                  <td> 
                    {{isset($getrow->title) ?  str_limit($getrow->title, $limit=20) : "NA" }}
                  </td>
                  <td>
                    {{isset($getrow->para1) ?  str_limit($getrow->para1, $limit=20 ) : "NA" }}
                    </td>
              
              
                  <td>
                    @if($getrow->status == 1 )
                      <span class="badge badge-success">Active</span>
                      @else
                      <span class="badge badge-danger">Inactive</span>
                      @endif
                    </td>
                  <td>  
            <a href="{{route('editfooter_Privacytext',$getrow->id)}}" class="btn btn-sm btn-info" title="edit" >
              <i class="fa fa-edit"></i></a>
            <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show"
            data-toggle="modal" data-target="#modaldemo{{$getrow->id}}">
              <i class="fa fa-eye"></i></a>
  
              @if($getrow->status == 1 )
              <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$getrow->id}})">
              <i class="fa fa-thumbs-down"></i>
              @else
                <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$getrow->id}})">
                <i class="fa fa-thumbs-up"></i>
              @endif
            <a href="javascript:void(0)"  wire:click.prevent="delete({{$getrow->id}})" class="btn btn-sm btn-danger" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
              <i class="fa fa-trash"></i></a>
  
                {{-- Modal  --}}
                
                {{-- end modal  --}}
  
              </td>
  
            </tr>
  
           <!-- LARGE MODAL -->
                <div id="modaldemo{{$getrow->id}}" class="modal fade">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content tx-size-sm">
                      <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Privacy  Preview</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body pd-20">
    
                          <h6 class=" lh-3 mg-b-20"><span class="text-primary">Main Heading :</span> {{isset($getrow->heading) ? $getrow->heading : "NA" }}</h6>
                          <h6 class=" lh-3 mg-b-20"><span class="text-primary"> Title :</span> {{isset($getrow->title) ? $getrow->title : "NA" }}</h6>
                          <p class="mg-b-5"> <span class="text-primary">  Paragraph 1 : </span>{{isset($getrow->para1) ? $getrow->para1 : "NA"}}</p>

                          <p class="mg-b-5"> <span class="text-primary">  Paragraph 2 : </span>{{isset($getrow->para2) ? $getrow->para2 : "NA"}}</p>

                          <p class="mg-b-5"> <span class="text-primary">  Paragraph 3 : </span>{{isset($getrow->para3) ? $getrow->para3 : "NA"}}</p>
                          <p class="mg-b-5"> <span class="text-primary">  Paragraph 4 : </span>{{isset($getrow->para4) ? $getrow->para4 : "NA"}}</p>

                   
                  </div><!-- modal-body -->
                
                </div>
              </div><!-- modal-dialog -->
            </div><!-- modal -->
  
                @endforeach
                @else
                  
                @endif
                                
  
              </tbody>
            </table>
          </div><!-- table-wrapper -->
  
  {{-- =========================Trashed  --}}
  @if (isset($trashdata) && count($trashdata) > 0)
  <div class="card pd-20 pd-sm-40">
    <h2>Restore Deleted    </h2>
    <div class="table-responsive mg-t-25">
      <table class="table table-hover table-bordered mg-b-0">
        <thead class="bg-danger">
          <tr>
      
            <th class="wd-15p">Profile</th>
            <th class="wd-20p">Name</th>
            <th class="wd-40p">Email</th>
            <th>Action</th>
  
          </tr>
        </thead>
        <tbody>
        
          @foreach($trashdata as $keys => $trashed)
          <tr>
       
            <td>   
              <img width="300" class="img-fluid" src="{{(!empty($trashed->profile_img))  
              ? asset('storage/company-profile/'.$trashed->profile_img):asset('no_image.jpg')}}" alt="..." >
                </td>
            <td> {{isset($trashed->name) ? str_limit($trashed->name , $limit=20 ) : "NA" }}</td>
            <td> {!!str_limit($trashed->email, $limit=20 ) !!}</td>
  
            <td>
  
              <button class="btn btn-primary disabled mg-b-10"  wire:click.prevent="restore({{$trashed->id}})">Restore</button>
  
              <button class="btn btn-danger  mg-b-10" wire:click.prevent="fulleDelete({{$trashed->id}})">Delete</button>
  
          </td>
          </tr>
          @endforeach
       
  
      
        </tbody>
      </table>
    </div>
  </div>
  
  @endif
  
  
  
        </div><!-- card -->
        
      </div><!-- sl-pagebody -->
  
  
      <!-- modal -->
  </div>
  
  
  {{-- ================== --}}
  