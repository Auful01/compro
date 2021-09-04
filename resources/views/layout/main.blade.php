<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Total Business &#8211; Multi Purpose Template</title>

    <link rel='stylesheet' href='{{asset('css/style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/superfish.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/component.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/font-awesome.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/jquery.fancybox.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/flexslider.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/style-responsive.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/masterslider.main.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/masterslider-custom.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/style-custom.css')}}' type='text/css' media='all' />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('css/nav.css')}}"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300|Lato:regular|Crete+Round:regular" rel="stylesheet"
        property="stylesheet" type="text/css" media="all">


</head>

<body data-rsssl=1 class="home page-template-default page page-id-5368 _masterslider _msp_version_3.2.7">
    <div class="body-wrapper  float-menu" data-home="index.html">
       @include('layout.header')

       <div class="content-wrapper">
           @yield('content')
       </div>
        <!-- is search -->

        <!-- content wrapper -->

       @include('layout.footer')
    </div>
    @include('layout.js')
</body>

</html>
