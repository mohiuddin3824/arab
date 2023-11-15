<!DOCTYPE html>
<html lang="en">
<head>
@php 
$SiteIdentity = App\Models\SiteIdentity::first();
@endphp
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/font-all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}" />
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <title>{{$SiteIdentity->site_name}} {{__('||')}} {{$SiteIdentity->site_tag_line}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset($SiteIdentity->site_fav)}}">
    
</head>
<body>
@include('frontend.body.header')
    
@yield('content')

@include('frontend.body.footer')

   <div class="goTop">
    <span class="back-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </span>
   </div>

   <script src="{{asset('frontend/js/jquery-3.7.0.min.js')}}"></script>
   
   <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
   <script src="{{asset('frontend/js/font-all.min.js')}}"></script>
   <script src="{{asset('frontend/js/easing.min.js')}}"></script>
   <script src="{{asset('frontend/js/custom.js')}}"></script>
   <script>
    $(document).ready(function() {
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        nav:true,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        autoplayHoverPause: true
      });
     
    })
  </script>
</body>
</html>