<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
<header>
    @include('layouts.header')
</header>
</body>
@yield('content')
<div class="footer_padding"></div>
<footer>
    @include('layouts.footer')
</footer>
</html>