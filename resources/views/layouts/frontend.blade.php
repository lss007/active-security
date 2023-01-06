<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @php
        $SeoData = DB::table('seo_settings')->where('status',1)->first();
        // dd($SeoData);
      @endphp
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="icon/image" href="{{ asset('frontend/images/favicon.ico')}}">
      <link rel="canonical" href="{{ url()->current() }}" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{isset($SeoData->title) ? trim($SeoData->title) : "active-sec.de | Sicherheitsdienst in Regensburg" }}</title>
      <meta name="description" content="{{isset($SeoData->description) ? trim($SeoData->description) : "" }}">
      <meta name="keywords" content="{{isset($SeoData->keywords) ? trim($SeoData->keywords) : "" }}">
      <meta name="author" content="{{isset($SeoData->author) ? $SeoData->author : "" }}">
      <meta property="og:title" content="{{isset($SeoData->og_title) ? $SeoData->og_title : "" }}" />
      <meta property="og:description" content="{{isset($SeoData->og_description) ? $SeoData->og_description : "" }}" />
      <meta property="og:image" content="{{isset($SeoData->og_image) ? asset('storage/meta/'.$SeoData->og_image) : "" }}" />
    {{-- start frontend css  --}}
      <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('frontend/css/bootstrap.min.css.map') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('frontend/css/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" />


  {{-- end frontend css  --}}
  @livewireStyles
</head>
<body>
  {{-- loader div 
    <div class="loaderCol">
    <div class="preloader-orbit-loading">
      <img src="{{ asset('frontend/images/logo-icon.png')}}" alt="...">
      <div class="cssload-inner cssload-one"></div>
      <div class="cssload-inner cssload-two"></div>
      <div class="cssload-inner cssload-three"></div>
    </div>
  </div> --}}
 
     @include('livewire.common.header'  )
       <!-- Page Content -->
        @if (isset($header))
            <header class="bg-dark shadow" >
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"  >
                    {{ $header }}
                 
                </div>
            </header>
        @endif
            <main >
           
                {{ $slot }}
           
            </main>
     <!-- Toaster Javascript cdn -->

  {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> --}}


{{-- <script>
  document.onreadystatechange = function() {
    if (document.readyState == "complete") {
      $('html').addClass('homeload');

    }
  };
</script> --}}
        {{-- frontend site js and footer --}}
@include('livewire.common.footer')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
<script src="{{asset('frontend/js/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('frontend/js/swiper-bundle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('frontend/js/script.js')}}" type="text/javascript"></script>


<script>
var swiper = new Swiper(".serviceSwiper", {
slidesPerView: 1,
spaceBetween: 20,
pagination: {
el: ".swiper-pagination",
clickable: true,
},
breakpoints: {
768: {
  slidesPerView: 2,
  spaceBetween: 20,
  slidesPerGroup: 2,
},
992: {
  slidesPerView: 3,
  spaceBetween: 24,
  slidesPerGroup: 3,
},
},
});
</script>
  {{-- frontend site js and footer --}}
        @stack('modals')
  @livewireScripts


{{-- toastr js  --}}
    </body>
</html>
