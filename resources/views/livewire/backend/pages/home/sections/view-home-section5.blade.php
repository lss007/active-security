<div>
  {{-- The whole world belongs to you. --}}
  <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>{{__('dashboard.Home Page Last Section')}}
        </h5>
      </div><!-- sl-page-title -->
{{-- ========================== --}}
 <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">
          @if(isset($homeSectionfive))

          @if($homeSectionfive->status == 1 )
          <a href="javascript:void(0)" class="btn btn-success active  mg-b-10"  
           wire:click.prevent="inactive({{$homeSectionfive->id}})">Inactive </a>
        @else
            <a href="javascript:void(0)" class="btn btn-info active  mg-b-10"
            wire:click.prevent="active({{$homeSectionfive->id}})"> Active</a>
        @endif

                    <a href="{{route('edit_Home_Section5',$homeSectionfive->id)}}">
                       <button class="btn btn-primary active  mg-b-10">Edit</button> </a>
                       <a href="javascript:void(0)" class="btn btn-warning active  mg-b-10"   wire:click.prevent="delete({{$homeSectionfive->id}})">
                        Delete </a> 
                    @else
                    <a href="{{route('Add_Home_Section5')}}">
                      <button class="btn btn-teal active  mg-b-10">Add</button> </a>
                      @if(isset($trashdata))
                      <a href="javascript:void(0)" class="btn btn-warning  mg-b-10"  wire:click.prevent="restore({{$trashdata->id}})">
                        Restore 
                      </a>  
                      <a href="javascript:void(0)" class="btn btn-danger  mg-b-10"  wire:click.prevent="fulleDelete({{$trashdata->id}})">
                        Delete 
                      </a>  
                     @endif
                 @endif
        </h6>
     

        <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-header" role="tab" id="headingOne">
              <h6 class="mg-b-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">

          {{ isset($homeSectionfive->heading) ? ucwords( $homeSectionfive->heading) : "NA" }}
                </a>
              </h6>
            </div><!-- card-header -->

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
              <div class="card-body">
      
                <div class="row">
                    <div class="col-md-10">
                    <h6 class="card-body-title">
                      <p>  
                        Created At :  {{isset($homeSectionfive->created_at) ? 
                        Carbon\Carbon::parse($homeSectionfive->created_at)->diffForHumans() : "NA"}}</p>
                      <span class="text-primary"> Main Heading :</span>
                                {{ isset($homeSectionfive->heading) ? $homeSectionfive->heading : "NA" }}  </h6>
                      <h5 class="mg-b-20 mg-sm-b-30 tx-bold"> <span class="text-primary">Main Sub Heading : </span> {{isset($homeSectionfive->title)  ? $homeSectionfive->title : "NA"}} </h5>
                      <p class="mg-b-20 mg-sm-b-30 tx-bold"><span class="text-primary"> Paragraph : </span>{{ isset($homeSectionfive->para1) ? $homeSectionfive->para1 : "NA"}} </p>
                      <p class="mg-b-20 mg-sm-b-30 tx-bold"><span class="text-primary"> Paragraph : </span>{{ isset($homeSectionfive->para2) ? $homeSectionfive->para2 : "NA"}} </p>
                      <h5 class="mg-b-20 mg-sm-b-30 tx-bold"><span class="text-primary"> Button link  :</span><a href="{{ isset($homeSectionfive->button_link) ? $homeSectionfive->button_link : "NA"}} ">{{ isset($homeSectionfive->button_name) ? $homeSectionfive->button_name : "NA"}} </a></h5>
                  
                      <div class="row">
                        <div class="col-md-4">
                          <span class="text-primary ">   Main Image : </span>
                          <img class="card-img-bottom img-fluid"  src="{{(!empty($homeSectionfive->image)) 
                            ? asset('storage/Home-section/'.$homeSectionfive->image):asset('no_image.jpg')}}" alt="..."  width="200px">
                        </div><!-- card -->
                        <div class="col-md-4">
                          <span class="text-primary ">   Main Image : </span>
                          <img class="card-img-bottom img-fluid"  src="{{(!empty($homeSectionfive->tablet_img)) 
                            ? asset('storage/Home-section/'.$homeSectionfive->tablet_img):asset('no_image.jpg')}}" alt="..."  width="200px">
                        </div><!-- card -->

                        <div class="col-md-4">
                          <span class="text-primary ">   Main Image : </span>
                          <img class="card-img-bottom img-fluid"  src="{{(!empty($homeSectionfive->mobile_img)) 
                            ? asset('storage/Home-section/'.$homeSectionfive->mobile_img):asset('no_image.jpg')}}" alt="..."  width="200px">
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
