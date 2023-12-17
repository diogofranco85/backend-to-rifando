<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{(isset($pageTitle)) ? $serviceName | $pageTitle  : $serviceName }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            margin:0px;
            padding:0px;
            outline: 0;
            background-color: black;
            font-family: 'Cabin', Arial, Helvetica, sans-serif;
            height: 100vh;
        }
        .main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color:rgb(207, 19, 204);
            width: :100%;
            height: 100vh;
        }
        h1.title {
            margin:0px;
        }
    </style>
</head>

<body class="antialiased font-montserrat h-screen bg-zinc-800">
    <div id="app" class="main">
        <h1> Acesso direto a aplicação bloqueado, necessário informar qual cliente</h1>
        <h2> Qualquer dúvida entre em contato com o suporte</h2>
        <div>
            <p>TO Rifando :: Online </p>
        </div>
    </div>
    <script>
        window.tenantId = '{{ $tenantId }}'
        window.apiBackendUrl = '{{ $apiBackendUrl }}'
    </script>
</body>

</html>
