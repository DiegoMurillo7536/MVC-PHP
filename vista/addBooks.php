<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once '../controller/BooksController.php';
    ?>
<form method="post" action="../controller/BooksController.php">
    Agregar usuario
    <input type="text" name="nombre" ><br>
    

    <input type="submit" value="Agregar" name="guardar" ><br>
</form>  

</body>
</html>
