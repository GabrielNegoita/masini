<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesaje primite</title>
</head>
<body>
    

    <table>

        <tr>
            <td>#</td>
            <td>De la:</td>
            <td>Vezi</td>
        </tr>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->nume}}</td>
            <td><a href="messages/show/{{$contact->id}}">Vezi Mesaj</a></td>
        </tr>
        @endforeach
    </table>
    <br/>
    <br/>
    <a href="/">Inapoi</a>
</body>
</html>