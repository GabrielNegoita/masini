<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrare Locatii</title>
</head>
<body>
    
    <table>

        <tr>
            <td>ID</td>
            <td>Nume</td>
            <td>Adresa</td>
            <td>Oras:</td>
            <td>Judet</td>
            <td>Stergere</td>
        </tr>
        @foreach($locations as $location)
        <tr>
            <td>{{$location->id}}</td>
            <td>{{$location->nume}}</td>
            <td>{{$location->adresa}}</td>
            <td>{{$location->city->nume}}</td>
            <td>{{$location->county->nume}}</td>
            <td><a href="/locations/delete/{{$location->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    </br>
    <a href="/locations/new">Adaugare Locatie</a>

    </br>
    <a href="/">Inapoi</a>
</body>
</html>