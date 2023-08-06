<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300&family=Viga&display=swap" rel="stylesheet">
</head>
<body>
    @include('layout.manu')







    @yield('content')







    @include('layout.footer')

<script>src="{{asset('js/cdn.jsdelivr.net_npm_popper.js@1.16.0_dist_umd_popper.min.js')}}"</script>
<script>src="{{asset('js/code.jquery.com_jquery-3.4.1.slim.min.js')}}"</script>
<script>src="{{asset('js/custom.js')}}"</script>
<script>src="{{asset('js/bootstrap.min..js')}}"</script>

</body>
</html>