<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
    <title> @yield('title', 'La molisana') </title>
    @yield('link')
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')

    <script src="js/app.js"></script>
</body>
</html>