<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrare Marci</title>
</head>
<body>
    
    <table>

        <tr>
            <td>ID</td>
            <td>Nume</td>
            <td>Stergere</td>
        </tr>
        @foreach($producers as $producer)
        <tr>
            <td>{{$producer->id}}</td>
            <td>{{$producer->nume}}</td>
            <td><a href="/producers/delete/{{$producer->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    </br>
    <a href="/producers/new">Adaugare Marca</a>

    </br>
    <a href="/">Inapoi</a>
</body>
</html>