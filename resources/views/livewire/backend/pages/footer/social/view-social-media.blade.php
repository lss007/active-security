<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.View and manage social media links')}} 
            <span class="float-right"> Total :{{isset($getSocial) ?count($getSocial)  : "NA" }}</span>
          </h5>
    
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">      
            <a href="{{route('add_social_media')}}" class="btn btn-teal active mg-b-10" >{{__('dashboard.Add social media links')}}</a>
        </h6>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Name </th>
                  <th class="wd-15p">Image </th>
                  <th class="wd-15p">Link </th>

                  <th class="wd-10p">Status</th>
                  <th class="wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
@if (isset($getSocial) && count($getSocial) > 0)
@foreach($getSocial as $social)
<tr>
  <td> {{Str::limit($social->category,20,$end='....')}}</td>
  <td>
    <img src="{{(!empty($social->logo)) 
      ? asset('storage/social-logo/'.$social->logo):asset('no_image.jpg')}}" alt="..."  style="width: 30px ; height:auto;">
    
  </td>

  <td><a href="{{isset($social->link) ? $social->link : 'https://www.example.com/'}}">
     {{ isset($social->link) ? Str::limit($social->category,20,$end='....') : "NA"}}</a> </td>
  <td> 
    @if($social->status == 1 )
      <span class="badge badge-success">Active</span>
      @else
      <span class="badge badge-danger">Inactive</span>
      @endif
    </td>
  <td>  
      <a href="{{route('edit_social_media',$social->id)}}" class="btn btn-sm btn-info" title="edit" >
        <i class="fa fa-edit"></i></a>
      <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show"
      data-toggle="modal" data-target="#modaldemo{{$social->id}}">
        <i class="fa fa-eye"></i></a>

        @if($social->status == 1 )
        <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$social->id}})">
        <i class="fa fa-thumbs-down"></i>
        @else
          <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$social->id}})">
          <i class="fa fa-thumbs-up"></i>
        @endif
      <a href="javascript:void(0)"  wire:click.prevent="deletebanner({{$social->id}})" class="btn btn-sm btn-danger" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
        <i class="fa fa-trash"></i></a>

        {{-- Modal  --}}
        
        {{-- end modal  --}}

  </td>

</tr>

     <!-- LARGE MODAL -->
     <div id="modaldemo{{$social->id}}" class="modal fade">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">social Preview</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-20">
            <h6 class=" lh-3 mg-b-20"><span class="text-primary">social Category :</span> {{isset($social->category) ? $social->category : "NA" }}</h6>
        
            <p class="mg-b-5">
              <span class="text-primary">  Link : </span> <a href="{{isset($social->category) ? $social->category : "example.com"}}">{{isset($social->category) ? $social->category : "NA"}}</a>
            </p>
            <p class="mg-b-5">
              <span class="text-primary">  Icon : </span> {{isset($social->icon) ? $social->icon : "NA"}}
            </p>
            <p class="mg-b-5">
              <span class="text-primary">  Link : </span> <a href="{{isset($social->category) ? $social->category : "example.com"}}">{{isset($social->category) ? $social->category : "NA"}}</a>
            </p>
             <hr> 
            <img width="300" class="img-fluid" src="{{(!empty($social->logo))  
              ? asset('storage/social-logo/'.$social->logo):asset('no_image.jpg')}}" alt="..." style="width:50px" >
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
        </div><!-- card -->
        @if (isset($trashdata) && count($trashdata) > 0)
        <div class="card pd-20 pd-sm-40">
          <h4>Restore Deleted Logos   </h4>
          <div class="table-responsive mg-t-25">
          <table class="table table-hover table-bordered mg-b-0">
            <thead class="bg-danger">
              <tr>
      
                <th class="wd-10p">Image </th>
                <th class="wd-25p">Name</th>
                <th class="wd-15p">Link </th>

                <th class="wd-15p">Action</th>
      
              </tr>
            </thead>
            <tbody>
            
              @foreach($trashdata as $keys => $trashed)
              <tr>
            
      
                <td>   
                  <img width="300" class="img-fluid" src="{{(!empty($trashed->logo))  
                    ? asset('storage/social-logo/'.$trashed->logo):asset('no_image.jpg')}}" alt="..."  width="50px">
                    </td>
                    <th class="wd-15p">{{(isset($trashed->category) ? $trashed->category : '')}} </th>
                    <th class="wd-15p"><a href="{{isset($trashed->link) ? $trashed->link : 'https://www.example.com/'}}">
                      {{ isset($trashed->link) ? Str::limit($trashed->category,20,$end='....') : "NA"}}</a> </th>
      
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
      </div><!-- sl-pagebody -->


      <!-- modal -->
</div>


{{-- ================== --}}
