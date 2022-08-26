<?php
    include '../../model/conectar.php';
    $sql = "SELECT p.pel_id, g.gen_nombre, p.pel_nombre , p.pel_costo, p.pel_fecha_estreno FROM generos g, peliculas p
            WHERE p.gen_id = p.gen_id
            AND p.gen_id = g.gen_id";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
?>