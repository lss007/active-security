<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Home Slider </h5>
          <p>Manage Home Page Slider</p>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title"> Manage Clients       
            <a href="{{route('addHomesliders')}}" class="btn btn-sm btn-warning" style="float: right;" 
              >Add Slider</a>
        </h6>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  {{-- <th class="wd-15p">Title </th>--}}
                  <th class="wd-5p"> No </th> 
                  <th class="wd-15p">Image</th>
                  <th class="wd-20p">Title</th>
                  <th class="wd-30p">Description</th>
                  <th class="wd-10p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
              @if (isset($viewHomeSlider) && count($viewHomeSlider) > 0)
              @foreach($viewHomeSlider as $keys => $slider)
           <tr>
            <td> {{  $keys+1}}</td>
           
            <td>
              <img src="{{(!empty($slider->image)) 
                ? asset('storage/Home-slider/'.$slider->image):asset('no_image.jpg')}}" alt="..." width="70">
            </td>
            <td> {!!str_limit($slider->title, $limit=20 ) !!}</td>
            <td> {!!str_limit($slider->description, $limit=20 ) !!}
            </td>

            <td> 
              @if($slider->status == 1 )
                <span class="badge badge-success">Active</span>
              @else
                <span class="badge badge-danger">Inactive</span>
              @endif
            </td>
              <td> 
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
                  <a href="javascript:void(0)"   class="btn btn-sm btn-danger" title="delete"  wire:click.prevent="deleteSlider({{$slider->id}})"   onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
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
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Banner Preview
                
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body pd-20">
                    <h6 class=" lh-3 mg-b-20"><span class="text-primary">Banner Title :</span>
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
                      <span class="text-primary"> Button Link : </span>
                      <a href="{{isset($slider->link) ? $slider->link : "https://www.example.com/"}}">
                        {{isset($slider->link) ? $slider->link : "NA"}}</a>
                    </p>
                    <span class="text-primary"> Banner Image :</span>
                    <hr> 
                    
                    <img width="200" class="img-fluid" src="{{(!empty($slider->image))  
                      ? asset('storage/Home-slider/'.$slider->image):asset('no_image.jpg')}}" alt="..." >
                    
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
          </div><!-- table-wrapper -->

          
        </div><!-- card -->
{{--============================== start trashed data ============================== --}}
        @if (isset($trashdata) && count($trashdata) > 0)
        <div class="card pd-20 pd-sm-40">
          <h2>Restore Deleteed Slider   </h2>
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
              
                @foreach($trashdata as $keys => $trashed)
                <tr>
             
                  <td>   
                    <img width="300" class="img-fluid" src="{{(!empty($trashed->image))  
                    ? asset('storage/Home-slider/'.$trashed->image):asset('no_image.jpg')}}" alt="..." >
                      </td>
                  <td> {{isset($trashed->title) ? str_limit($trashed->title , $limit=20 ) : "NA" }}</td>
                  <td> {!!str_limit($slider->description, $limit=20 ) !!}</td>

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
{{--============================== end trashed data ============================== --}}

      </div><!-- sl-pagebody -->


      <!-- modal -->
</div>



{{-- ================== --}}
