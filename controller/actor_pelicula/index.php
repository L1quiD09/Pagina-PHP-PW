<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT * FROM actor_peliculas";
    $result = $conn->query($sql);
    
    include '../../model/desconectar.php';
?>