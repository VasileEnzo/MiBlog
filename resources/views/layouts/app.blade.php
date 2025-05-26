<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <nav class="bg-blue-600 p-4 text-white">
        <ul class="flex gap-4">
            <li><a href="/">Inicio</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/category">Posteos</a></li>
            <li><a href="/category/create">Crear post</a></li>
        </ul>
    </nav>

    <div class="p-6">
        @yield('content')
    </div>
</body>
</html>
