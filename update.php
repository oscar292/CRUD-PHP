<?php
include('db.php');

$conn = conectar();

$id = $_GET['id'];

$sql   = "SELECT * FROM users WHERE id = '$id'";
$query = pg_query($conn, $sql);
$row = pg_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuarios</title>
</head>

<body>

    <div>

        <form action="editar.php" method="POST">
            <h1>Editar Usuario</h1>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="name" placeholder="name" value="<?= $row['name'] ?>">
            <input type="text" name="lastname" placeholder="lastname" value="<?= $row['lastname'] ?>">
            <input type="text" name="username" placeholder="username" value="<?= $row['username'] ?>">
            <input type="text" name="password" placeholder="password" value="<?= $row['password'] ?>">
            <input type="text" name="email" placeholder="email" value="<?= $row['email'] ?>">

            <input type="submit" value="Actualizar usuario">
            
        </form>
    </div>
</body>

</html>