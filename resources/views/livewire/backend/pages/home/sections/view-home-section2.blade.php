<div>
  {{-- The whole world belongs to you. --}}
  <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>{{__('dashboard.Home Page Section 2')}} 
        </h5>
      </div><!-- sl-page-title -->
{{-- ========================== --}}
 <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">
          @if(isset($homeSectionTwo)) 
          @if($homeSectionTwo->status == 1 )
            <a href="javascript:void(0)" class="btn btn-success active  mg-b-10"  
             wire:click.prevent="inactive({{$homeSectionTwo->id}})">Inactive </a>
          @else
              <a href="javascript:void(0)" class="btn btn-info active  mg-b-10"
              wire:click.prevent="active({{$homeSectionTwo->id}})"> Active</a>
          @endif
          <a href="{{route('edit_HomeSection2',$homeSectionTwo->id)}}"> 
              <button class="btn btn-primary active  mg-b-10">Edit</button> </a>
              <a href="javascript:void(0)" class="btn btn-warning active  mg-b-10"   wire:click.prevent="delete({{$homeSectionTwo->id}})">
                Trash </a> 
             @else
                <a href="{{route('add_HomeSection2')}}"><button class="btn btn-teal active mg-b-10">Add</button> </a>
             @if(isset($trashdata))
             <a href="javascript:void(0)" class="btn btn-warning  mg-b-10"  wire:click.prevent="restore({{$trashdata->id}})">
               Restore </a>  
               {{-- <a href="javascript:void(0)" class="btn btn-danger  mg-b-10"  wire:click.prevent="fulleDelete({{$trashdata->id}})">
                Delete </a>   --}}
            @endif
             @endif
        </h6>
        <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-header" role="tab" id="headingOne">
              <h6 class="mg-b-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">

          {{ isset($homeSectionTwo->heading) ? ucwords( $homeSectionTwo->heading) : "NA" }}
                </a>
              </h6>
            </div><!-- card-header -->

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-10">
                      <h6 class="card-body-title">
                        <p>Created at:  {{isset($homeSectionTwo->created_at) ? 
                          Carbon\Carbon::parse($homeSectionTwo->created_at)->diffForHumans() : "NA"}}</p>
                        <span class="text-primary"> Main Heading :</span>
                          {{ isset($homeSectionTwo->heading) ? $homeSectionTwo->heading : "NA" }}  </h6>
                        <h6 class="mg-b-20 mg-sm-b-30 tx-bold"><span class="text-primary"> Main Sub Heading : </span> {{isset($homeSectionTwo->title)  ? $homeSectionTwo->title : "NA"}} </h6>
                        <p class="mg-b-20 mg-sm-b-30 tx-bold"> <span class="text-primary">Paragraph : </span>{{ isset($homeSectionTwo->para1) ? $homeSectionTwo->para1 : "NA"}} </p>
                        <p class="mg-b-20 mg-sm-b-30 tx-bold"><span class="text-primary"> Paragraph :</span>{{ isset($homeSectionTwo->para2) ? $homeSectionTwo->para2 : "NA"}} </p>
                        <p class="mg-b-20 mg-sm-b-30 tx-bold"><span class="text-primary"> Button :</span> <a href="{{ isset($homeSectionTwo->button_link) ? $homeSectionTwo->button_link : "#"}}"> {{ isset($homeSectionTwo->button_name) ? $homeSectionTwo->button_name : "NA"}}</a>  </p>
                     
                      <div class="row">
                        <div class="col-md-4">
                          <span class="text-primary">Desktop Image : </span>
                          <img class="card-img-bottom img-fluid"  
                          src="{{(!empty($homeSectionTwo->image)) ? asset('storage/Home-section/'.$homeSectionTwo->image):asset('no_image.jpg')}}" alt="..."  width="100px">
                         </div><!-- card -->
                         <div class="col-md-4">
                          <span class="text-primary"> Tablet Image : </span>
                          <img class="card-img-bottom img-fluid" 
                           src="{{(!empty($homeSectionTwo->tablet_img)) ? asset('storage/Home-section/'.$homeSectionTwo->tablet_img):asset('no_image.jpg')}}" alt="..."  width="100px">
                         </div><!-- card -->
                         <div class="col-md-4">
                          <span class="text-primary">    Mobile Image : </span>
                          <img class="card-img-bottom img-fluid" 
                           src="{{(!empty($homeSectionTwo->mobile_img)) ? asset('storage/Home-section/'.$homeSectionTwo->mobile_img):asset('no_image.jpg')}}" alt="..."  width="100px">
                        </div><!-- card -->
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div><!-- accordion -->
      </div><!-- card -->
{{-- ================================= --}}

  </div>
</div>
