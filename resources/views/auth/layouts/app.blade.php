<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta name="description" content="@yield('description')">
    <meta name="keyword" content="@yield('keyword')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset('libraries\assets\images\favicon.png') }}">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Framework -->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('libraries\bower_components\bootstrap\css\bootstrap.min.css') }}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('libraries\assets\icon\themify-icons\themify-icons.css') }}">
    <!-- font Awesome -->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('libraries\assets\icon\font-awesome\css\font-awesome.min.css') }}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('libraries\assets\icon\feather\css\feather.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('libraries\assets\icon\icofont\css\icofont.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('libraries\assets\css\style.css') }}">
</head>

<body class="fix-menu">

@yield('content')

<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('libraries\bower_components\jquery\js\jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries\bower_components\jquery-ui\js\jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries\bower_components\popper.js\js\popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries\bower_components\bootstrap\js\bootstrap.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript"
        src="{{ asset('libraries\bower_components\jquery-slimscroll\js\jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('libraries\bower_components\modernizr\js\modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries\bower_components\modernizr\js\css-scrollbars.js') }}"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{ asset('libraries\bower_components\i18next\js\i18next.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('libraries\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('libraries\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('libraries\bower_components\jquery-i18next\js\jquery-i18next.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries\assets\js\common-pages.js') }}"></script>

</body>
</html>
