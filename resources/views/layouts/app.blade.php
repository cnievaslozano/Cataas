<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación de Gatos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <header class="bg-purple-800 p-4 ">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold text-white">Aplicación de Gatos</h1>
        </div>
    </header>

    <main class="container mx-auto mt-8">
        @yield('content')
    </main>

</body>

</html>