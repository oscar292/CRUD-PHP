<?php

include('db.php'); 
$con = conectar(); 
$id = $_GET['id']; 
$sql = "DELETE FROM users WHERE id=$id"; 
$query = pg_query($con, $sql);

if($query){
    Header("Location: index.php");  
}; 

?>
