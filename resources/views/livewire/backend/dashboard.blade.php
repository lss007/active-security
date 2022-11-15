<div>
    {{-- In work, do what you enjoy. --}}
        <div class="sl-pagebody">
          <div class="row row-sm">
            <div class="col-sm-6 col-xl-3">
              <div class="card pd-20 bg-primary">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                  <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Messages </h6>
                  <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                  <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                  <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{isset($getContacts) ?count($getContacts) : "NA"}}</h3>
                </div><!-- card-body -->
           
              </div><!-- card -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
              <div class="card pd-20 bg-info">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                  <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Week's</h6>
                  <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                  <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                  <h3 class="mg-b-0 tx-white tx-lato tx-bold">25</h3>
                </div><!-- card-body -->
          
              </div><!-- card -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="card pd-20 bg-purple">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                  <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's</h6>
                  <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                  <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                  <h3 class="mg-b-0 tx-white tx-lato tx-bold">8</h3>
                </div><!-- card-body -->
         
              </div><!-- card -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="card pd-20 bg-sl-primary">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                  <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's </h6>
                  <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                  <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                  <h3 class="mg-b-0 tx-white tx-lato tx-bold">39</h3>
                </div><!-- card-body -->
           
              </div><!-- card -->
            </div><!-- col-3 -->
       @php
         
       @endphp     

<div class="col-md-12">
  <div class="card widget-messages mg-t-20">
    <div class="card-header">
      <span>Messages</span>
      <a href=""><i class="icon ion-more"></i></a>
    </div><!-- card-header -->
    <div class="list-group list-group-flush">
      @if(isset($getContacts))
      @foreach($getContacts as $getrow) 
      <a href="" class="list-group-item list-group-item-action media">
        <img src="../img/img10.jpg" alt="">
        <div class="media-body">
          <div class="msg-top">
            <span>{{isset($getrow->surname) ?  ucwords(str_limit($getrow->surname, $limit=20 )) : "NA" }}</span>
            <span>{{Carbon\Carbon::parse($getrow->created_at)->diffForHumans()}}</span>
          </div>
          <p class="msg-summary"> {{isset($getrow->client_message) ?  str_limit($getrow->client_message, $limit=100 ) : "NA" }}</p>
        </div><!-- media-body -->
      </a><!-- list-group-item -->
      @endforeach

   
      @endif
    </div><!-- list-group -->
    <div class="card-footer">
      {{-- <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-3"></i> Load more messages</a> --}}
    </div><!-- card-footer -->
  </div>
</div>

           
          </div><!-- row -->
  
  
  
        </div><!-- sl-pagebody -->

</div>
