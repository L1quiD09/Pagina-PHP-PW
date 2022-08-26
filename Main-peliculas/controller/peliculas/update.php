<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM generos ORDER BY gen_nombre;";
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    if(isset($_GET['pel_id'])){
        include '../../model/conectar.php';
        $pel_id = $_GET['pel_id'];
        $sql1 = "SELECT p.pel_id, g.gen_id, g.gen_nombre, p.pel_nombre , p.pel_costo, p.pel_fecha_estreno FROM generos g, peliculas p
                WHERE p.gen_id = p.gen_id
                AND p.gen_id = g.gen_id 
                AND pel_id =".$pel_id;
        $result1 = $conn->query($sql1);
        //Proceso de creacion de tabla y relleno de datos de la BDD
        include '../../model/desconectar.php';
    }
    

    

    if(isset($_POST['pel_id'])){
        include '../../model/conectar.php';
        $pel_id = $_POST['pel_id'];
        $pel_nombre = $_POST['pel_nombre'];
        $gen_id = $_POST['gen_id'];
        $pel_costo = $_POST['pel_costo'];
        $pel_fecha_estreno = $_POST['pel_fecha_estreno'];
        
        $sql = "UPDATE peliculas SET gen_id = '".$gen_id."', pel_nombre = '".$pel_nombre."', pel_costo = ".$pel_costo.", pel_fecha_estreno = '".$pel_fecha_estreno."'
        WHERE pel_id = ".$pel_id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('Location: ../../view/peliculas/index.php');
    }
?>