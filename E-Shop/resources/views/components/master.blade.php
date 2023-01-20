<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1043/1043450.png" type="image/icon type">
    <title>E-SHOP</title>
    {{-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" /> --}}
    {{-- <link href="/css/logoSlider.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    @vite('resources/css/logoSlider.css')
    @vite('resources/js/app.js')
</head>
<body>


    @include('partials.narbar')

    {{ $slot }}

    @include('partials.footer')




<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="../path/to/flowbite/dist/flowbite.js"></script>
</body>
</html>
