<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Evenimentelor</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Lista Evenimentelor</h1>
    <table>
        <thead>
            <tr>
                <th>Titlu</th>
                <th>Descriere</th>
                <th>Data</th>
                <th>Locație</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->description }}</td>
                <td>{{ $event->date }}</td>
                <td>{{ $event->location }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
