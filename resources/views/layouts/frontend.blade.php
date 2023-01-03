<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="icon/image" href="{{ asset('frontend/images/favicon.ico')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title> active-sec.de | Sicherheitsdienst in Regensburg</title>
  {{-- start frontend css  --}}
  <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('frontend/css/bootstrap.min.css.map') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" />
 
  <link href="{{ asset('frontend/css/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('frontend/css/toastr.css') }}" rel="stylesheet" type="text/css" />
   
  {{-- end frontend css  --}}
  <style>
    #overlay {
      position: fixed; 
      height: 100%; 
      width: 100%; 
      top:0; 
      left: 0; 
      background:white;
      /* filter: blur(8px); */
      /* -webkit-filter: blur(8px); */
      /* Full height */

      /* Center and scale the image nicely */
      /* background-position: center;
      background-repeat: no-repeat;
      background-size: cover; */
      z-index:9999;
     /* padding-top: 10px; */
    }
    body {
      background: #f5f5f5;
}

.card {
      position: 0;
      -webkit-box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
      box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
      background-color: #FFF;
      border-radius: 6px;
      height: 100%;
      overflow: hidden;
      width: 100%;
      margin: 0;
  }
  
  .shimmerBG {
      animation-duration: 2.2s;
      animation-fill-mode: forwards;
      animation-timing-function: linear;
      background: #ddd;
      background: linear-gradient(to right, #F6F6F6 5%, #F0F0F0 20%, #F6F6F6 35%);
      background-size: 1200px 100%;
      animation: shimmer 3s;
      animation-iteration-count: infinite;
      /* background: linear-gradient(to right, #e6e6e6 5%, #cccccc 25%, #e6e6e6 35%); */
      background-size: 1000px 100%;
}


@-webkit-keyframes shimmer {
    0% {
        background-position: -100% 0;
    }
    100% {
        background-position: 100% 0;
    }
}

@keyframes shimmer {
    0% {
        background-position: -1200px 0;
    }
    100% {
        background-position: 1200px 0;
    }
}
  
    .media {
    height: 400px;
    width: 100%;
    margin-left: auto; 
    margin-right: 0;
    }

.p-32 {
    padding: 32px;
    }

.title-line {
    height: 24px;
    width: 100%;
    margin-bottom: 12px;
    border-radius: 20px;
    }

.content-line {
    height: 8px;
    width: 100%;
    margin-bottom: 16px;
    border-radius: 8px;
}
  
  .end {
      width: 40%;
    }

}


  .m-t-24 {
      margin-top: 24px;
  }



  </style>
  @livewireStyles
</head>
<body>
  
  {{-- <img src="{{asset('frontend/images/circle_loading.gif')}}" class=" center" alt=" loader" id="loader" > --}}
  <div id="overlay" >
    <div class="card">
      
      <div class="p-32">
        <div class="shimmerBG title-line"></div>
        <div class="shimmerBG title-line end"></div>
        <div class="shimmerBG media"></div>

        <div class="shimmerBG content-line m-t-24"></div>
        <div class="shimmerBG content-line"></div>
        <div class="shimmerBG content-line"></div>
        <div class="shimmerBG content-line"></div>
        <div class="shimmerBG content-line end"></div>
        <div class="shimmerBG content-line m-t-24"></div>
        <div class="shimmerBG content-line"></div>
        <div class="shimmerBG content-line"></div>
        <div class="shimmerBG content-line"></div>
        <div class="shimmerBG content-line end"></div>
      </div>
    </div>
  </div>
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
     {{-- <script>
      document.onreadystatechange = function() {
      if (document.readyState !== "complete") {
      document.querySelector(
      "body").style.visibility = "hidden";
      document.querySelector(
      "#loader").style.visibility = "visible";
      } else {
      document.querySelector(
      "#loader").style.display = "none";
      document.querySelector(
      "body").style.visibility = "visible";
      }
  };
  
  </script> --}}
  {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> --}}
<script>
      document.onreadystatechange = function() {
      if (document.readyState == "complete") {
        $('#overlay').fadeOut();
      }
  };

</script>
        {{-- frontend site js and footer --}}
        @include('livewire.common.footer')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
<script src="{{asset('frontend/js/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('frontend/js/swiper-bundle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('frontend/js/script.js')}}" type="text/javascript"></script>

<script src="{{asset('frontend/js/toastr.js')}}" type="text/javascript"></script>

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
