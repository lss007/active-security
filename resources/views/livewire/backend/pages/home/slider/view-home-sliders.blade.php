<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5> {{__('dashboard.Home Slider')}} 
            {{-- <span class="float-right"> Total slider: {{isset($viewHomeSliders) ?$viewHomeSliders->total()  : "NA" }}</span> --}}
          </h5>
        
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">  
            <div class="col-lg-12">
              <div class="form-group">
                 <label class="form-control-label"> Search Slider : </label>
                 <input class="form-control" placeholder="Search.." type="text" wire:model="search">  <br> 
               </div>
            </div><!-- col-4 -->
            <a href="{{route('addHomesliders')}}" class="btn btn-teal active mg-b-10" style>Add Slider</a>
        </h6>

        <div class="table-responsive">
          <table class="table table-hover table-bordered mg-b-0">
            <thead class="bg-info">
              <tr>
                <th class="wd-5p"> No </th> 
                <th class="wd-10p">Image</th>
                <th class="wd-20p">Title</th>
                <th class="wd-10p">Status</th>
                <th class="wd-20p ">Action</th>
              </tr>
            </thead>
            <tbody>
              @if (isset($viewHomeSliders))
              @foreach($viewHomeSliders as $keys => $slider)
           <tr>
            {{-- <td> {{  $viewHomeSliders->firstItem() + $loop->index  }}</td> --}}
            <td>
              <img src="{{(!empty($slider->image))  ? asset('storage/Home-slider/'.$slider->image):asset('no_image.jpg')}}" alt="..." width="70">  </td>
            <td class="tx-bold">  {!!str_limit($slider->title, $limit=20 ) !!}
            <br>Created at :{{Carbon\Carbon::parse($slider->created_at)->diffForHumans()}}
            </td>
            <td> 
              @if($slider->status == 1 )
                <span class="badge badge-success">Active</span>
              @else
                <span class="badge badge-danger">Inactive</span>
              @endif
            </td>
              <td class="text-center"> 
                    {{-- edit   --}}
                  <a href="{{route('editHomesliders',$slider->id)}}" class="btn btn-sm btn-info" title="edit" >
                    <i class="fa fa-edit"></i></a>
                    {{-- active  inactive --}}
                    @if($slider->status == 1 )
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive"  wire:click.prevent="inactive({{$slider->id}})">
                      <i class="fa fa-thumbs-down"></i>
                    @else
                      <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$slider->id}})">
                      <i class="fa fa-thumbs-up"></i>
                    @endif
                    {{-- show  --}}
                    <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show"
                    data-toggle="modal" data-target="#modaldemo{{$slider->id}}">
                      <i class="fa fa-eye"></i></a>
                      {{-- Delete --}}
                      <a href="javascript:void(0)"   class="btn btn-sm btn-danger" title="delete"   wire:click="deleteSlider({{$slider->id}})"   onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
                      <i class="fa fa-trash"></i></a>
                      {{-- Modal  --}}
                      {{-- end modal  --}}
              </td>

             </tr>
            {{-- Modal  --}}
            <div id="modaldemo{{$slider->id}}" class="modal fade">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                  <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Slider Preview </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body pd-20">
                    <h6 class=" lh-3 mg-b-20"><span class="text-primary">Slider Title :</span>
                      {{isset($slider->title) ? $slider->title : "NA" }}
                    </h6>
                      <p>Created At :{{isset($slider->created_at) ? Carbon\Carbon::parse($slider->created_at)->diffForHumans() : "NA" }} </p>
                    <p class="mg-b-5">
                      <span class="text-primary">  Paragraph : </span>
                      {{isset($slider->description) ? $slider->description : "NA"}}
                    </p>
                    <p class="mg-b-5">
                      <span class="text-primary"> Button text : </span>
                        {{isset($slider->button_text) ? $slider->button_text : "NA"}}
                      </span>
                    </p>
                    <p class="mg-b-5">
                   

                    {{-- @if(  $slider->link == Null)
                        <span class="text-primary"> Custom Link : </span>
                        <a href="{{$slider->custom_Link}}" class="btn btnPrimary2">{!! isset($slider->button_text) ? $slider->button_text : "mehr erfahren"!!} </a>
                    @endif
                    @if(!isset($slider->custom_Link))
                        <span class="text-primary"> Route Link : </span>
                        <a href="{{route($slider->link)}}" class="btn btnPrimary2">{!! isset($slider->button_text) ? $slider->button_text : "mehr erfahren"!!}</a>
                    @endif --}}
                    </p>
                    <div class="row">
                      <div class="col-md-4">
                        <span class="text-primary">Desktop Slider :</span>
                    <hr> 
                    <img width="200" class="img-fluid" src="{{(!empty($slider->image))  
                      ? asset('storage/Home-slider/'.$slider->image):asset('no_image.jpg')}}" alt="..." >
                      </div>
                      <div class="col-md-4">
                        <span class="text-primary">Tablet Slider :</span>
                    <hr> 
                    
                    <img width="200" class="img-fluid" src="{{(!empty($slider->tablet_img))  
                      ? asset('storage/Home-slider/'.$slider->tablet_img):asset('no_image.jpg')}}" alt="..." >
                      </div>
                      <div class="col-md-4">
                        <span class="text-primary">Mobile Slider :</span>
                    <hr> 
                    
                    <img width="200" class="img-fluid" src="{{(!empty($slider->mobile_img))  
                      ? asset('storage/Home-slider/'.$slider->mobile_img):asset('no_image.jpg')}}" alt="..." >
                      </div>
                    </div>
                    
                  </div><!-- modal-body -->
                
                </div>
              </div><!-- modal-dialog -->
            </div>
            {{-- end modal  --}}


                  @endforeach
                @else
            @endif
            </tbody>
          </table>
        </div><!-- table-responsive -->

            <!-- table-wrapper -->
            {{-- <p> Showing {{ $viewHomeSliders->firstItem() }}
               to {{ $viewHomeSliders->lastItem() }} 
               of total {{$viewHomeSliders->total()}}
            </p>
            {{ $viewHomeSliders->links() }} --}}
        </div><!-- card -->
{{--============================== start trashed data ============================== --}}
          @if (isset($trashdatas) && count($trashdatas)> 0)
          <div class="card pd-20 pd-sm-40">
            <h2>Restore Deleted Slider   </h2>
            <div class="table-responsive mg-t-25">
              <table class="table table-hover table-bordered mg-b-0">
                <thead class="bg-danger">
                  <tr>
                    <th class="wd-15p">Image</th>
                    <th class="wd-20p">Title</th>
                    <th class="wd-40p">Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($trashdatas as $keys => $trashed)
                  <tr>
                    <td>   
                      <img width="300" class="img-fluid" src="{{(!empty($trashed->image))  
                      ? asset('storage/Home-slider/'.$trashed->image):asset('no_image.jpg')}}" alt="..." >
                        </td>
                    <td> {{isset($trashed->title) ? str_limit($trashed->title , $limit=20 ) : "NA" }}</td>
                    <td> {!!str_limit($trashed->description, $limit=20 ) !!}</td>
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

      </div><!-- sl-pagebody -->


      <!-- modal -->
</div>



{{-- ================== --}}
