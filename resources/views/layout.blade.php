<!DOCTYPE html>

<html>

<head>
    <title>My Application</title>
    @if (env('APP_ENV') === 'production')
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/app.css') }}" >
    @else
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    @endif
</head>

<body>
    <div class="sidebar">Sidebar</div>
    @yield('content')
    <a href="/ganondorf">Dream of Dorf</a>
</body>

</html>
