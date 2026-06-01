<!DOCTYPE html>
<html lang="es-mx">
<head>
<meta charset="UTF-8">
<title>Práctica 12-Gpo XB</title>
<link rel="stylesheet" href="CSS/estilos.css"/>
<link rel="stylesheet" href="css/menu.css"/>
<link rel="stylesheet" href="css/problemas.css"/>
<link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
</head>
<body>
<nav>
  <ul>
    <li><a href="index.php" class="current">Inicio</a></li>
    <li><a href="acercade.php">Acerca de</a></li>
  </ul>
</nav>

<div id="contenedor">
  <div class="problema">
    <h2>Problema: Calcular la densidad de la Tierra</h2>
    <p><b>Descripción:</b><br>
    El radio de la Tierra es 6,378 km y su masa es 5.97E24 kg.
    ¿Cuál es la densidad promedio de la Tierra?<br>
    Si el radio de la Tierra se redujera a una tercera parte
    y su masa no cambiara, ¿cuál sería su densidad?<br>
    Si el radio de la Tierra y su masa se reducen a una
    tercera parte ¿cuál sería la misma? ¿por qué?
    </p>
  </div>

  <div class="datos">
    <h3>Datos:</h3>
    <?php
      $radio_km = 6378;
      $masa = 5.97e24;
      $radio_m = $radio_km * 1000;
    ?>
    <p>Radio de la Tierra: <?php echo $radio_km; ?> Km</p>
    <p>Masa de la Tierra: <?php echo $masa; ?> Kg</p>
  </div>

  <div class="formulas">
    <h3>Fórmulas</h3>
    <p>Densidad = Masa / Volumen</p>
    <p>Volumen esfera = (4/3)π r³</p>
  </div>

  <div class="calculos">
    <h3>Solución</h3>
    <?php
      $volumen = (4/3) * M_PI * pow($radio_m, 3);
      $densidad = $masa / $volumen;
      echo "<p>La densidad de la Tierra = " . number_format($densidad, 2) . " kg/metro cúbico</p>";

      $radio_tercio = $radio_m / 3;
      $volumen2 = (4/3) * M_PI * pow($radio_tercio, 3);
      $densidad2 = $masa / $volumen2;
      echo "<p>Densidad con radio = 1/3: " . number_format($densidad2, 2) . " kg/m³</p>";

      $masa_tercio = $masa / 3;
      $densidad3 = $masa_tercio / $volumen2;
      echo "<p>Densidad con radio y masa = 1/3: " . number_format($densidad3, 2) . " kg/m³</p>";
      echo "<p>(Igual a la densidad original, ambas se reducen proporcionalmente)</p>";
    ?>
  </div>

  <div class="resultado">
    <h3>Resultado:</h3>
    <?php
      echo "<p>Densidad original = " . number_format($densidad, 2) . " kg/metro cúbico</p>";
    ?>
  </div>
</div>
</body>
</html>
