<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesaj</title>
</head>
<body>
    <h3>De la:{{$contact->nume}}</h3>
    <p>{{$contact->mesaj}}</p>
    <br/>
    <br/>
    <a href="/messages/delete/{{$contact->id}}">Delete Message</a>
    <br/>
    <br/>
    <a href="/messages">Inapoi</a>
</body>
</html>