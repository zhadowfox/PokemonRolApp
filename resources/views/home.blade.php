<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PokemonRol</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            .sprite-animation {
                width: 100px;
                /* Ancho de una imagen */
                height: 100px;
                background-image: url('{{asset('storage/images/sprites_animation.png')}}');
                background-position: 0 0;
                border-radius:100%;
                background-size:cover;
                    filter: contrast(120%) brightness(1); /* Ejemplo de filtros */
        }
        @keyframes playSprite {
            100% {
                background-position: -5100px 0; /* Desplazar 300px * 4 imágenes */
            }
        }
        </style>
        @vite('resources/css/app.css')
        @livewireStyles
        <style>
        </style>
    </head>
    <body class="bg-gradient-to-b  from-black from-0% to-slate-700 h-screen poppins" >
        @livewire("auth-form")
         @livewireScripts    
    </body>
</html>
