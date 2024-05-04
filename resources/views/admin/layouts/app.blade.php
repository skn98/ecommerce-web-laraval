<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ !empty($header_title) ? $header_title :'' }}- Ecommerce </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('public/assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('public/assets/dist/css/adminlte.min.css') }}">

<!-- Include Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">



  @yield('style')

</head>


<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('admin.layouts.header')
@yield('content')
@include('admin.layouts.footer')

</div>
<!-- ./wrapper -->





<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ url('public/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ url('public/assets/dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ url('public/assets/plugins/chart.js/Chart.min.js') }}"></script>

<script src="{{ url('public/assets/dist/js/demo.js') }}"></script>



<!-- OPTIONAL SCRIPTS  For Messages-->
<script>
    $(document).ready(function(){

        if($('.alert-success').length > 0) {

            setTimeout(function(){
                $('.alert-success').fadeOut('slow', function(){

                   // window.location.href = "{{ url('admin/category/list') }}";
                });
            }, 1000);
        }
    });
</script>





@yield('script')
</body>
</html>

