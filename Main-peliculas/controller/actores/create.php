<?php
    if(isset($_POST['act_nombre'])){
        include '../../model/conectar.php';
        $act_id = 0;
        $act_nombre = $_POST['act_nombre'];
        $sql = "INSERT INTO actores(act_id,act_nombre) 
        VALUES (0,'".$act_nombre."')";
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('Location: ../../view/actores/index.php');
    }
    
?>