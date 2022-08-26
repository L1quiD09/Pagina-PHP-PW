<?php
    if(isset($_GET['act_id'])){

    include '../../model/conectar.php';

    $id = $_GET['act_id'];
    $sql = "SELECT act_id, act_nombre FROM actores
            WHERE
            act_id =".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    }
?>