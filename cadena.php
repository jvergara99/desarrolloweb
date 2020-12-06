<?php
    echo "<h1>Manejo de cadena</h1>";
    if (isset($_GET["nombreC"])) {
        if ($_GET["nombreC"] != "") {
            echo "<h2>Tu nombre es: ". $_GET["nombreC"]. "</h2>";
            echo "<h2> La longitud de tu nombre (cadena) es: ". strlen($_GET["nombreC"]). "</h2>";
            echo "<h2>Tu nombre en minúsculas es: ". strtolower($_GET["nombreC"]);
            echo "<h2>Tu nombre en mayúsculas es: ". strtoupper($_GET["nombreC"]). "</h2>";
            echo "<h2>Tu nombre invertido es: ". strrev($_GET["nombreC"]). "</h2>";
            echo "<br>";
            echo "<br>Regresa a la pagina: ";
            echo '<a href="index.php">Desarrollo web avanzado PHP</a>'; 
        } else {
                echo "No ingresaste tu nombre :-( <br>";
                echo "<br>Ingresa los valores esperados en: ";
                echo '<a href="index.php">Desarrollo web avanzado PHP</a>'; 
            }

    }
?>