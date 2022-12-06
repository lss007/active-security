<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5> {{__('dashboard.All Pages Banner')}}</h5>
     
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div class="col-lg-12">
            <div class="form-group">
               <label class="form-control-label"> Search Banner : </label>
               <input class="form-control" placeholder="Search by heading.." type="text" wire:model="search">  <br> 

             </div>
          </div><!-- col-4 -->
          <h6 class="card-body-title">    

            <a href="{{route('add_all_banners')}}" class="btn btn-teal active mg-b-10"  > {{__('dashboard.Add Banner')}} </a>
        </h6>


        <div class="table-responsive">
          <table class="table table-hover table-bordered mg-b-0">
            <thead class="bg-info">
              <tr>
                <th class="wd-10p ">Image </th>
                <th class="wd-15p">Page Category</th>
              
                <th class="wd-15p">Title </th>
       
                <th class="wd-10p">Status</th>
                <th class="wd-20p">Action</th>
              </tr>
            </thead>
            <tbody>
              @if(isset($viewallBanners))
              @foreach($viewallBanners as $banner)
              <tr>
                <td class="text-center">
                  {{  $viewallBanners->firstItem() + $loop->index  }} 
                  <img src="{{(!empty($banner->banner_image)) 
                    ? asset('storage/All-banner/'.$banner->banner_image):asset('no_image.jpg')}}" alt="..." width="100">
                  
                    </td>
                    <td >  {{isset($banner->page_cat_name )? Str::limit($banner->page_cat_name,20,$end='....') : "NA"}}</td>
                <td > 
                  {{Str::limit($banner->title,20,$end='....')}}
                </td>


          <td> 
            @if($banner->status == 1 )
              <span class="badge badge-success">Active</span>
              @else
              <span class="badge badge-danger">Inactive</span>
              @endif
          </td>
          <td class="text-center">  
            <a href="{{route('edit_all_banner',$banner->id)}}" class="btn btn-sm btn-info" title="edit" >
              <i class="fa fa-edit"></i>
            </a>
            <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show" data-toggle="modal" data-target="#modaldemo{{$banner->id}}">
              <i class="fa fa-eye"></i>
            </a>
            @if($banner->status == 1 )
            <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$banner->id}})">
            <i class="fa fa-thumbs-down"></i>
            @else
              <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$banner->id}})">
              <i class="fa fa-thumbs-up"></i>
            @endif
          <a href="javascript:void(0)"  wire:click.prevent="deletebanner({{$banner->id}})" class="btn btn-sm btn-danger" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
            <i class="fa fa-trash"></i></a>

            </td>

            </tr>
                  <!-- LARGE MODAL -->
                  <div id="modaldemo{{$banner->id}}" class="modal fade">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content tx-size-sm">
                        <div class="modal-header pd-x-20">
                          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Banner Preview</h6>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body pd-20">
                          <h5 class=" lh-3 mg-b-20"><span class="text-primary">Page Category :</span>   {{isset($banner->page_cat_name )? Str::limit($banner->page_cat_name,30,$end='....') : "NA"}}</h5>
    
                  
                    <h5 class=" lh-3 mg-b-20"><span class="text-primary">Banner Heading :</span> {{isset($banner->heading) ? $banner->heading : "NA" }}</h5>
                
                <h6 class=" lh-3 mg-b-20"> <span class="text-primary">Banner Title :</span>{{isset($banner->title) ? $banner->title : "NA"}}</h6>
    
                
                <p class="mg-b-5">
                  <span class="text-primary"> Button text or link : </span>
                <a href=" {{isset($banner->button_link) ? $banner->button_link : "#"}}"> {{isset($banner->button_text) ? $banner->button_text : "NA"}}</a>
                   
                  </span>
                </p>
    
                <span class="text-primary"> Banner Image :</span>
                 <hr> 
                 
                <img width="300" class="img-fluid" src="{{(!empty($banner->banner_image))  
                  ? asset('storage/All-banner/'.$banner->banner_image):asset('no_image.jpg')}}" alt="..." >
                
                      </div><!-- modal-body -->
                    
                    </div>
                  </div><!-- modal-dialog -->
                </div><!-- modal -->
              @endforeach
            @else
            @endif
            
            </tbody>
          </table>
        </div><!-- table-responsive -->
        <p>

          Showing {{ $viewallBanners->firstItem() }} to {{ $viewallBanners->lastItem() }} of total {{$viewallBanners->total()}}
        </p>
    
        
        {{ $viewallBanners->links() }}
    {{--============================== start trashed data ============================== --}}
    @if (isset($trashdatas ) && count($trashdatas) > 0)
    <div class="card pd-20 pd-sm-40">
      <h2>Restore Deleteed Banner   </h2>
      <div class="table-responsive mg-t-25">
        <table class="table table-hover table-bordered mg-b-0">
          <thead class="bg-danger">
            <tr>
        
              <th class="wd-15p">Image</th>
              <th class="wd-60p">Title</th>
     
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
          
            @foreach($trashdatas as $keys => $trashed)
            <tr>
        
              <td>  
             
                <img src="{{(!empty($trashed->banner_image)) 
                  ? asset('storage/All-banner/'.$trashed->banner_image):asset('no_image.jpg')}}" alt="..." width="100">
                
                 
                </td>
              <td>  {{Str::limit($banner->title,50,$end='....')}}</td>

              <td>

                <button class="btn btn-primary disabled mg-b-10"  wire:click.prevent="restore({{$trashed->id}})">Restore</button>

                <button class="btn btn-danger  mg-b-10" wire:click.prevent="fulleDelete({{$trashed->id}})">Delete</button>

            </td>
            </tr>
            @endforeach
        

        
          </tbody>
        </table>
      </div>
      {{ $trashdatas->links("pagination::bootstrap-4") }}
    </div>

    @endif  
 
    {{--============================== end trashed data ============================== --}}
        </div><!-- card -->
        
      </div><!-- sl-pagebody -->


      <!-- modal -->
</div>


{{-- ================== --}}
