<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>CadSUAS</title>

    <link rel="stylesheet" href="/css/style.css">


    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawesome/all.css">

    <script src="/jquery/jquery.min.js"></script>
    <script src="/jquery/jquery.inputmask.min.js"></script>
    <script src="/bootstrap/bootstrap.min.js"></script>

    @stack('css')

</head>
<body>
    @include('includes.menu')
    <div class="container w-75">
        @yield('content')
    </div>


    @stack('js')

</body>
</html>
