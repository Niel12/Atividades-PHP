<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>PHP</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Formas de mostrar data e horas.</h1>
    <h2>
        <?php
            date_default_timezone_set("America/Sao_Paulo"); // definição para setar timezone.
            echo "Home é dia " . date("d/m/y") ; //basic day, month and years.
            echo "São exatamente " . date("G:i:s T"); //basic hour G= horas, i=minutos, s=segundo.
        ?>
    </h2>
  </body>
</html>