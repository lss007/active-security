<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Manage Social Media Category </h5>
    
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">      
            <a href="{{route('Add_socialMediaCat')}}" class="btn btn-teal active mg-b-10" >Add  Category</a>
        </h6>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                 <th class="wd-20p">Image </th>
                  <th class="wd-25p">Name </th>
                  <th class="wd-10p">Status</th>
                  <th class="wd-15p">Action</th>
                </tr>
              </thead>
              <tbody>
@if (isset($getSocial_category) && count($getSocial_category) > 0)
@foreach($getSocial_category as $social)
<tr>
    <td>
        <img src="{{(!empty($social->logo)) 
          ? asset('storage/social-category/'.$social->logo):asset('no_image.jpg')}}" alt="..."  style="width: 30px ; height:auto;">
      </td>
  <td> {{Str::limit($social->name,20,$end='....')}}</td>



  <td> 
    @if($social->status == 1 )
      <span class="badge badge-success">Active</span>
      @else
      <span class="badge badge-danger">Inactive</span>
      @endif
    </td>
  <td>  
      <a href="{{route('edit_socialMediaCat',$social->id)}}" class="btn btn-sm btn-info" title="edit" >
        <i class="fa fa-edit"></i></a>
    

        @if($social->status == 1 )
        <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$social->id}})">
        <i class="fa fa-thumbs-down"></i>
        @else
          <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$social->id}})">
          <i class="fa fa-thumbs-up"></i>
        @endif
      <a href="javascript:void(0)"  wire:click.prevent="delete({{$social->id}})" class="btn btn-sm btn-danger" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
        <i class="fa fa-trash"></i></a>

        {{-- Modal  --}}
        
        {{-- end modal  --}}

  </td>

</tr>

     <!-- LARGE MODAL -->


@endforeach
@else
  
@endif
                

              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
        
      </div><!-- sl-pagebody -->


      <!-- modal -->
</div>


{{-- ================== --}}
