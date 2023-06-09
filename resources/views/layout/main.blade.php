<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dc Laravel</title>
    
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>
    <section>
        @include('partials.ctablue')
    </section>

    @include('partials.footer')

</body>
</html>
