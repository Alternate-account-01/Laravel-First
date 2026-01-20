<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 dark:bg-gray-900">

    <x-admin.dash-nav />
    

    <x-admin.dash-sidebar />

    <main class="p-4 md:ml-64 pt-20">
        <x-admin.layout/>
    </main>

</body>
</html>