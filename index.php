<?php
require_once 'db.php';
$conexion = conectar();
$query = "SELECT * FROM users";
$resultado = pg_query($conexion, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POSTGRES CRUD</title>
</head>

<body>





    <div>
        <form action="insert_user.php" method="POST">
            <h1> CREAR USUARIOS</h1>
            <input type="text" name="name" placeholder="name">
            <input type="text" name="lastname" placeholder="lastname">
            <input type="text" name="username" placeholder="username">
            <input type="text" name="password" placeholder="password">
            <input type="text" name="email" placeholder="email">
            <input type="submit" value="AGREGAR USUARIO">
        </form>
    </div>

    <div>
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>username</th>
                    <th>password</th>
                    <th>email</th>
                </tr>
            </thead>

            <tbody>

                <?php while ($row = pg_fetch_array($resultado)) : ?>

                    <tr>
                        <th> <?= $row['id'] ?> </th>
                        <th> <?= $row['name'] ?> </th>
                        <th> <?= $row['lastname'] ?> </th>
                        <th> <?= $row['username'] ?> </th>
                        <th> <?= $row['password'] ?> </th>
                        <th> <?= $row['email'] ?> </th>
                    </tr>

                    <th><a href="update.php?id=<?= $row['id'] ?>">editar</th>
                    <th><a href="delete_user.php?id=<?= $row['id'] ?>">eliminar</th>

                <?php endwhile; ?>
            </tbody>

        </table>
    </div>

</body>

</html>