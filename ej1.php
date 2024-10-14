<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
        //INTRODUCE AQUÍ TU CÓDIGO

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num_paquetes = $_POST["num_paquetes"];
        $ancho = $_POST["ancho"];
        $largo = $_POST["largo"];
        $alto = $_POST["alto"];
        $peso = $_POST["peso"];
        $zona = $_POST["zona"];
        $transporte = $_POST["transporte"];

       

        //calcular el volumen del paquete
       $volumen = $ancho * $largo * $alto;

       // 
        if ($volumen <= 0.5) {
            $precio_base = 50;
        }elseif ($volumen <= 1) {
            $precio_base = 75;
        }else{
            $precio_base = 100;
        }

        $preciototal= $precio_base * $volumen;


        if ($peso > 15){
            echo "<p>El envío no se puede hacer porque el peso excede los 15kg.</p>";
        } elseif ($peso > 10){
            $precio_base *= 1.50; 
        } elseif ($peso > 5){
            $precio_base *= 1.25;
        }else{
            $precio_base = 0;
        }

        if ($zona ="canarias"){
            $preciototal *= 1.0 ;  
        } elseif ( $zona = "baleares") {
            $preciototal *= 1.0;
        }    


       
    }
    
    ?>

    <form method="POST" action="">
        <label for="num_paquetes">Número de paquetes:</label>
        <input type="number" id="paquetes" name="num_paquetes" value=""><br><br>

        <label for="ancho">Ancho:</label>
        <input type="number" id="ancho" name="ancho" value=""><br><br>

        <label for="largo">Largo:</label>
        <input type="number" id="largo" name="largo" value=""><br><br>

        <label for="alto">Alto:</label>
        <input type="number" id="alto" name="alto" value=""><br><br>

        <label for="peso">Peso:</label>
        <input type="number" id="peso" name="peso" value=""><br><br>

        <label for="zona">Zona de envío:</label>
        <select id="zona" name="zona" required>
            <option value="Península">Península</option>
            <option value="Baleares">Baleares</option>
            <option value="Canarias">Canarias</option>
        </select><br><br>

        <label for="transporte">Transporte:</label>
        <select id="transporte" name="transporte" value="">
            <option value="Aereo"> Aereo</option>
            <option value="maritimo"> Maritimo </option>
        </select><br><br>

        <label for="calcular">CALCULAR</label>
        <input type ="submit" value ="calcular">
       
    
        
    </form>

</body>
</html>

