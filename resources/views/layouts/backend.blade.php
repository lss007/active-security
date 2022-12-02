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
    {{-- croper js files  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>         --}}
    <link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
    <script src="https://unpkg.com/dropzone"></script>
    <script src="https://unpkg.com/cropperjs"></script>
    {{--  end croper js files  --}}
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
  <body class="tx-bold">
@include('livewire.backend.common.left-panel')
    <!-- sl-sideleft -->
@include('livewire.backend.common.header')
    <div class="sl-mainpanel tx-bold ">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Active Secuirty</a>
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
         lengthMenu: '_MENU_ ',
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
    {{-- <script src='https://foliotek.github.io/Croppie/croppie.js'></script> --}}
    {{-- <script>
      // Start upload preview image
      $(".gambar").attr("src", "");
        var $uploadCrop,
        tempFilename,
        rawImg,
        imageId;
        function readFile(input) {
          if (input.files && input.files[0]) {
                  var reader = new FileReader();
                  reader.onload = function (e) {
              $('.upload-demo').addClass('ready');
              $('#cropImagePop').modal('show');
                    rawImg = e.target.result;
                  }
                  reader.readAsDataURL(input.files[0]);
              }
              else {
                swal("Sorry - you're browser doesn't support the FileReader API");
            }
        }

        $uploadCrop = $('#upload-demo').croppie({
          viewport: {
            width: 150,
          },
          enforceBoundary: false,
          enableExif: true
        });
        $('#cropImagePop').on('shown.bs.modal', function(){
          // alert('Shown pop');
          $uploadCrop.croppie('bind', {
                url: rawImg
           
              }).then(function(){
        
                console.log('jQuery bind complete');
              });
        });

        $('.item-img').on('change', function () { imageId = $(this).data('id'); tempFilename = $(this).val();
                                                $('#cancelCropBtn').data('id', imageId); readFile(this); });
        $('#cropImageBtn').on('click', function (ev) {
          $uploadCrop.croppie('result', {
            
            type: 'base64',
            format: 'jpeg',
            size: {width: 150}
          }).then(function (resp) {
            console.log(resp)
            $('#item-img-output').attr('src', resp);
            $('#cropImagePop').modal('hide');
            var file = dataURLtoFile(resp,'cover.png');
            // console.log(file.name);
            Livewire.emit('getCropImg', file.name)
          });
        });

        function dataURLtoFile(dataurl, filename) {
     
        var arr = dataurl.split(','),
            mime = arr[0].match(/:(.*?);/)[1],
            bstr = atob(arr[1]), 
            n = bstr.length, 
            u8arr = new Uint8Array(n);
            
        while(n--){
            u8arr[n] = bstr.charCodeAt(n);
        }
        
        return new File([u8arr], filename, {type:mime});
        }
    </script> --}}
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
