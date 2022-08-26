<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT * FROM socios";
    $result = $conn->query($sql);
    
    include '../../model/desconectar.php';
?>