<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Teka Samuha Nepal</title>


    <link href="{{asset('website/assets/library/font-awesome/css/fontawsome.css')}}" type="text/css" rel="stylesheet"/>

    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900|Work+Sans:300,400,500,600,700,800"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800"
          rel="stylesheet">

    <link href="{{asset('website/assets/library/bootstrap/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('website/assets/library/owlcarousel/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('website/assets/library/owlcarousel/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('website/assets/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('website/assets/library/prettyPhoto/css/prettyPhoto.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('website/assets/css/style.css')}}" type="text/css" rel="stylesheet"/>
</head>

<body>
@include('website.partials.header')
@yield('content')
@include('website.partials.footer')

<script src="{{asset('website/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('website/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('website/assets/library/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('website/assets/library/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('website/assets/library/owlcarousel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('website/assets/library/parallex/parallax.min.js')}}"></script>
<script src="{{asset('website/assets/js/jquery.isotope.js')}}"></script>
<script src="{{asset('website/assets/library/prettyPhoto/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('website/assets/js/main.js')}}"></script>
</body>
</html>
