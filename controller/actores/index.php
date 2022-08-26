<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT * FROM actores";
    $result = $conn->query($sql);
    
    include '../../model/desconectar.php';
?>