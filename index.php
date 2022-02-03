<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Actividad herencia</h2>
    <?php
        require_once("./Hija/Perro.php");
        require_once("./Hija/Gato.php");

        $perro = new Perro();
        $gato = new  Gato();

        $perro -> comer();
        $perro -> _dormir();
        $gato -> _dormir();
    
    
    ?>
</body>
</html>