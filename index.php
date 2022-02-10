<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sitio PHP</title>
    <!-- CSS de bootstrap -->
    <link href="css/estilo.css" rel="stylesheet">

  </head>
  <body>
    <?php
    echo "<h1> Hito Diego Gómez González </h1> ";
    //bindec
    echo "<h2> Cambio de binario a decimal </h2>";
    echo bindec('<h1>001110001</h1>');
    //octdec
    echo "<h2> Cambio de octal a decimal </h2>";
    echo octdec('<h1>50</h1>');
    //hexdec
    echo "<h2> Cambio de hexadecimal a decimal </h2>";
    echo hexdec('<h1>Diego</h1>');
    //base_convert
    echo "<h2> Muestra en una cadena el número introducido en base a_base, es decir: </h2>";
    echo "<p> Valores entre 2 y 36, los digitos que tengan una base mayor que 10 serán representados con letras de la a a la z. </p>";
    $hex = 'DIEGO';
    echo base_convert($hex, 20, 2);
?>
  </body>
  <!-- Plugins bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
