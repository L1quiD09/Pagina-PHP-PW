<?php
    
    include '../../model/conectar.php';
    $sql = "SELECT * FROM socios ORDER BY soc_nombre;";
    $result_soc = $conn->query($sql);
    include '../../model/desconectar.php';

    include '../../model/conectar.php';
    $sql = "SELECT * FROM peliculas ORDER BY pel_nombre;";
    $result_pel = $conn->query($sql);
    include '../../model/desconectar.php';

    if(isset($_GET['alq_id'])){
        include '../../model/conectar.php';
        $alq_id = $_GET['alq_id'];
        $sql = "SELECT al.alq_id, s.soc_id, p.pel_id, s.soc_nombre, p.pel_nombre, al.alq_fecha_desde, al.alq_fecha_hasta, al.alq_valor, al.alq_fecha_entrega FROM alquileres al, socios s, peliculas p
            WHERE al.soc_id= al.soc_id
            AND al.pel_id= al.pel_id
            AND al.soc_id= s.soc_id
            AND al.pel_id= p.pel_id
            AND al.alq_id = ".$alq_id;
        $result_alq = $conn->query($sql);
        //Proceso de creacion de tabla y relleno de datos de la BDD
        include '../../model/desconectar.php';
    }

    if(isset($_POST['alq_id'])){
        include '../../model/conectar.php';
        $alq_id = $_POST['alq_id'];
        $soc_id = $_POST['soc_id'];
        $pel_id = $_POST['pel_id'];
        $alq_fecha_desde = $_POST['alq_fecha_desde'];
        $alq_fecha_hasta = $_POST['alq_fecha_hasta'];
        $alq_valor = $_POST['alq_valor'];
        $alq_fecha_entrega = $_POST['alq_fecha_entrega'];
        
        $sql = "UPDATE alquileres 
                SET soc_id='".$soc_id."',
                pel_id='".$pel_id."',
                alq_fecha_desde='".$alq_fecha_desde."',
                alq_fecha_hasta='".$alq_fecha_hasta."',
                alq_valor=".$alq_valor.", 
                alq_fecha_entrega='".$alq_fecha_entrega."' 
                WHERE alq_id =".$alq_id;
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('Location: ../../view/alquileres/index.php');
    }
    
?>