<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rifando Online</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
    <body class="antialiased font-montserrat h-screen bg-zinc-800">
        @if (env('APP_ENV')!== 'Production')
            <div class="banner-sandbox ">
                <p>ESSE AMBIENTE FOI DESENVOLVIDO PARA TESTE | SENDO ASSIM AÇÕES CRIADAS AQUI NÃO TEM VALOR REAL</p>
            </div>
        @endif
        <div id="app"></div>
        @vite('resources/js/app.js')
    </body>
</html>
