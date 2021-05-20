<?php
require_once("funsiones.php");
$obj=new clsf();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO2</title>
    <link rel="stylesheet" href="icon/css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/cuerpo.css">
    <link rel="stylesheet" href="css/for.css">
    <link rel="stylesheet" href="css/tabla.css">
</head>

<body>
    <main>

        <div class="content-all">
            <header></header>
            <input type="checkbox" id="check">
            <label for="check" class="icon-menu">MENÚ</label>
            <h2>ITCA 2021</h2>


            <nav class="menu">
                <ul>
                    <li> <a href="index.php">Inicio</a></li>
                    <li> <a href="Ejercicio1.php"> Ejercicio1</a></li>
                    <li> <a href="Ejercicio2.php">Ejercicio2</a> </li>
                </ul>
            </nav>
            <article>
                <h1>Ejercicio 2.</h1>
                <p class="parrafo1"> Un alumno desea saber cuál será su calificación final en la materia de lógica computacional.
                    La nota final se obtiene mediante los siguientes porcentajes: <br>
                    55% del promedio de sus tres notas parciales <br> 30% de la calificación del examen final. <br>
                    15% La nota de un trabajo ex-aula.</p>

                <section class="form_wrap4">

                    <form action="ejercicio2.php" method="post" class="form_contact">

                        <div class="user_info">
                            <p> Inserte su nombre:</p>
                            <input type="text" name="nombre" id="nombre" required>
                            <p>Nombre de la Materia:</p>
                            <input type="text" name="materia" id="materia" value="lógica computacional" readonly required>
                            <h1>Evaluaciones</h1>
                            <p>Parcial 1:</p>
                            <input type="number" name="nparcial1" id="nparcial1" min="0" max="10" required>
                            <p>Parcial 2:</p>
                            <input type="number" name="nparcial2" id="nparcial2" min="0" max="10" required>
                            <p>Parcial 3:</p>
                            <input type="number" name="nparcial3" id="nparcial3" min="0" max="10" required>
                            <p>Examen:</p>
                            <input type="number" name="notaexam" id="notaexam" min="0" max="10" required>
                            <p>Trabajo Final:</p>
                            <input type="number" name="notatrab" id="notatrab" min="0" max="10" required>
                            <p>
                                <input type="submit" name="calcular" value="Calcular">
                                <input type="reset" value="Limpiar" onclick="ocultar()">
                            </p>

                        </div>
                    </form>
                </section>
            </article>
            <section id="result">
                <?php
                if (isset($_POST["calcular"])) {
                    echo "<h1>RESULTADO</h1>";
                    $nombre = $_POST["nombre"];
                    $materia = $_POST["materia"];
                    $nparcial1 = $_POST["nparcial1"];
                    $nparcial2 = $_POST["nparcial2"];
                    $nparcial3 = $_POST["nparcial3"];
                    $notaexam = $_POST["notaexam"];
                    $notatrab = $_POST["notatrab"];
                    $promediop1= $obj->promedio($_POST["nparcial1"],0.183333);
                    $promediop2= $obj->promedio($_POST["nparcial2"],0.183333);
                    $promediop3= $obj->promedio($_POST["nparcial3"],0.183333);
                    $promedioexam= $obj->promedio($_POST["notaexam"],0.30);
                    $promediotrab= $obj->promedio($_POST["notatrab"],0.15);
                    $promediototal = round($promediop1 + $promediop2 + $promediop3 + $promedioexam + $promediotrab);
                    echo "<table border='1px' id='ta4'>";
                    echo "<tr>";
                    echo "<td>Inserte su nombre:</td>";
                    echo "<td colspan='2'>$nombre</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Nombre de la Materia:</td>";
                    echo "<td colspan='2'>$materia</td>";
                    echo " </tr>";
                    echo "<tr>";
                    echo "<td>Evaluaciones</td>";
                    echo "<td>Notas</td>";
                    echo "<td>Promedio</td>";
                    echo "</tr>";
                    echo "<tr> ";
                    echo "<td>Parcial 1:</td>";
                    echo "<td>$nparcial1</td>";
                    echo "<td>$promediop1</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Parcial 2:</td>";
                    echo "<td>$nparcial2</td>";
                    echo "<td>$promediop2</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Parcial 3:</td>";
                    echo "<td>$nparcial3</td>";
                    echo "<td>$promediop3</td>";
                    echo "</tr>";
                    echo "<tr> ";
                    echo "<td>Examen:</td>";
                    echo "<td>$notaexam</td>";
                    echo "<td>$promedioexam</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Trabajo Final:</td>";
                    echo " <td>$notatrab</td>";
                    echo "<td>$promediotrab</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan='2'>Promedio Total:</td>";
                    echo "<td colspan='2'>$promediototal</td>";
                    echo "</tr>";
                    echo "</table>";
                } else {
                    echo "<h1 align='center'>BIENVENIDO</h1>";
                }
                ?>
            </section>
            <script>
                function ocultar() {
                    document.getElementById('result').style.display = 'none';
                }

                function mostrar() {
                    document.getElementById('result').style.display = 'block';
                }
            </script>
</body>

</html>