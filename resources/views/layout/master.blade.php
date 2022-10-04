<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tủ lạnh giá rẻ, trả góp 0%, giao hàng nhanh - Siêu thị điện máy HC</title>
    <link rel="icon" href="{{ asset('user/assets/img/logo.png')}}">
    <!--CSS-->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
    <!--CSS SIlder-->

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!--FONT-->
    <link rel="stylesheet" href="{{ asset('user/assets/font/fontawesome-free-6.1.1-web/css/all.min.css') }}">
    <!--CSS BOOTSTAP-->
    <link rel="stylesheet" href="{{ asset('user/assets/bootstrap-5.2.0-beta1/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/cart.scss') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $( document ).ready(function() {
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});});

    
    </script>
</head>

<body>
    @include('layout.header')

    @yield('content')

    @include('layout.footer')

    @yield('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- 33 KB -->
    <!-- fotorama.css & fotorama.js. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.css" rel="stylesheet">
    <!-- 3 KB -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.js"></script>
    <!-- 16 KB -->
    <!--JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script>
    <!--JS SLIDER-->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--JS BOOTSTRAP-->
    <script src=" {{asset('user/assets/bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $('.responsive').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 2,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    </script>
</body>

</html>