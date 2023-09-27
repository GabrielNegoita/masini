<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugare Locatie</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script type="text/javascript">

        $(document).ready(function() {
            $("#countyID").change(function(){
                $('#cityID').html('');
                let county = this.value;
                $.ajax({
                url: "/api/getCities/"+county,
                context: document.body
                }).done(function(result) {
                    let cities = JSON.parse(result);
                    cities.forEach( function(city) {
                        $('#cityID').append($('<option>', { 
                        value: city.id,
                        text : city.nume 
                    }));
                    });
                });
            }); 
        });

    </script>


</head>
<body>
<form action="/locations/insert",  method="POST">
        @csrf
        <h2>Adauga Locatie:</h2>
        <label>Nume:</label>
        <input type="text" name="nume_locatie" required/>
        <label>Adresa:</label>
        <input type="text" name="adresa" required/>
       

        <label>Judet:</label>
        <select id="countyID" name="county_id" required>        
           @foreach ($counties as $county) 
            <option value="{{$county->id}}">{{$county->nume}}</option>
           @endforeach       
        </select>

        <label>Oras:</label>
        <select id="cityID" name="city_id" required>        
        </select>  
        <Br/>


        
        </br>
        <input type="submit" value="trimite"/>
        </br>
        <a href="/locations">Inapoi</a>
    </form>
</body>
</html>