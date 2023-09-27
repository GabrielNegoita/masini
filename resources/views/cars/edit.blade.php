<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Masina</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



    <script type="text/javascript">

        $(document).ready(function() {
            $("#producers").change(function(){
                $('#carModels').html('');
                let producerID = this.value;
                $.ajax({
                url: "/api/getModels/"+producerID,
                context: document.body
                }).done(function(result) {
                    let models = JSON.parse(result);
                    models.forEach( function(model) {
                        $('#carModels').append($('<option>', { 
                        value: model.id,
                        text : model.nume 
                    }));
                    });
                });
            }); 

        });
      
    </script>
</head>
<body>


<form action="/cars/update/{{$car->id}}",  method="POST">
        @csrf
        <h2>Adauga Masina:</h2>
        <label>Pret:</label>
        <input type="text" name="pret" value="{{$car->pret}}"/>
        <label>Echipare:</label>
        <input type="text" name="echipare" value="{{$car->echipare}}"/>
        <label>Imagine:</label>
        <input type="file" name="imagine" value="{{$car->imagine}}"/>
        <label>Putere:</label>
        <input type="text" name="putere" value="{{$car->putere}}"/>
        </br>
        <label>Nr.Km:</label>
        <input type="text" name="nr_km" value="{{$car->nr_km}}"/>
        </br>
        <label>Capacitate cilindrica:</label>
        <input type="text" name="cap_cil" value="{{$car->capacitate_cilindrica}}"/>
        </br>
        <label>Serie sasiu:</label>
        <input type="text" name="serie_sasiu" value="{{$car->serie_sasiu}}"/>
        </br>


        <label>Marca:</label>
        <select  id="producers" name="producer_id" required>
           @foreach ($producers as $producer)
            <option value="{{$producer->id}}">{{$producer->nume}}</option>
           @endforeach       
        </select>

        <label>Model:</label>
        <select selected id="carModels" name="car_model_id" required>
        </select>  
        <Br/>


        <label>Combustibil:</label>
        <select selected name="fuel_id" required>
            @foreach($fuels as $fuel)
            <option value="{{$fuel->id}}">{{$fuel->nume}}</option>
            @endforeach        
        </select>
        <label>Tractiune:</label>
        <select selected name="traction_id" required>
            @foreach($tractions as $traction)
            <option value="{{$traction->id}}">{{$traction->nume}}</option>
            @endforeach        
        </select>
        <label>Transmisie:</label>
        <select selected name="transmision_id" required>
            @foreach($transmisions as $transmision)
            <option value="{{$transmision->id}}">{{$transmision->nume}}</option>
            @endforeach        
        </select>
        <label>Culoare:</label>
        <select selected name="color_id" required>
            @foreach($colors as $color)
            <option value="{{$color->id}}">{{$color->nume}}</option>
            @endforeach        
        </select>
        </br>

        <label>Nume Locatie:</label>
        <select selected name="location_id" required>
            @foreach($locations as $location)
            <option value="{{$location->id}}">{{$location->nume}}</option>
            @endforeach        
        </select>
        </br>
        <input type="submit" value="trimite"/>
        </br>
        <a href="/car/{{$car->id}}">Inapoi</a>
    </form>




</body>
</html>