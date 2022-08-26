<?php
    if(isset($_GET['act_id'])){

        include '../../model/conectar.php';
    
        $id = $_GET['act_id'];
        $sql = "SELECT act_id, act_nombre FROM actores 
                WHERE act_id =".$id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
    
        }
        
    
        if(isset($_POST['act_id'])){
            include '../../model/conectar.php';
            $id = $_POST['act_id'];
            $act_nombre = $_POST['act_nombre'];
            $sql = "UPDATE actores set act_nombre ='".$act_nombre."' WHERE act_id = ".$id;
            $result = $conn->query($sql);
            include '../../model/desconectar.php';
            header('Location: ../../view/actores/index.php');
    
        }
?>