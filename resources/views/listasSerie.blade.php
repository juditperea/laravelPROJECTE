<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - ANIMELIST</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #fff;
            margin-bottom: 20px; 
            background-color: #dc3545;
            padding: 10px 20px; 
            border-radius: 5px; 
        }

        .container {
            margin-top: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background-color: #111;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 620px; 
        }

        .card h3 {
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            height: 620px; 
        }

        .card li {
            margin-bottom: 5px;
        }

    </style>
</head>
<body>
    <header class="py-4 px-6 bg-red-600">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">ANIMELIST</h1>
            <nav>
                <ul class="flex space-x-2">
                    <li><a href="/" class="btn hover:text-gray-400">Inicio</a></li>
                    <li><a href="/peliculas" class="btn hover:text-gray-400">Películas</a></li>
                    <li><a href="/series" class="btn hover:text-gray-400">Series</a></li>
                    <li><a href="{{ route('mis.listas') }}" class="btn hover:text-gray-400">Listas</a></li>
                    <li><a href="{{ route('paginasanime') }}" class="btn hover:text-gray-400">Páginas</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container mx-auto"> 
        <h2 class="text-2xl font-bold mb-4">Mis Listas</h2>
        <div class="grid grid-cols-3 gap-4">
            <div class="card">
                <h3 class="text-lg font-semibold mb-2 bg-red-600 px-4 py-2 rounded-t-lg">Por Ver</h3> 
                    @foreach ($listas->where('estado', 'por_ver') as $lista)
                        <li>{{ $lista->serie->titulo }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="card">
                <h3 class="text-lg font-semibold mb-2 bg-red-600 px-4 py-2 rounded-t-lg">Viendo</h3> 
                    @foreach ($listas->where('estado', 'viendo') as $lista)
                        <li>{{ $lista->serie->titulo }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="card">
                <h3 class="text-lg font-semibold mb-2 bg-red-600 px-4 py-2 rounded-t-lg">Visto</h3> 
                    @foreach ($listas->where('estado', 'visto') as $lista)
                        <li>{{ $lista->serie->titulo }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    
    <footer class="py-4 px-6 bg-red-600">
        <nav>
            <ul class="flex space-x-6">
                <li><a href="/login" class="btn hover:text-gray-400">Inicia Sesión</a></li>
                <li><a href="/register" class="btn hover:text-gray-400">Regístrate</a></li>
                <li><a href="/google-auth/redirect" class="btn hover:text-gray-400">SSO Google</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
