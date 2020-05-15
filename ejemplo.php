<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="" method="post">

<select $pa name="paises" size="1" multiple>

<option value="Uruguay">Uruguay</option>

<br>
<option value="Mexico">Mexico</option>
<br>
<option value="Argentina">Argentina</option>
<br>
<option value="Panama">Panama</option>
<br>
<option value="Ecuador">Ecuador</option>


<hr>
<input type="submit" value="Calcular">


</form>

<?php
 if (isset($_POST["paises"])) {

    $pa = $_POST["paises"];

    switch ($pa) {
        case $pa =='Uruguay':
           echo  "Usted selecciono Uruguay <br>
              Idioma = Español  <br>
               Moneda = Peso uruguayo <br>
              Continente: Americano";
            break;
        case $pa =='Mexico':
        echo  "Usted selecciono Mexico <br>
        Idioma = Español  <br>
         Moneda = Peso Mexicano <br>
        Continente: Americano";
            break;
        case $pa =='Argentina':
        echo  "Usted selecciono Argentina <br>
        Idioma = Español  <br>
         Moneda = peso <br>
        Continente: Americano";
            break;
        case $pa =='Panama':
        echo  "Usted selecciono Panama <br>
        Idioma = Español  <br>
         Moneda = Balboa <br>
        Continente: Americano";
            break;
         case $pa =='Ecuador':
         echo  "Usted selecciono Ecuador <br>
         Idioma = Español  <br>
          Moneda = Sucre <br>
         Continente: Americano";
            break;
    };





}
?>
</body>
</html>