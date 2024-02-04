<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Mi Proyecto</h1>
    </header>
    
    <main>
        @yield('content')
    </main>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html