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

      <style>



        /* .menuColMain, .bannerContent, section {
  opacity: 0;
  transition: all 400ms ease-in-out 0s;
}
.homeload .menuColMain,.homeload .bannerContent, .homeload section {
  opacity: 1;
} */

/* loader */
/*
html {
  overflow-y: hidden;
}
html.homeload {
  overflow-y: initial;
}
.homeload .loaderCol {
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
}
.loaderCol {
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	display: -webkit-flex;
	display: -ms-flex;
	display: flex;
	-ms-align-items: center;
	align-items: center;
	justify-content: center;
	background-color: #f9feff;
  -webkit-transition: all 500ms ease-in-out 0s;
  -o-transition: all 500ms ease-in-out 0s;
  transition: all 500ms ease-in-out 0s;
  z-index: 999;
}
.preloader-orbit-loading {
  position: relative;
  width: 250px;
  height: 250px;
  border-radius: 50%;
  -o-border-radius: 50%;
  -ms-border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  display: -webkit-flex;
  display: -ms-flex;
  display: flex;
  -ms-align-items: center;
  align-items: center;
  justify-content: center;
}
.preloader-orbit-loading > img {
	width: 80px;
  -webkit-animation-name: pulse;
  animation-name: pulse;
  -webkit-animation-duration: 3s;
  animation-duration: 3s;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  transform: scale(.8);
}
@keyframes pulse {
  0% {
    transform: scale(.8);
    opacity: 0.8;
  }
  50% {
    transform: scale(1);
    opacity: 1;
  }
  100% {
    transform: scale(.8);
    opacity: 0.8;
  }
}
.preloader-orbit-loading .cssload-inner {
  position: absolute;
  width: 100%;
  height: 100%;
  box-sizing: border-box;
  -o-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  border-radius: 50%;
  -o-border-radius: 50%;
  -ms-border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
}
.preloader-orbit-loading .cssload-inner.cssload-one,
.preloader-orbit-loading .cssload-inner.cssload-two,
.preloader-orbit-loading .cssload-inner.cssload-three {
  -webkit-animation-duration: 2.15s;
  animation-duration: 2.15s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}
.preloader-orbit-loading .cssload-inner.cssload-one {
  left: 0%;
  top: 0%;
  -webkit-animation-name: cssload-rotate-one;
  animation-name: cssload-rotate-one;
  border-bottom: 3px solid var(--primaryColor);
}
.preloader-orbit-loading .cssload-inner.cssload-two {
  right: 0%;
  top: 0%;
  -webkit-animation-name: cssload-rotate-two;
  animation-name: cssload-rotate-two;
  border-right: 3px solid var(--secondaryColor);
}
.preloader-orbit-loading .cssload-inner.cssload-three {
  right: 0%;
  bottom: 0%;
  -webkit-animation-name: cssload-rotate-three;
  animation-name: cssload-rotate-three;
  border-top: 3px solid #008143;
}

@keyframes cssload-rotate-one {
  0% {
    transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
  }
}
@-webkit-keyframes cssload-rotate-one {
  0% {
    transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
  }
}
@keyframes cssload-rotate-two {
  0% {
    transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
  }
}
@-webkit-keyframes cssload-rotate-two {
  0% {
    transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
  }
}
@keyframes cssload-rotate-three {
  0% {
    transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
  }
}
@-webkit-keyframes cssload-rotate-three {
  0% {
    transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
  }
}*/


/* .loaderCol {
  background-color: #32445d;
}
.preloader-orbit-loading > img {
    filter: grayscale(1) contrast(0) brightness(6);
}
.preloader-orbit-loading .cssload-inner.cssload-one {
    border-bottom: 3px solid #ffffff;
}
.preloader-orbit-loading .cssload-inner.cssload-two {
    border-right: 3px solid #ffffff;
}
.preloader-orbit-loading .cssload-inner.cssload-three {
    border-top: 3px solid #ffffff;
} */
/* --------------------------------------------- */

      </style>
  {{-- end frontend css  --}}
  @livewireStyles
</head>
<body>
  {{-- <div class="loaderCol">
    <div class="preloader-orbit-loading">
      <img src="{{ asset('frontend/images/logo-icon.png')}}" alt="...">
      <div class="cssload-inner cssload-one"></div>
      <div class="cssload-inner cssload-two"></div>
      <div class="cssload-inner cssload-three"></div>
    </div>
  </div> --}}
 
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

  {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> --}}


<script>
  document.onreadystatechange = function() {
    if (document.readyState == "complete") {
      $('html').addClass('homeload');

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
