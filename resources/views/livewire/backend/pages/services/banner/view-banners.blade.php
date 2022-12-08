<div>
    {{-- Stop trying to control. --}}

    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{__('dashboard.Manage Services Pages Banner')}} </h5>
    
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                    {{__('dashboard.Manage Services Pages Banner')}}
                  </a>
                </h6>
              </div><!-- card-header -->
      
              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body">
                  <form  wire:submit.prevent="savebottombanner">
                    <div class="form-layout">
                      <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force" wire:ignore>
                              <label class="form-control-label"> Section Page Name : <span class="tx-danger">*</span></label>
                              <select  class="form-control " wire:model="pageCatId" >
                                <option selected class="form-control" disabled>Choose Page Category </option>
                                @if(isset($getPCategory))
                                    @foreach($getPCategory as $category )
                                        <option value="{{$category->id}}"  class="form-control">{{ucwords($category->page_cat_name)}}</option>
                                    @endforeach
                                @endif
                              </select>
                              
                            </div>
                            @error('pageCatId')<span class="tx-danger"> {{$message}}</span>  @enderror  
                        </div><!-- col-4 -->


                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label"> Banner Text : <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control"  wire:model="heading" placeholder="Banner text" >
                                @error('heading')<span class="tx-danger"> {{$message}}</span>  @enderror  
                          </div>
                        </div><!-- col-4 -->
                       
                        <div class="col-lg-4">
                          <label class="form-control-label"> Banner Image For Desktop:   <span class="tx-danger"> *</span></label><br>
                            <div class="row croper_sec">
                              <div class="col-md-12">
                                <div class="image_area">
                                  <form method="post">
                                    <label for="banner_upload_img1" class="cabinet uploadStyle ">  
                                      <img src="" id="banner_uploaded_img1"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                      <span>Upload Image</span>                          
                                      <input type="file" name="image" class="image" id="banner_upload_img1"  />
                                    </label>
                                  </form>
                                </div>
                              </div>
                          @error('getServicesImg')<span class="text-danger"> {{$message}}</span>  @enderror  
            
                              {{-- start large model  --}}
                              <div id="banner_modal1" class="modal fade" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content tx-size-sm">
                                    <div class="modal-header pd-x-20">
                                      <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Crop Image Before Upload For Desktop</h6>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body pd-20">
                                      <div class="img-container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <img src="" id="sample_image1" />
                                            </div>
                                            <div class="col-md-4 pointerNone">
                                                <div class="preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                    </div><!-- modal-body -->
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal" > Cancel</button>
                                      <button type="button" class="btn btn-info pd-x-20"  id="crop">Crop</button>
                                    </div>
                                  </div>
                                </div><!-- modal-dialog -->
                              </div><!-- modal -->
                              {{-- end large model  --}}                     
                          </div>
                        </div>
                            
                         {{-- tablet --}}
                         <div class="col-lg-4">
                          <label class="form-control-label"> Banner Image For Tablet:   <span class="tx-danger"> *</span></label><br>
                            <div class="row croper_sec">
                              <div class="col-md-12">
                                <div class="image_area">
                                  <form method="post">
                                    <label for="banner__upload_img2" class="cabinet uploadStyle ">  
                                      <img src="" id="banner_uploaded_img2"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                      <span>Upload Image</span>                          
                                      <input type="file" name="image" class="image" id="banner__upload_img2"  />
                                    </label>
                                  </form>
                                </div>
                              </div>
                          @error('getServicesImg2')<span class="text-danger"> {{$message}}</span>  @enderror  
            
                              {{-- start large model  --}}
                              <div id="banner_modal2" class="modal fade" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content tx-size-sm">
                                    <div class="modal-header pd-x-20">
                                      <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Crop Image Before Upload For Tablet</h6>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body pd-20">
                                      <div class="img-container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <img src="" id="banner_img2" />
                                            </div>
                                            <div class="col-md-4 pointerNone">
                                                <div class="preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                    </div><!-- modal-body -->
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal" > Cancel</button>
                                      <button type="button" class="btn btn-info pd-x-20"  id="crop2">Crop</button>
                                    </div>
                                  </div>
                                </div><!-- modal-dialog -->
                              </div><!-- modal -->
                              {{-- end large model  --}}                     
                          </div>
                        </div>
                         {{-- tablet  --}}
            
                        {{-- For mobile  --}}
                        <div class="col-lg-4">
                          <label class="form-control-label"> Banner Image For Mobile:   <span class="tx-danger"> *</span></label><br>
                            <div class="row croper_sec">
                              <div class="col-md-12">
                                <div class="image_area">
                                  <form method="post">
                                    <label for="upload_image3" class="cabinet uploadStyle ">  
                                      <img src="" id="uploaded_image3"  class="wd-- img-responsive img-fluid rounded" wire:ignore  style="max-height: auto ; width:200px;"/> 
                                      <span>Upload Image</span>                          
                                      <input type="file" name="image" class="image" id="upload_image3"  />
                                    </label>
                                  </form>
                                </div>
                              </div>
                          @error('getServicesImg3')<span class="text-danger"> {{$message}}</span>  @enderror  
            
                              {{-- start large model  --}}
                              <div id="banner_modal3" class="modal fade" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content tx-size-sm">
                                    <div class="modal-header pd-x-20">
                                      <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Crop Image Before Upload For Mobile</h6>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body pd-20">
                                      <div class="img-container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <img src="" id="banner_img3" />
                                            </div>
                                            <div class="col-md-4 pointerNone">
                                                <div class="preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                    </div><!-- modal-body -->
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal" > Cancel</button>
                                      <button type="button" class="btn btn-info pd-x-20"  id="crop3">Crop</button>
                                    </div>
                                  </div>
                                </div><!-- modal-dialog -->
                              </div><!-- modal -->
                              {{-- end large model  --}}                     
                          </div>
                        </div>
        
                      </div><!-- row -->
          
                      <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5" type="submit" wire:loading.attr="disabled">Publish</button>
                       <div  wire:loading class="pd-x-20">
                           <img src="https://paladins-draft.com/img/circle_loading.gif" width="64px" height="64" >
                       </div>
                    
                      </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
        
              
      
      
      
                </div>
              </div>
            </div>
          
      
          </div><!-- accordion -->


    {{-- ========================================================================================== --}}
           
    <div class="col-lg-12">
      <div class="form-group">
         <label class="form-control-label"> Search  : </label>
         <input class="form-control" placeholder="Search by heading.." type="text" wire:model="search">  <br> 

       </div>
    </div><!-- col-4 -->   
    <div class="table-responsive">
      <table class="table table-hover table-bordered mg-b-0">
        <thead class="bg-info">
          <tr>
            <th class="wd-5p">S.No </th>
            <th class="wd-15p">Banner Image </th>
            <th class="wd-15p">Page Category </th>
            <th class="wd-15p"> Heading </th>

            <th class="wd-10p">Status</th>
            <th class="wd-20p">Action</th>
          </tr>
        </thead>
        <tbody>
          @if (isset($allBanners) && count($allBanners) > 0)
          @foreach($allBanners as $key => $banner)
            <tr>
              <td>   {{  $allBanners->firstItem() + $loop->index  }}  </td>
              <td>
                <img src="{{(!empty($banner->banner)) ? asset('storage/services-banner/'.$banner->banner):asset('no_image.jpg')}}" alt="..." style=" width:100%">
              </td>
              <td>{{isset($banner->page_cat_name) ? $banner->page_cat_name : "NA" }}</td>
              <td>{!! isset($banner->heading) ?str_limit($banner->heading, $limit=15 ) : "NA" !!} </td>
              <td>
                      @if($banner->status == 1 )
                      <span class="badge badge-success">Active</span>
                      @else
                      <span class="badge badge-danger">Inactive</span>
                      @endif
              </td>
              <td class="text-center">  
                  <a href="{{route('edit_services_banner',$banner->id )}}" class="btn btn-sm btn-info" title="edit" >
                    <i class="fa fa-edit"></i></a>

                  <a href="javascript:void(0)" class="btn btn-sm btn-warning" title="Show" data-toggle="modal" data-target="#modaldemo{{$banner->id}}">
                    <i class="fa fa-eye"></i></a>

                    @if($banner->status == 1 )
                    <a href="javascript:void(0)" class="btn btn-sm btn-danger mx-2" title="Inactive" wire:click.prevent="inactive({{$banner->id}})">
                    <i class="fa fa-thumbs-down"></i>
                    @else
                      <a href="javascript:void(0)" class="btn btn-sm btn-info mx-2" title="Active" wire:click.prevent="active({{$banner->id}})">
                      <i class="fa fa-thumbs-up"></i>
                    @endif
                  <a href="javascript:void(0)"  wire:click.prevent="delete({{$banner->id}})" class="btn btn-sm btn-danger" title="delete"  onclick="confirm('Are you sure you want to delete this?') || event.stopImmediatePropagation()">
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
      <h6 class=" lh-3 mg-b-20"><span class="text-primary">Page Category :</span> {{isset($banner->page_cat_name) ? $banner->page_cat_name : "NA" }} </h6>
      <h6 class=" lh-3 mg-b-20"><span class="text-primary">Banner Heading :</span> {{isset($banner->heading) ? $banner->heading : "NA" }}</h6>
  
      <h6 class=" lh-3 mg-b-20"><span class="text-primary">Banner Status :</span> 
      
        @if($banner->status == 1 )
        <span class="badge badge-success">Active</span>
        @else
        <span class="badge badge-danger">Inactive</span>
        @endif
      </h6>
   

      <div class="row">
        <div class="col-md-4">
          <span class="text-primary">Desktop Banner  :</span>
          <hr> 
          <img width="200" class="img-fluid" src="{{(!empty($banner->banner))  
          ? asset('storage/services-banner/'.$banner->banner):asset('no_image.jpg')}}" alt="..." >
        </div>
        <div class="col-md-4">
          <span class="text-primary">Tablet Banner  :</span>
          <hr> 
          <img width="200" class="img-fluid" src="{{(!empty($banner->tablet_banner))  
          ? asset('storage/services-banner/'.$banner->tablet_banner):asset('no_image.jpg')}}" alt="..." >
        </div>
        <div class="col-md-4">
          <span class="text-primary">Mobile Banner  :</span>
          <hr> 
          <img width="200" class="img-fluid" src="{{(!empty($banner->mobile_banner))  
          ? asset('storage/services-banner/'.$banner->mobile_banner):asset('no_image.jpg')}}" alt="..." >
        </div>

      </div>
     
    </div><!-- modal-body -->
  </div>
