<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crearea Eveniment Nou</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1>Crearea Eveniment Nou</h1>
    <form action="{{route('events.store')}}" method="POST">
        @csrf
        <label for="title">Titlu:</label><br>
        <input type="text" name="title" id="title"><br>
        <label for="description">Descriere:</label><br>
        <textarea name="description" id="description"></textarea><br>
        <label for="date">Data:</label><br>
        <input type="date" name="date" id="date"><br>
        <label for="location">Locatie:</label><br>
        <input type="text" name="location" id="location"><br>
        <button type="submit">Crearea Eveniment</button>
    </form>
</body>
</html>