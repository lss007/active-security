<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Manage Services page Content')}}  </h5>
         
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">      
            <a href="{{route('add_services')}}" class="btn btn-teal active mg-b-10">{{__('dashboard.Add Section')}}</a>
        </h6>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">Image </th>
                  <th class="wd-10p">Category </th>
                  <th class="wd-10p">Main Heading</th>
                  <th class="wd-10p"> Title </th>
                  <th class="wd-10p">Paragraph</th>
                  <th class="wd-10p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @if (isset($get_services_sec) && count($get_services_sec) > 0)
                @foreach($get_services_sec as $getrow)
                <tr>
                  <td><img src="{{(!empty($getrow->sec_image)) ? asset('storage/services-section/'.$getrow->sec_image):asset('no_image.jpg')}}" alt="..." width="70">  </td>
                  
                  <td> {{Str::limit($getrow->page_cat_name,100,$end='....')}}</td>

                  <td> {{Str::limit($getrow->heading,10,$end='....')}}</td>
                  <td> {{Str::limit($getrow->title,10,$end='....')}}</td>
                  <td> {{Str::limit($getrow->para1,10,$end='....')}}</td>
                  <td>
                    @if($getrow->status == 1 )
                      <span class="badge badge-success">Active</span>
                      @else
                      <span class="badge badge-danger">Inactive</span>
                      @endif
                    </td>
                  <td>  
            <a href="{{route('edit_services',$getrow->id)}}" class="btn btn-sm btn-info" title="edit" >
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
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Section Preview</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body pd-20">
                        <h6 class=" lh-3 mg-b-20"><span class="text-primary">Main Heading :</span> {{isset($getrow->heading) ? $getrow->heading : "NA" }}</h6>

                    <p class="mg-b-5"> <span class="text-primary">  Paragraph 1 : </span>{{isset($getrow->para1) ? $getrow->para1 : "NA"}}</p>
          
                    <p class="mg-b-5"> <span class="text-primary">  Paragraph 2 : </span>{{isset($getrow->para2) ? $getrow->para2 : "NA"}}</p>
                  
                    <p class="mg-b-5"> <span class="text-primary">  Paragraph 3 : </span>{{isset($getrow->para3) ? $getrow->para3 : "NA"}}</p>
                    <p class="mg-b-5"> <span class="text-primary">  Paragraph 4 : </span>{{isset($getrow->para4) ? $getrow->para4 : "NA"}}</p>

                    <span class="text-primary"> Section Image :</span>
                    <hr> 
                    
                    <img width="300" class="img-fluid" src="{{(!empty($getrow->sec_image))  
                      ? asset('storage/services-section/'.$getrow->sec_image):asset('no_image.jpg')}}" alt="..." style="width:100px;" >
                    
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
        
      </div><!-- sl-pagebody -->


      <!-- modal -->
</div>


{{-- ================== --}}
