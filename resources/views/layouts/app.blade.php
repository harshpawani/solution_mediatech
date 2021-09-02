<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solution Mediatech</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    @stack('styles')
</head>

<body>
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('assets/gsap/gsap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/gsap/ScrollTrigger.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/gsap/ScrollToPlugin.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/gsap/MotionPathPlugin.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/gsap/CustomEase.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    @stack('scripts')
</body>

</html>
