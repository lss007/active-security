<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="icon/image" href="{{ asset('frontend/images/favicon.ico')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Admin Panel </title>
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('backend/css/bracket.css')}}">
    <link href="{{asset('backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    {{-- data table css  --}}
    <link href="{{asset('backend/lib/highlightjs/github.css')}}" rel="stylesheet">
    <link href="{{asset('backend//lib/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/SpinKit/spinkit.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    {{-- end data table css  --}}
    <link rel="stylesheet" href="{{asset('backend/css/starlight.css')}}">
      <!-- Toaster CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
      @livewireStyles
    </head>
  <body>
@include('livewire.backend.common.left-panel')
    <!-- sl-sideleft -->
@include('livewire.backend.common.header')
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Active Secuirty</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>
            <main>
              {{ $slot }}
          </main>
{{-- footer  --}}
{{-- @include('livewire.backend.common.footer') --}}
{{-- footer  --}}

</div><!-- sl-mainpanel -->
    <script src="{{asset('backend/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('backend/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('backend/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('backend/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    {{-- data table  --}}
    <script src="{{asset('backend/lib/highlightjs/highlight.pack.js')}}"></script>
    <script src="{{asset('backend/lib/select2/js/select2.min.js')}}"></script>
    {{-- editor  --}}
    <script src="{{asset('backend/lib/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
 {{-- <script src="{{asset('backend/js/starlight.js')}}"></script> --}}
 <script>
   $(function(){
     'use strict';

     $('#datatable1').DataTable({
       responsive: true,
       language: {
         searchPlaceholder: 'Search...',
         sSearch: '',
         lengthMenu: '_MENU_ items/page',
       }
     });

     $('#datatable2').DataTable({
       bLengthChange: false,
       searching: false,
       responsive: true
     });

     // Select2
     $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

   });
 </script>
{{-- end data table  --}}
    <script src="{{asset('backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('backend/lib/d3/d3.js')}}"></script>
    <script src="{{asset('backend/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('backend/lib/chart.js/Chart.js')}}"></script>
    <script src="{{asset('backend/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('backend/lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('backend/lib/flot-spline/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('backend/js/starlight.js')}}"></script>
    <script src="{{asset('backend/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('backend/js/dashboard.js')}}"></script>
            {{-- toastr js  --}}
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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
            @livewireScripts

            
  </body>
</html>
