<div>
    {{-- Stop trying to control. --}}
  
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5> 
            {{__('dashboard.View contact messages')}}  </h5>
         
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
        
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">Name </th>
                  <th class="wd-10p">Email</th>
                  <th class="wd-10p">Regarding</th>
                  <th class="wd-10p">Message</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @if (isset($getContacts) && count($getContacts) > 0)
                @foreach($getContacts as $getrow)
                <tr>
                  <td>
                    {{isset($getrow->surname) ?  str_limit($getrow->surname, $limit=20 ) : "NA" }}
                     </td>
                  <td> 
                    {{isset($getrow->email) ?  str_limit($getrow->email, $limit=20) : "NA" }}
                  </td>
                  <td>
                    {{isset($getrow->regarding) ?  str_limit($getrow->regarding, $limit=20 ) : "NA" }}
                    </td>
                  <td> 
                    {{isset($getrow->client_message) ?  str_limit($getrow->client_message, $limit=25 ) : "NA" }}
                  </td> 
                    <td>
                        <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show"  data-toggle="modal" data-target="#modaldemo{{$getrow->id}}">
                          <i class="fa fa-eye"></i></a>

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
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"> Message Preview</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body pd-20">
                
                        
                        
                      
                        <h6 class="mg-b-5"> <span class="text-primary">  Name  : </span>{{isset($getrow->surname) ? $getrow->surname : "NA"}}</>
  
                          
                        <h6 class="mg-b-5"> <span class="text-primary">  Email  : </span>{{isset($getrow->email) ? $getrow->email : "NA"}}</h6>
  
                        <h6 class="mg-b-5"> <span class="text-primary">  Regarding  : </span>{{isset($getrow->regarding) ? $getrow->regarding : "NA"}}</h6>
                        
                        <h6 class=" lh-3 mg-b-20"><span class="text-primary">Client message  :</span> {{isset($getrow->client_message) ? $getrow->client_message : "NA" }}</h6>
                      

                   
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
  