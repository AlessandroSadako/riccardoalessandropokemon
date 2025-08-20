<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    {{-- VITE --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    {{-- STYLE --}}
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="logs.css">
    <title>PokeTrainer</title>
</head>

<body>
    <x-nav />

    {{-- <div class="min-vh-100"> --}}
    {{ $slot }}
    {{-- </div> --}}

    {{-- <x-footer /> --}}
</body>

</html>
