<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM generos";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
    
    if(isset($_GET['gen_id'])){

        include '../../model/conectar.php';

    $id = $_GET['gen_id'];
    $sql = "SELECT gen_id, gen_nombre FROM generos 
            WHERE gen_id =".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    }
?>