<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Sample')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layouts._header')
<div class="container">
    @include('shared._messages')
    @yield('content')
    @include('layouts._footer')
</div>

</body>
</html>