<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM peliculas";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
    
    if(isset($_GET['pel_id'])){

        include '../../model/conectar.php';

    $id = $_GET['pel_id'];
    $sql = "SELECT p.pel_id, g.gen_nombre, p.pel_nombre, p.pel_costo, p.pel_fecha_estreno
            FROM generos g, peliculas p
            WHERE p.pel_id =".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    }
?>