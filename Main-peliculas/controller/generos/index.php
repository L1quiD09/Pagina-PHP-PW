<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM generos";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
?>