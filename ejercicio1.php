<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO1</title>
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
                <h1>Ejercicio 1.</h1>
                <p class="parrafo1">Elaborar un script que calcular el área de un círculo.</p>
                <section class="form_wrap3">

                    <form action="ejercicio1.php" method="post" class="form_contact">

                        <div class="user_info">
                            <p> Unidad de medida:</p>
                            <input type="text" name="um" id="um" required placeholder="Ejem:cm,m,km">
                            <p>Ingrese el radio de la circunferencia:</p>
                            <input type="number" name="radio" id="radio" required>
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
                    $um = $_POST["um"];
                    define("PI", 3.1416);
                    $radio = $_POST["radio"];
                    $area = sprintf('%.2f', (PI * $radio * $radio));
                    echo "<h1 id='pa2'>El area del circulo es de <u> $area $um &#178 </u></h1>";
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