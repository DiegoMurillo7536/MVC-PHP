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
    Editar usuario
    
    Nombre:<input type="text" name="nombreupdate" ><br>
    

    <input type="submit" value="Actualizar" name="guardar" ><br>
</form>  

</body>
</html>