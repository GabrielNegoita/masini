<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Nume</td>
            <td>Prenume</td>
            <td>Adresa</td>
            <td>Oras</td>
            <td>Judet</td>
            <td>ID Masina</td>
            <td>Vezi Comanda</td>
            <td>Comanda Livrata</td>
        </tr>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->nume}}</td>
            <td>{{$order->prenume}}</td>
            <td>{{$order->pret}}</td>
            <td>{{$order->adresa}}</td>
            <td>{{$order->city->nume}}</td>
            <td>{{$order->city->county->nume}}</td>
            <td>{{$order->car->id}}</td>
            <td><a href="/orders/show/{{$order->id}}">View</a></td>
            <td><a href="/orders/delete/{{$order->id}}">Delete</td>
        </tr>
        @endforeach
    </table>
    </br>
    </br>
    <a href="../">Inapoi</a>
</body>
</html>