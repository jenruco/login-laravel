<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    @auth
        <h1>Bienvenido {{ auth()->user()->username}}</h1>
    @endauth

    @guest
        <h1>Para continuar <a href="/login"> Inicia Sesión</a></h1>
    @endguest
</body>
</html>
