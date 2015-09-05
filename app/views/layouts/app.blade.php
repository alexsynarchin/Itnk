<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>
    <header class="start">
        @include('layouts.header')
    </header>
@yield('content')
<div class="footer_padding"></div>
<footer>
    @include('layouts.footer')
</footer>
</body>
</html>