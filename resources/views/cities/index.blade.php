<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orase</title>
</head>
<body>

    <h2>Orase:</h2>

    <table>
        <tr>
            <td>ID</td>
            <td>Nume</td>
            <td>Judet:</td>
            <td>Stergere:</td>
        </tr>
        @foreach($cities as $city)
        <tr>
            <td>{{$city->id}}</td>
            <td>{{$city->nume}}</td>
            <td>{{$city->county->nume}}</td>
            <td><a href="/cities/delete/{{$city->id}}">Delete</td>
        </tr>
        @endforeach
    </table>
    <br>
    <br>
    <a href="/">Inapoi</a>
</body>
</html>