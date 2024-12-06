<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'LandingPage')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>


<body class="w-full">
    <main role="main" class="w-full">
        @yield('content')
    </main>
</body>

</html>
