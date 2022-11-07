<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Home page </h5>
          <p>Manage Home page Content </p>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title"> Manage Banner       
            <a href="{{route('addHomebanner')}}" class="btn btn-sm btn-warning" style="float: right;" >Add Banner</a>
        </h6>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Main Title</th>
                  <th class="wd-15p">Main Subtitle </th>
                  <th class="wd-20p">Heading</th>
                  <th class="wd-15p">Image </th>
                  <th class="wd-10p">Status</th>
                  <th class="wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
@if (isset($viewHomeBanner) && count($viewHomeBanner) > 0)
@foreach($viewHomeBanner as $banner)
<tr>
  <td> {{Str::limit($banner->main_title,20,$end='....')}}</td>
  <td> {{Str::limit($banner->main_sub_title,20,$end='....')}}</td>
  <td> {{Str::limit($banner->heading,20,$end='....')}}</td>
  <td>
<img src="{{(!empty($banner->banner_image)) 
  ? asset('storage/Home-banner/'.$banner->banner_image):asset('no_image.jpg')}}" alt="..." width="70">

  </td>
  <td> 
    @if($banner->status == 1 )
      <span class="badge badge-success">Active</span>
      @else
      <span class="badge badge-danger">Inactive</span>
      @endif
    </td>
  <td>  
      <a href="{{route('editHomebanner',$banner->id)}}" class="btn btn-sm btn-info" title="edit" >
        <i class="fa fa-edit"></i></a>
      <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show"
      data-toggle="modal" data-target="#modaldemo{{$banner->id}}">
        <i class="fa fa-eye"></i></a>

        @if($banner->status == 1 )
        <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$banner->id}})">
        <i class="fa fa-thumbs-down"></i>
        @else
          <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$banner->id}})">
          <i class="fa fa-thumbs-up"></i>
        @endif
      <a href="javascript:void(0)"  wire:click.prevent="deletebanner({{$banner->id}})" class="btn btn-sm btn-danger" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
        <i class="fa fa-trash"></i></a>

        {{-- Modal  --}}
        
        {{-- end modal  --}}

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
            <h6 class=" lh-3 mg-b-20"><span class="text-primary">Banner Title :</span> {{isset($banner->main_title) ? $banner->main_title : "NA" }}</h6>
            <h5 class=" lh-3 mg-b-20"> <span class="text-primary">SubTitle :</span> {{isset($banner->main_sub_title) ? $banner->main_sub_title :"NA"}}</h5>
            <h4 class=" lh-3 mg-b-20"> <span class="text-primary">Heading :</span>{{isset($banner->heading) ? $banner->heading : "NA"}}</h4>

            <p class="mg-b-5">
              <span class="text-primary">  Paragraph : </span>{{isset($banner->banner_paragaph) ? $banner->banner_paragaph : "NA"}}
            </p>
            <p class="mg-b-5">
              <span class="text-primary"> Button text : </span>
              

                {{isset($banner->button_text) ? $banner->button_text : "NA"}}
              </span>
            </p>
            <p class="mg-b-5">
              <span class="text-primary"> Button Link : </span>
              <a href="{{isset($banner->button_link) ? $banner->button_link : "https://www.example.com/"}}">
              Button link</a>
            </p>
            <span class="text-primary"> Banner Image :</span>
             <hr> 
             
            <img width="300" class="img-fluid" src="{{(!empty($banner->banner_image))  
              ? asset('storage/Home-banner/'.$banner->banner_image):asset('no_image.jpg')}}" alt="..." >
            
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
