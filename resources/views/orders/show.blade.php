<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
        <h3>Detalii Client</h3>
    <table>
        <tr>
            <td>#</td>
            <td>Nume</td>
            <td>Prenume</td>
            <td>Adresa</td>
            <td>Oras</td>
            <td>Judet</td>
            <td>ID Masina</td>
        </tr>
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->nume}}</td>
            <td>{{$order->prenume}}</td>
            <td>{{$order->pret}}</td>
            <td>{{$order->adresa}}</td>
            <td>{{$order->city->nume}}</td>
            <td>{{$order->city->county->nume}}</td>
            <td>{{$order->car->id}}</td>
        </tr>
    </table>

    <br/>
    <br/>
    <h3>Detalii Comanda</h3>
    <table>
        <tr>
            <td>ID Masina</td>
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
        </tr>
        <tr>
            <td>{{$order->car->id}}</td>
            <td>{{$order->car->producer->nume}}</td>
            <td>{{$order->car->carModel->nume}}</td>
            <td>{{$order->car->pret}}</td>
            <td>{{$order->car->echipare}}</td>
            <td><img src="{{asset('uploads/'.$order->car->imagine)}}" width="100"/></td>
            <td>{{$order->car->putere}}</td>
            <td>{{$order->car->nr_km}}</td>
            <td>{{$order->car->capacitate_cilindrica}}</td>
            <td>{{$order->car->serie_sasiu}}</td>
            <td>{{$order->car->fuel->nume}}</td>
            <td>{{$order->car->traction->nume}}</td>
            <td>{{$order->car->transmision->nume}}</td>
            <td>{{$order->car->color->nume}}</td>
            <td>{{$order->car->location->nume}}</td>
            <td>{{$order->car->location->adresa}}</td>
            <td>{{$order->car->location->city->nume}}</td>
            <td>{{$order->car->location->county->nume}}</td>
        </tr>
    </table>
    </br>
    </br>
    <a href="/orders/delete/{{$order->id}}">Comanda Livrata</a>
    </br>
    </br>
    <a href="/orders">Inapoi</a>
</body>
</html>