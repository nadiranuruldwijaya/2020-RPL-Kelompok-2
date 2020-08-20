<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'MahaputraFreindster')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body>
    @include('layouts.navigation')
     <div class="py-4">
        @include('alert')
        @yield('content')
     </div>
   

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- <script>
    new SimpleMDE({
    element: document.getElementById("demo1"),
    spellChecker: false,
});
</script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script> -->
<!--     // Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
}); -->
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/like.js') }}"></script>
<!--     <script>
      var token = {{ Session::token() }};
      var urlLike = {{ route('like') }};
</script> -->
</body>
</html>
