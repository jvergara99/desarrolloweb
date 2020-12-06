<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo web avanzado</title>
    <link rel="stylesheet" href="estilos.css" type="text/css">
</head>
<body>
    <header>
        <h1>Desarrollo web avanzado con PHP</h1>
    </header>
    <section>
        <article>
            <h2>Estructuras de control </h2>
            <p>En esta sección se aplicaran diversas estructuras: if, while, for, do-while, foreach, funciones, Switch, array</p>
            <p><em>(Ver resultado en panel de la derecha)</p>
            <br>
            <form class="caja" action="index.php" method="get">
                <h1>Genera el promedio de 5 números con la estructura que elijas:</h1>
                <input type="text" name="num1" value="" placeholder="Ingrese número 1"><br>
                <input type="text" name="num2" value="" placeholder="Ingrese número 2"><br>
                <input type="text" name="num3" value="" placeholder="Ingrese número 3"><br>
                <input type="text" name="num4" value="" placeholder="Ingrese número 4"><br>
                <input type="text" name="num5" value="" placeholder="Ingrese número 5"><br>
                <br>Elije la estructura que desees para generar el promedio<br/>
                <input type="radio" name="estructura" value="While" checked="checked">
                    While<br>
                <input type="radio" name="estructura" value="For"/> 
                    For<br>
                <input type="radio" name="estructura" value="Do-While"/> 
                    Do-While<br>
                <input type="submit" name="" value="Calcular promedio"> <br>
                <output type = "number" name = "">
            </form>
        </article>

        <article>
            <h2>Manejo de cadenas</h2>
            <p>En esta sección se aplicaran diversas funciones para trabajar con las cadenas </p>
            <br>
            <form action="cadena.php" method="get">
                ¿Escribe tu nombre completo utilizando mayúsculas y minúsculas? <br>
                <input type="text" name="nombreC" placeholder="Ingrese tu nombre" /> <br>
                <input type="submit" name="reset" value="Enviar resultado" /> <br>
            </form>
        </article>
    </section>
    <aside>
        
        <h1>RESULTADO</h1>
        <br>
        <?php
        $numeros = array();
        if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3']) && isset($_GET['num4']) 
            && isset($_GET['num5']) && is_numeric($_GET['num1'])  && is_numeric($_GET['num2']) 
            && is_numeric($_GET['num3']) && is_numeric($_GET['num4']) && is_numeric($_GET['num5']));
            {
                $numeros = array ($_GET['num1'], $_GET['num2'], $_GET['num3'], $_GET['num4'], $_GET['num5']);
                ImprimeArreglo($numeros);
                generaPromedio($numeros);
        }

            function imprimeArreglo($numeros) {
                echo "<h2>Números recibidos:</h2>";
                foreach ($numeros as $numero) {
                    echo "$numero <br>";
                }
            }
            
            function generaPromedio($numeros) {
                switch ($_GET["estructura"]) {
                    case 'While':
                        $i = 1;
                        $sumar = 0;
                        while ($i < count($numeros)) {
                            $sumar = $sumar + $numeros[$i];
                            $i++;
                        }
                        echo "<br><h2> El promedio generado con While es: </h2>". $sumar /count($numeros);
                        break;
                    case 'For':
                        $sumar = 0;
                        for ($i = 0; $i < count($numeros); $i++) {
                            $sumar = $sumar + $numeros[$i];
                        }
                        echo "<br><h2> El promedio generado con For es: </h2>". $sumar /count($numeros);
                        break;
                    case 'Do-While':
                        $i = 0;
                        $sumar = 0;
                        do {
                            $sumar = $sumar + $numeros[$i];
                            $i++;
                        } while ($i < count($numeros));
                        echo "<br><h2> El promedio generado con Do-While es: </h2>". $sumar /count($numeros);
                        break;
                    #default:
                     #   echo "Opción incorrecta";
                    #    break;
                }

            }
        ?>
        
    </aside>
    <footer>
        <h5>Fecha de creción: 4.dic.2020</h5>
    </footer>
</body>
</html>
