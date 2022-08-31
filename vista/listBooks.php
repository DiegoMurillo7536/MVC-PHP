<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="addBooks.php">Agregar</a>
    <table>
    <thead> 
    <tr>    
    <td>ID</td>
    <td>Nombre</td>
    </tr>
    </thead>
    <tbody>
    <?php
    require_once '../controller/BooksController.php';
    $books=new BooksController();
    foreach ($books->getAllBooks() as  $book) {
    ?>
    <tr>
    <td><?php echo $book->id ?></td>
    <td><?php echo $book->nombre ?></td>
    <td><a href="editBooks.php?id=<?php echo $book->id?>">Editar</a> </td>
    <td><a href="deleteBooks.php?delete=<?php echo $book->id?>">Eliminar</a> </td>
    </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
</body>
</html>