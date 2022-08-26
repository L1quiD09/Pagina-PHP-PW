<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM actores";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
    
    if(isset($_GET['act_id'])){

        include '../../model/conectar.php';

    $id = $_GET['act_id'];
    $sql = "SELECT act_id, act_nombre FROM actores
            WHERE
            act_id =".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    }
    include '../../model/conectar.php';

    if(isset($_POST['act_id'])){
        $id = $_POST['act_id'];
        $sql = "DELETE FROM actores  WHERE act_id =".$id;
        $result = $conn->query($sql);
        header('Location: ../../view/actores/index.php');
        include '../../model/desconectar.php';

    }
    include '../../model/desconectar.php';


?>