</div><!-- modal-dialog -->
</div><!-- modal -->

@endforeach
@else

@endif
          
     
   
        </tbody>
      </table>
      <p>

        Showing {{ $allBanners->firstItem() }} to {{ $allBanners->lastItem() }} of total {{$allBanners->total()}}
      </p>
  
      
      {{ $allBanners->links() }}

      @if (isset($trashdata) && count($trashdata) > 0 )
      <div class="card pd-20 pd-sm-40">
        <h4>Restore Deleteed    </h4>
        <div class="table-responsive mg-t-25">
        <table class="table table-hover table-bordered mg-b-0">
          <thead class="bg-danger">
            <tr>
    
              <th class="wd-15p">Desktop 1</th>
              <th class="wd-20p">Tablet 2</th>
              <th class="wd-40p">Mobile 3</th>
              <th>Action</th>
    
            </tr>
          </thead>
          <tbody>
          
            @foreach($trashdata as $keys => $trashed)
            <tr>
          
              <td>   
                <img width="100" class="img-fluid" src="{{(!empty($trashed->banner))  
                ? asset('storage/services-banner/'.$trashed->banner):asset('no_image.jpg')}}" alt="..." >
                  </td>
                  <td>   
                    <img width="100" class="img-fluid" src="{{(!empty($trashed->tablet_banner))  
                    ? asset('storage/services-banner/'.$trashed->tablet_banner):asset('no_image.jpg')}}" alt="..." >
                      </td>
                      <td>   
                        <img width="100" class="img-fluid" src="{{(!empty($trashed->mobile_banner))  
                        ? asset('storage/services-banner/'.$trashed->mobile_banner):asset('no_image.jpg')}}" alt="..." >
                          </td>
    
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

    </div><!-- table-responsive -->
   


       
 
        </div><!-- card -->
        
      </div><!-- sl-pagebody -->


      <!-- modal -->
      <script>
        $(document).ready(function(){
          var $modal = $('#banner_modal1');
          var image = document.getElementById('sample_image1');
          var cropper;
        
        
          $('#banner_upload_img1').change(function(event){
              var files = event.target.files;
              var done = function (url) {
                  image.src = url;
                  $modal.modal('show');
              };
          
        
              if (files && files.length > 0)
              {
        
                    reader = new FileReader();
                    reader.onload = function (event) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(files[0]);
                  
              }
          });
        
          $modal.on('shown.bs.modal', function() {
              cropper = new Cropper(image, {
                // aspectRatio: 1,
                viewMode: 3,
                autoCropArea : 1,
                fillColor: '#fff',
                preview: '.preview',
              });
            
          }).on('hidden.bs.modal', function() {
                cropper.destroy();
                cropper = null;
          });
        
          $("#crop").click(function(){
              canvas = cropper.getCroppedCanvas({
                  // width: 400,
                  // height: 400,
                  imageSmoothingEnabled: true,
                  imageSmoothingQuality: 'high',
              });
    
              canvas.toBlob(function(blob) {
                  //url = URL.createObjectURL(blob);
                  var reader = new FileReader();
                    reader.readAsDataURL(blob); 
                    reader.onloadend = function() {
                      var base64data = reader.result;  
    
                Livewire.emit('addBottomBanner1',  base64data)
          
                $modal.modal('hide');
                $('#banner_uploaded_img1').attr('src', base64data);
                
                  
                    }
              });
            });
          
        });
      </script>
      <script>
        $(document).ready(function(){
          var $modal = $('#banner_modal2');
          var image = document.getElementById('banner_img2');
          var cropper;
        
        
          $('#banner__upload_img2').change(function(event){
              var files = event.target.files;
              var done = function (url) {
                  image.src = url;
                  $modal.modal('show');
              };
         
        
              if (files && files.length > 0)
              {
        
                    reader = new FileReader();
                    reader.onload = function (event) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(files[0]);
                 
              }
          });
        
          $modal.on('shown.bs.modal', function() {
              cropper = new Cropper(image, {
                // aspectRatio: 1,
                viewMode: 3,
                autoCropArea : 1,
                fillColor: '#fff',
                preview: '.preview',
              });
            
          }).on('hidden.bs.modal', function() {
               cropper.destroy();
               cropper = null;
          });
        
          $("#crop2").click(function(){
              canvas = cropper.getCroppedCanvas({
                  // width: 400,
                  // height: 400,
                  imageSmoothingEnabled: true,
                  imageSmoothingQuality: 'high',
              });
    
              canvas.toBlob(function(blob) {
                  //url = URL.createObjectURL(blob);
                  var reader = new FileReader();
                   reader.readAsDataURL(blob); 
                   reader.onloadend = function() {
                      var base64data = reader.result;  
    
                Livewire.emit('addBottomBanner2',  base64data)
          
                $modal.modal('hide');
                $('#banner_uploaded_img2').attr('src', base64data);
                
                  
                   }
              });
            });
          
        });
      </script>
      <script>
        $(document).ready(function(){
          var $modal = $('#banner_modal3');
          var image = document.getElementById('banner_img3');
          var cropper;
        
        
          $('#upload_image3').change(function(event){
              var files = event.target.files;
              var done = function (url) {
                  image.src = url;
                  $modal.modal('show');
              };
         
        
              if (files && files.length > 0)
              {
        
                    reader = new FileReader();
                    reader.onload = function (event) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(files[0]);
                 
              }
          });
        
          $modal.on('shown.bs.modal', function() {
              cropper = new Cropper(image, {
                // aspectRatio: 1,
                viewMode: 3,
                autoCropArea : 1,
                fillColor: '#fff',
                preview: '.preview',
              });
            
          }).on('hidden.bs.modal', function() {
               cropper.destroy();
               cropper = null;
          });
        
          $("#crop3").click(function(){
              canvas = cropper.getCroppedCanvas({
                  // width: 400,
                  // height: 400,
                  imageSmoothingEnabled: true,
                  imageSmoothingQuality: 'high',
              });
    
              canvas.toBlob(function(blob) {
                  //url = URL.createObjectURL(blob);
                  var reader = new FileReader();
                   reader.readAsDataURL(blob); 
                   reader.onloadend = function() {
                      var base64data = reader.result;  
    
                Livewire.emit('addBottomBanner3',  base64data)
          
                $modal.modal('hide');
                $('#uploaded_image3').attr('src', base64data);
                
                  
                   }
              });
            });
          
        });
      </script>
</div>


{{-- ================== --}}
