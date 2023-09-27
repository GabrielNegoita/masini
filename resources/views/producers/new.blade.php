<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugare Marca</title>
</head>
<body>
    <h2>Adaugare Marca</h2>

    <form action="/producers/insert" method="POST">
        @csrf


        <label>Nume:</label>

        <input type="text" name="nume"/>

        </br>
        </br>   
        <input type="submit" name="trimite" value="Trimite"/>

    </form>
    </br>
    <a href="/producers">Inapoi</a>
</body>
</html>