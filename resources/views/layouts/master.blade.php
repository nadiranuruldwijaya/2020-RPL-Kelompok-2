<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
   <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'MahaputraFreindster')</title>


    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
 @yield('head')

</head>
<body>
    @include('layouts.navigation')
     <div class="py-4">
        @include('alert')
        @yield('content')
     </div>
</script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymouse"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script>
    
    $(document).ready(function() {
    $('.select2').select2({
    placeholder: "Chose some tags"
});
    </script> 
</script>

   

<!-- Scripts -->
<!--<script src="{{ asset('js/app.js') }}" defer></script>

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
<!--</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      
  <!-- 
<!--     <script>
      var token = {{ Session::token() }};
      var urlLike = {{ route('like') }};
</script> -->
</body>
</html>
