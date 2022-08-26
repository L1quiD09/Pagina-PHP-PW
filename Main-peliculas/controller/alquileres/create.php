<?php
    
    include '../../model/conectar.php';
    $sql = "SELECT * FROM socios ORDER BY soc_nombre;";
    $result_soc = $conn->query($sql);
    include '../../model/desconectar.php';

    include '../../model/conectar.php';
    $sql = "SELECT * FROM peliculas ORDER BY pel_nombre;";
    $result_pel = $conn->query($sql);
    include '../../model/desconectar.php';


    if(isset($_POST['pel_id']) && isset($_POST['soc_id'])&& isset($_POST['alq_fecha_desde'])&&isset($_POST['alq_fecha_hasta'])&& isset($_POST['alq_valor']) && isset($_POST['alq_fecha_entrega'])){
        include '../../model/conectar.php';
        $apl_id = 0;
        $soc_id = $_POST['soc_id'];
        $pel_id = $_POST['pel_id'];
        $alq_fecha_desde = $_POST['alq_fecha_desde'];
        $alq_fecha_hasta = $_POST['alq_fecha_hasta'];
        $alq_valor = $_POST['alq_valor'];
        $alq_fecha_entrega = $_POST['alq_fecha_entrega'];
        
        $sql = "INSERT INTO alquileres(alq_id,soc_id,pel_id,alq_fecha_desde,alq_fecha_hasta,alq_valor, alq_fecha_entrega) 
        VALUES (0,'".$soc_id."','".$pel_id."','".$alq_fecha_desde."','".$alq_fecha_hasta."',".$alq_valor.",'".$alq_fecha_entrega."')";
        $result = $conn->query($sql);
        include '../../model/desconectar.php';
        header('Location: ../../view/alquileres/index.php');
    }
    
?>