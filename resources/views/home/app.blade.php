<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/leader-line@1.0.1/leader-line.min.js"></script>

</head>
<body>
@yield('header')
@yield('content')
<script src="{{ asset('/js/leader-line.js') }}"></script>

</body>
</html>
