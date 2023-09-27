<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugare Judet</title>
</head>
<body>
    <form action="/counties/insert" method="POST">
        @csrf
        <label>Nume Judet:</label>
        <input type="text" name="nume"/>

        </br>
        </br>
        <input type="submit" name="trimite" value="Trimite"/>
    </form>
    </br>
    </br>
    <a href="/counties">Inapoi</a>
</body>
</html>