<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT * FROM peliculas";
    $result = $conn->query($sql);
    
    include '../../model/desconectar.php';
?>