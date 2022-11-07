<div>
  {{-- The whole world belongs to you. --}}
  <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Footer Contact Address
        </h5>
     
        
      </div><!-- sl-page-title -->
 


  <div class="row row-sm mg-t-50">
      <div class="col-lg-2 mg-t-25 mg-lg-t-0">
          <div class="card pd-20 pd-sm-40"> 
                  <div class="btn-demo">
                   <a href="{{route('Add_footer_address')}}"><button class="btn btn-teal active btn-block mg-b-10">Add</button> </a>
                  @if(isset($contactAddress))

                   <a href="{{route('edit_footer_address',$contactAddress->id)}}"> <button class="btn btn-primary active btn-block mg-b-10">Edit</button> </a>
                 @endif
                  </div><!-- btn-demo -->
          </div><!-- card -->
          
      </div><!-- col-6 -->
  <div class="col-lg-10 mg-t-25 mg-lg-t-0">
    <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h6 class="mg-b-0">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
              View  Footer Contact Address
            </a>
          </h6>
        </div><!-- card-header -->

        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
          <div class="card-body">
         
  
              <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary"> Main Meading   :</span> 
                  {{ isset($contactAddress->telefon) ? $contactAddress->telefon : "NA" }} </h5>
      
              <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary">Fax   :</span> 
                 {{isset($contactAddress->fax)  ? $contactAddress->fax : "NA"}} </h5>
             
              <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary">Email   :</span> 
                 {{isset($contactAddress->email)  ? $contactAddress->email : "NA"}} </h5>
      
      
                 <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary">Address   :</span> 
                  {{isset($contactAddress->address)  ? $contactAddress->address : "NA"}} </h5>
              <div class="card wd-xs-300">
                <span class="text-primary">    Footer logo Image : </span>
                <img class="card-img-bottom img-fluid"  src="{{(!empty($contactAddress->logo)) 
                  ? asset('storage/footer-logo/'.$contactAddress->logo):asset('no_image.jpg')}}" alt="..."  style="width: 100px">
              </div><!-- card -->
        



          </div>
        </div>
      </div>
    

    </div><!-- accordion -->
  
      
  </div><!-- col-6 -->




  </div>
  </div>
</div>
