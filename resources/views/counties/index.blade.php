<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrare Judete</title>
</head>
<body>
    <h2>Administrare Judete</h2>


    <table>
        <tr>
            <td>ID</td>
            <td>Nume</td>
            <td>Stergere</td>
            <td>Editare</td>
        </tr>
        @foreach($counties as $county)
        <tr>
            <td>{{$county->id}}</td>
            <td>{{$county->nume}}</td>
            <td><a href="/counties/delete/{{$county->id}}">Delete</a></td>
            <td><a href="/counties/edit/{{$county->id}}">Edit</a></td>
        </tr>
        @endforeach
    </table>

    </br>
    <a href="/counties/new">Adauga Judet</a>
    <br>
    <br>
    <a href="/cities">Index Orase</a>
    </br>
    </br>
    <a href="/">Inapoi</a>
</body>
</html>