<?php
    include '../../model/conectar.php';
    
    $sql = "SELECT * FROM generos";
    $result = $conn->query($sql);
    
    include '../../model/desconectar.php';
?>