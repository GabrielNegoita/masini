<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Marca</td>
            <td>Model</td>
            <td>Pret</td>
            <td>Echipare</td>
            <td>Imagine</td>
            <td>Putere</td>
            <td>Nr.Km</td>
            <td>Capacitate cilindrica</td>
            <td>Serie sasiu</td>
            <td>Combustibil</td>
            <td>Tractiune</td>
            <td>Transmisie</td>
            <td>Culoare</td>
            <td>Nume Locatie</td>
            <td>Adresa Locatie</td>
            <td>Oras:</td>
            <td>Judet</td>
            <td>Vezi Masina</td>
            <td>Stergere Masina</td>
        </tr>
        @foreach($cars as $car)
        <tr>
            <td>{{$car->id}}</td>
            <td>{{$car->producer->nume}}</td>
            <td>{{$car->carModel->nume}}</td>
            <td>{{$car->pret}}</td>
            <td>{{$car->echipare}}</td>
            <td><img src="{{asset('uploads/'.$car->imagine)}}" width="100"/></td>
            <td>{{$car->putere}}</td>
            <td>{{$car->nr_km}}</td>
            <td>{{$car->capacitate_cilindrica}}</td>
            <td>{{$car->serie_sasiu}}</td>
            <td>{{$car->fuel->nume}}</td>
            <td>{{$car->traction->nume}}</td>
            <td>{{$car->transmision->nume}}</td>
            <td>{{$car->color->nume}}</td>
            <td>{{$car->location->nume}}</td>
            <td>{{$car->location->adresa}}</td>
            <td>{{$car->location->city->nume}}</td>
            <td>{{$car->location->county->nume}}</td>
            <td><a href="/car/{{$car->id}}">Vezi</a></td>
            <td><a href="/cars/delete/{{$car->id}}">Delete</td>
        </tr>
        @endforeach
    </table>
    <a href="{{url('/cars/new')}}">Adauga</a>
    </br>
    </br>
    <a href="../">Inapoi</a>
</body>
</html>