<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM socios";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
    
    if(isset($_GET['soc_id'])){

        include '../../model/conectar.php';

    $id = $_GET['soc_id'];
    $sql = "SELECT soc_id, soc_cedula, soc_nombre, soc_direccion, soc_telefono, soc_correo
            FROM socios
            WHERE soc_id =".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    }
?>