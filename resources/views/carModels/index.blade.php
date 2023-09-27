<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrare Modele</title>
</head>
<body>
    


    <table>

        <tr>

            <td>ID:</td>
            <td>Model:</td>
            <td>Marca:</td>
            <td>Stergere</td>

        </tr>
        @foreach($carModels as $carModel)
        <tr>

            <td>{{$carModel->id}}</td>
            <td>{{$carModel->nume}}</td>
            <td>{{$carModel->producer->nume}}</td>
            <td><a href="/carModels/delete/{{$carModel->id}}">Delete</a></td>
        </tr>

        @endforeach
    </table>

    <br/>
    <br/>
    <a href="/carModels/new">Adauga Model</a>
    <br/>
    <br/>
    <a href="/">Inapoi</a>

</body>
</html>