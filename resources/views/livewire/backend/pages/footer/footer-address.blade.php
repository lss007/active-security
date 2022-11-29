<div>
  {{-- The whole world belongs to you. --}}
  <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>{{__('dashboard.Add contact address')}}
        </h5>
      </div><!-- sl-page-title -->
      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">
          @if(isset($contactAddress) )
          @if($contactAddress->status == 1 )
        
          
          <a href="javascript:void(0)" class="btn btn-success active  mg-b-10"  wire:click.prevent="inactive({{$contactAddress->id}})">
            Inactive </a>
          @else
            <a href="javascript:void(0)" class="btn btn-info active  mg-b-10" wire:click.prevent="active({{$contactAddress->id}})">
          Active</a>
          @endif
      
          <a href="javascript:void(0)" class="btn btn-danger active  mg-b-10"  wire:click.prevent="delete({{$contactAddress->id}})">
            Delete </a>      

            <a href="{{route('edit_footer_address',$contactAddress->id)}}"> <button class="btn btn-primary active mg-b-10">Edit</button> </a>

         

          
          @else
          @if(isset($trashdata))
          <a href="javascript:void(0)" class="btn btn-warning  mg-b-10"  wire:click.prevent="restore({{$trashdata->id}})">
            Restore </a>  
            @endif
            <a href="{{route('Add_footer_address')}}"><button class="btn btn-teal active b mg-b-10">Add</button> </a>

      
          @endif

        </h6>


        <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-header" role="tab" id="headingOne">
              <h6 class="mg-b-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                  {{__('dashboard.Footer contact address')}}
                </a>
              </h6>
            </div><!-- card-header -->
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
               <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                      <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary">  Name   :</span> 
                        {{ isset($contactAddress->name) ? $contactAddress->name : "NA" }} </h5>
          
                        <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary">  Vat Id   :</span> 
                          {{ isset($contactAddress->vatid) ? $contactAddress->vatid : "NA" }} </h5>
                        <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary">  Telefon   :</span> 
                            {{ isset($contactAddress->telefon) ? $contactAddress->telefon : "NA" }} </h5>
                
                        <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary">Fax   :</span> 
                           {{isset($contactAddress->fax)  ? $contactAddress->fax : "NA"}} </h5>
                       
                        <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary">Email   :</span> 
                           {{isset($contactAddress->email)  ? $contactAddress->email : "NA"}} </h5>
                           <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary">Address   :</span> 
                            {{isset($contactAddress->address)  ? $contactAddress->address : "NA"}} </h5>
                    </div>
                    <div class="col-md-4">
                      <div class="card wd-xs-300">
                        <span class="text-primary">    Footer logo Image : </span>
                        <img class="card-img-bottom img-fluid"  src="{{(!empty($contactAddress->logo)) 
                          ? asset('storage/footer-logo/'.$contactAddress->logo):asset('no_image.jpg')}}" alt="..."  style="width: 100px">
                      </div><!-- card -->
                    </div>
                  </div>
                
            

                 <div class="card-header my-3">
                  <h6 class="mg-b-0">
                    <a class="tx-gray-800 transition">
                  {{__('dashboard.footer call, mail and WhatsApp info:')}}
                    </a>
                  </h6>
                </div><!-- card-header -->

                 <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary">Call to    :</span> 
                  {{isset($contactAddress->call_to)  ? $contactAddress->call_to : "NA"}} </h5>

                  <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary">Mail to    :</span> 
                    {{isset($contactAddress->mail_to)  ? $contactAddress->mail_to : "NA"}} </h5>


                    <h5 class="mg-b-20 mg-sm-b-30"> <span class="text-primary">Whatsapp to    :</span> 
                      {{isset($contactAddress->Whatsapp_to)  ? $contactAddress->Whatsapp_to : "NA"}} </h5>


             
        



          </div>
            </div>
          </div>
     
     
        </div><!-- accordion -->
      </div><!-- card -->

  </div>
</div>
