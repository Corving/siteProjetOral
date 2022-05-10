<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="/assets/img/favicon.ico" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="/assets/css/base-style.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/dark-light.js"></script>

</head>
<body class="placeholder">
<div class="loader-wrapper">
    <div class="count"></div>
    <div class="loader"></div>
    <div class="loader2"></div>
</div>

{{--navbar--}}
@include('navbar/navbar')

{{--contenu--}}
@yield('content')


{{--Footer--}}
@include('footer')

{{--Script javaScript--}}
@include('script')

</body>
</html>
