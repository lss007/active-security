<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="icon/image" href="{{ asset('frontend/images/favicon.ico')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title> ative-sec.de | Sicherheitsdienst in Regensburg</title>
  {{-- start frontend css  --}}
  <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('frontend/css/bootstrap.min.css.map') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('frontend/css/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
        {{-- end frontend css  --}}
        <!-- Styles -->
    @livewireStyles
    </head>
<body>
     @include('livewire.common.header')
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

<script>
  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type','info') }}"
  switch(type){
      case 'info':
      toastr.info(" {{ Session::get('message') }} ");
        break;
      case 'success':
      toastr.success(" {{ Session::get('message') }} ");
        break;
      case 'warning':
      toastr.warning(" {{ Session::get('message') }} ");
        break;
      case 'error':
      toastr.error(" {{ Session::get('message') }} ");
        break; 
  }
  @endif 
</script>
{{-- toastr js  --}}
   
    </body>
</html>
