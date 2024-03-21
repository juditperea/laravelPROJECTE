<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - ANIMELIST</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body, html {
            margin: 0; 
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #000;
            color: #fff;
            display: flex;
            flex-direction: column;
        }

        h2 {
            color: #fff;
            margin-left: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        li {
            width: 250px;
            background-color: #000;
            margin: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        img {
            width: 100%;
            height: auto; 
            max-height: 510px; 
            object-fit: cover;
        }

        .btn {
            padding: 10px;
            margin: auto;
            margin-bottom: 5px;
            color: #fff;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 3px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #a52a2a;
        }

        footer {
            margin-top: auto;
            width: 100%;
            background-color: #dc3545;
            color: #fff;
            text-align: center;
        }

        header, footer {
            background-color: #dc3545;
            color: #fff;
            padding: 20px;
            margin: 0;
        }

        .carousel {
            display: flex;
            overflow: hidden;
            width: 100%;
            height: 100%; 
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
            animation: slide 7s infinite; 
        }

        .carousel-item {
            flex: 0 0 auto;
            width: 100%;
        }

        @keyframes slide {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body>
    <header class="py-4 px-6">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">ANIMELIST</h1>
            <nav>
                <ul class="flex space-x-2">
                    <li><a href="/" class="btn hover:text-gray-400">Inicio</a></li>
                    <li><a href="/peliculas" class="btn hover:text-gray-400">Películas</a></li>
                    <li><a href="/series" class="btn hover:text-gray-400">Series</a></li>
                    <li><a href="{{ route('paginasanime') }}" class="btn hover:text-gray-400">Páginas</a>
</li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container mx-auto mt-0"> 
        @yield('content')
        
        <div class="carousel">
            <div class="carousel-inner">
                @foreach ($images as $image)
                <div class="carousel-item">
                    <img src="{{asset($image)}}">
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <footer class="py-4 px-6">
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
