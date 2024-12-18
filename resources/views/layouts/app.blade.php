<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prototype</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class=" bg-gray-100">
    <div class=" flex h-screen">
        <x-sidebar></x-sidebar>

        <div class="main-content">
            <!-- Dynamic content specific to each page -->
            @yield('content')
        </div>

    </div>
</body>
</html>