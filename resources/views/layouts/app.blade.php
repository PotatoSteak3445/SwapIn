<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwapIn | Best Deals Online</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/42dot-sans@5.2.9/index.css">
</head>
<body>

    @include('partials.navbar')

    <main class="container">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
