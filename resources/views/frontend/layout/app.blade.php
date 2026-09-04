
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="stylesheet"
        href="{{ asset('frontend/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css') }}">
</head>

<body>
  

    @include('frontend.layout.header')
    
  @yield('content')

    @include('frontend.layout.footer')


    
 </body>

</html> 