<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css' , 'resources/js/app.js'])
</head>
<style>
    .container {
        max-width: 1000px;
        margin:auto;
    }
</style>
<body>
    <x-container>
    <x-header/>
    @yield('content')
    </x-container>
</body>

</html>