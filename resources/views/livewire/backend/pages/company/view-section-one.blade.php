<div>
    {{-- The whole world belongs to you. --}}
    <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Copmany Page Section 
          </h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
            @if(isset($getCompanySection1))
                      
            <a href="{{route('edit_company_section1',$getCompanySection1->id)}}"> <button class="btn btn-primary active  mg-b-10">Edit</button> </a>
            @else
            <a href="{{route('add_company_section1')}}"><button class="btn btn-teal active mg-b-10">Add</button> </a>
           @endif

          </h6>


          <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                    {{ isset($getCompanySection1->heading) ? ucwords($getCompanySection1->heading) : "NA" }}
                  </a>
                </h6>
              </div><!-- card-header -->
              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body">
                  <p>  Created at:  {{isset($getCompanySection1->created_at) ? Carbon\Carbon::parse($getCompanySection1->created_at)->diffForHumans() : "NA"}} </p>
                  <h6 class="card-body-title">
                    <span class="text-primary">  Main Meading : </span>
                    {{ isset($getCompanySection1->heading) ? $getCompanySection1->heading : "NA" }}  </h6>
                  <p class="mg-b-20 mg-sm-b-30"> <span class="text-primary"> First Title  :</span>  {{isset($getCompanySection1->title)  ? $getCompanySection1->title : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Paragraph 1: </span>{{ isset($getCompanySection1->para1) ? $getCompanySection1->para1 : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Second Title : </span>{{ isset($getCompanySection1->title2) ? $getCompanySection1->title2 : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Paragraph 2: </span>{{ isset($getCompanySection1->para2) ? $getCompanySection1->para2 : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Paragraph 3: </span>{{ isset($getCompanySection1->para3) ? $getCompanySection1->para3 : "NA"}} </p>
                  <p class="mg-b-20 mg-sm-b-30"><span class="text-primary"> Paragraph 4: </span>{{ isset($getCompanySection1->para4) ? $getCompanySection1->para4 : "NA"}} </p>
        
        
                </div>
              </div>
            </div>
       
       
          </div><!-- accordion -->
        </div><!-- card -->

    </div>
</div>
