<!DOCTYPE html>
<html lang="fr">

<head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>


<body>
<main role="main">
        @yield('content')
</main>
</body>

</html>
