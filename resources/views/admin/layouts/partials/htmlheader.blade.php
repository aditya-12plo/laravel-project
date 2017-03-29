<head>
    <meta charset="UTF-8">
    <title> {{$title or "FGD INDONESIA"}} </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet" type="text/css" />

<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
$(window).load(function() {
    $(".loader").fadeOut("slow");
})
    </script>
</head>
<div class="loader"></div>
    