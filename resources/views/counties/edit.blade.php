<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editare Judet</title>
</head>
<body>
   

    <form action="/cities/insert" method="POST">
        @csrf
        <label>Adaugare Oras:</label>
        <input type="hidden" name="county_id" value="{{$county->id}}"/>
        <input type="text" name="nume_oras"/>


        <input type="submit", name="trimite", value="Trimite"/>
    </form>
    <br/>
    <h3>Orase:</h3>
    @foreach($cities as $city)

    {{$city->nume}}
    <br/>
    @endforeach
    <br>
    <a href="/counties">Inapoi</a>
</body>
</html>