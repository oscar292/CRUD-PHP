<?php
include('db.php');
$conn = conectar();

$name     = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email    = $_POST['email'];

$sql = "INSERT INTO users (name, lastname, username, password, email) VALUES ('$name', '$lastname', '$username','$password','$email')";
$query = pg_query($conn, $sql);

if ($query) {
    Header("Location: index.php");
}

?>