<?php
    include '../../model/conectar.php';
    $sql = "SELECT al.alq_id, s.soc_nombre, p.pel_nombre, al.alq_fecha_desde, al.alq_fecha_hasta, al.alq_valor, al.alq_fecha_entrega FROM alquileres al, socios s, peliculas p
            WHERE al.soc_id= al.soc_id
            AND al.pel_id= al.pel_id
            AND al.soc_id= s.soc_id
            AND al.pel_id= p.pel_id";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
?>