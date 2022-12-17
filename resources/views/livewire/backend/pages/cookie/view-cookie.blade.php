<div>
    {{-- The whole world belongs to you. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>
           View Cookies
          </h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
            @if(isset($getCookies) )
            @else
            <a href="{{route('add_cookies')}}"><button class="btn btn-teal active mg-b-10">Add</button> </a>
            @endif 
          </h6>
          <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                    {{ isset($$getCookies->heading) ? ucwords($$getCookies->heading) : "NA" }}
                  </a>
                </h6>
              </div><!-- card-header -->
              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="row">
              <div class="col-md-12">
                <div class="card-body">

               
                  <p>  Created at:  {{isset($$getCookies->created_at) ? Carbon\Carbon::parse($$getCookies->created_at)->diffForHumans() : "NA"}} </p>
                  <h6 class="card-body-title">
                    <span class="text-primary">   Text : </span>
                    {{ isset($$getCookies->heading) ? $$getCookies->heading : "NA" }}  </h6>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Button 1: </span>{{ isset($$getCookies->para1) ? $$getCookies->para1 : "NA"}} </p>

                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Button 2: </span>{{ isset($$getCookies->para2) ? $$getCookies->para2 : "NA"}} </p>

        
        
                </div>



                
              </div>
             
            </div>
              </div>
            </div>
       
       
          </div><!-- accordion -->
        </div><!-- card -->

    </div>
</div>
