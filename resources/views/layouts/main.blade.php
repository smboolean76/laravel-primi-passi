<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sito Ufficiale | {{ $title }}</title>
    @yield('style')
</head>
<body>
   
    <!-- header -->
    @include('partials.header')

    <!-- main -->
    <main>
        @yield('content')
    </main>

    <!-- footer -->
    @include('partials.footer')
</body>
</html>