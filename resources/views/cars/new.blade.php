<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
<form action="/cars/insert",  method="POST" enctype="multipart/form-data" >
        @csrf
        <h2>Adauga Masina:</h2>
        <label>Pret:</label>
        <input type="text" name="pret" required/>
        <label>Echipare:</label>
        <input type="text" name="echipare" required/>
        <label>Imagine:</label>
        <input type="file" name="imagine"/>
        <label>Putere:</label>
        <input type="text" name="putere" required/>
        </br>
        <label>Nr.Km:</label>
        <input type="text" name="nr_km" required/>
        </br>
        <label>Capacitate cilindrica:</label>
        <input type="text" name="cap_cil" required/>
        </br>
        <label>Serie sasiu:</label>
        <input type="text" name="serie_sasiu" required/>
        </br>


        <label>Marca:</label>
        <select id="producers" name="producer_id" required>        
           @foreach ($producers as $producer) 
            <option value="{{$producer->id}}">{{$producer->nume}}</option>
           @endforeach       
        </select>

        <label>Model:</label>
        <select id="carModels" name="car_model_id" required>        
        </select>  
        <Br/>


        <label>Combustibil:</label>
        <select name="fuel_id" required>
            @foreach($fuels as $fuel)
            <option value="{{$fuel->id}}">{{$fuel->nume}}</option>
            @endforeach        
        </select>
        <label>Tractiune:</label>
        <select name="traction_id" required>
            @foreach($tractions as $traction)
            <option value="{{$traction->id}}">{{$traction->nume}}</option>
            @endforeach        
        </select>
        <label>Transmisie:</label>
        <select name="transmision_id" required>
            @foreach($transmisions as $transmision)
            <option value="{{$transmision->id}}">{{$transmision->nume}}</option>
            @endforeach        
        </select>
        <label>Culoare:</label>
        <select name="color_id" required>
            @foreach($colors as $color)
            <option value="{{$color->id}}">{{$color->nume}}</option>
            @endforeach        
        </select>
        </br>


        <label>Nume Locatie:</label>
        <select name="location_id" required>
            @foreach($locations as $location)
            <option value="{{$location->id}}">{{$location->nume}}</option>
            @endforeach        
        </select>
        </br>
        <input type="submit" value="trimite"/>
        </br>
        <a href="/cars">Inapoi</a>
    </form>
</body>
</html>