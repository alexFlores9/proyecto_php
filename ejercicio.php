<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">

<select $pa name="pares" size="1" multiple>

<option value="Comenzar">Comenzar</option>
<input type="submit" value="Comenzar">


</form>

<br>
    
    <?php

if (isset($_POST["pares"])) {

    $par = $_POST["pares"];

    switch ($par) {
        case $par =='Comenzar':
for ($i=2; $i <= 50 ; $i=$i + 2) { 
    # code...

    echo "<p> $i </p>";
}


        
            break;
        
    };





}



    ?>
</body>
</html>