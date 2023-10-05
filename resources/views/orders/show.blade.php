<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arata comanda</title>
</head>
<body>

    <h3>Nr. Comanda: {{$order_car->order_id}}</h3>
    </br>
    </br>
    <h4>Detalii comanda:</h4>   
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
        @foreach($order_car as $item)
        <tr>
            <td>{{$item->car->id}}</td>
            <td>{{$item->car->producer->nume}}</td>
            <td>{{$item->car->carModel->nume}}</td>
            <td>{{$item->car->pret}}</td>
            <td>{{$item->car->echipare}}</td>
            <td><img src="{{asset('uploads/'.$item->car->imagine)}}" width="100"/></td>
            <td>{{$item->car->putere}}</td>
            <td>{{$item->car->nr_km}}</td>
            <td>{{$item->car->capacitate_cilindrica}}</td>
            <td>{{$item->car->serie_sasiu}}</td>
            <td>{{$item->car->fuel->nume}}</td>
            <td>{{$item->car->traction->nume}}</td>
            <td>{{$item->car->transmision->nume}}</td>
            <td>{{$item->car->color->nume}}</td>
            <td>{{$item->car->location->nume}}</td>
            <td>{{$item->car->location->adresa}}</td>
            <td>{{$item->car->location->city->nume}}</td>
            <td>{{$item->car->location->county->nume}}</td>
        </tr>
        @endforeach        
        </tr>

    </table>

</body>
</html>