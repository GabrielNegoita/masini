<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masina</title>
</head>
<body>

    




    <table>
        <tr>
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
            <td>Judet</td>
            <td>Edit Masina</td>
        </tr>
        <tr>
            <td>{{$car->producer->nume}}</td>
            <td>{{$car->carModel->nume}}</td>
            <td>{{$car->pret}}</td>
            <td>{{$car->echipare}}</td>
            <td>{{$car->imagine}}</td>
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
            <td>{{$car->location->county->nume}}</td>
            <td><a href="/cars/edit/{{$car->id}}">Edit</a></td>
        </tr>

    </table>
    </br>
    <a href="/cars">Inapoi</a>

</body>
</html>