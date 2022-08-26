<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT * FROM alquileres";
    $result = $conn->query($sql);
    
    include '../../model/desconectar.php';
?>