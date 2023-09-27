<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugare Model</title>
</head>
<body>
    

    <form action="/carModels/insert" method="POST">
        @csrf
        <label>Nume:</label>
        <input type="text" name="nume"/>

        <label>Marca:</label>
        <select name="producer_id">
            @foreach($producers as $producer)
            <option value="{{$producer->id}}">{{$producer->nume}}</option>
            @endforeach    
        </select>

        <input type="submit" name="trimite" value="Trimite"/>
    </form>

    <br/>
    <br/>
    <a href="/carModels">Inapoi</a>
</body>
</html>